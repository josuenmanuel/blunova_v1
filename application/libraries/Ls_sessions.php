<?php

/**
 * Description of Ls_sessions
 * Con esta libreria podremos tener un control de las sesiones de un sitioweb, facil, rapido y seguro...fin de la descripcion
 * 
 * Requirements:
 *      *DB conected: si no esta conectada, la libreria la conectara, si no es posible, detiene el flujo.
 *      *
 * 
 * @package	Lieisoft
 * @author	VDEV
 * @copyright	Copyright (c) 2016
 * @link	https://bitbucket.org/lieison/ci_plantilla
 * @since	Version 1.0.0
 */
class Ls_sessions {

    /**
     * nombre de la tabla de usuarios
     * @var type string
     */
    protected $user_table = "ls_usuarios";

    /**
     * nombre de la tabla de personas
     * @var type string
     */
    protected $person_table = "ls_personas";

    /**
     * nombre de la vista en DB para usuarios y personas
     * @var type string
     */
    protected $user_view = "ls_users_view";

    /**
     * si al crear usuario, inicia sesion automaticamente
     * @var type string
     */
    protected $auto_login = FALSE;

    /**
     * nombre de clave de usuarios, se le asigna un valor bool a esa key para indicar si existe una session iniciada o no
     * @var type string
     */
    protected $session_key = "login";

    /**
     * nombre de la variable de session que contiene todos los datos importandes de la session para poder crear la sessions 
     * esta no existe si no esta iniciada la session
     * @var type string

     */
    protected $session_userdata = "user_info";

    /**
     * Codeigniter Core
     * @var type object
     */
    private $CI;

    /**
     * Codeigniter database instance
     * @var type object
     */
    private $db;

    /**
     * Codeigniter session library
     * @var type object
     */
    private $session;

    // --------------------------------------------------------------------

    /**
     * Constructor - Sets atributos de session
     *
     * Al constructor se le pueden pasar el item de $config de configuracion 'ls_session' en el archivo config.php o su propio custom $config
     * o nada y usar los valores por defauld
     *
     * @param	array	$config = array()
     * @return	void
     */
    public function __construct(array $config = array()) {
        //parent::__construct();
        $this->CI = & get_instance();
        if (count($config) > 0) {
            $this->initialize($config);
        } else if (!is_null($this->CI->config->item('ls_session'))) {
            $this->initialize($this->CI->config->item('ls_session'));
        }
        $this->set_db();
        $this->set_session();
        if ($this->CI->config->item('sess_driver') !== 'database') {
            trigger_error('Error: Session Driver should be "database"', E_USER_ERROR);
        }

        //$this->check_islogin();

        log_message('info', 'Libreria de sesion inizializada');
    }

    // --------------------------------------------------------------------

    /**
     * Inicializa atributos
     *
     * @param	array
     * @return	Ls_sessions
     */
    public function initialize($config = array()) {
        foreach ($config as $key => $val) {
            if (!empty($val)) {
                if (isset($this->$key)) {
                    $method = 'set_' . $key;

                    if (method_exists($this, $method)) {
                        $this->$method($val);
                    }
                }
            }
        }

        return $this;
    }

    /**
     * crear usuarios
     * @param string/int $id_person numero
     * @param string $email
     * @param string $pass
     * @return object stndClass as string
     */
    public function create_user($id_person, $email, $pass, $id_rol) {
        if (empty($id_person) || empty($email) || empty($pass) || !is_numeric($id_person)) {
            return $this->prepared_return(0);
        }

        $id_person = $this->clean_data($id_person);
        $pass = $this->CI->encrypt->encode($this->clean_data($pass));
        $email = $this->clean_data($email);
        $id_rol = $this->clean_data($id_rol);
        
        if ($this->check_user($email)) {
            return $this->prepared_return(4);
        }

        $data_user = array(
            'email' => $email,
            'password' => $pass,
            'id_person' => $id_person,
            'id_user_rol' => $id_rol
        );

        if ($this->db->insert($this->user_table, $data_user)) {
            $user_id = $this->db->insert_id();
            if ($this->auto_login) {
                $query_get_user_data = "SELECT * FROM " . $this->user_view . " WHERE id_user = '" . $user_id . "'";
                $get_user_data = $this->db->query($query_get_user_data);
                if ($get_user_data->num_rows() > 0) {
                    $user_data = $get_user_data->row();
                    unset($user_data->password);
                    $this->session->set_userdata($this->session_key, TRUE);
                    $this->session->set_userdata($this->session_userdata, $user_data);
                } else {
                    return $this->prepared_return(2);
                }
            }
            return $this->prepared_return("TODO BIEN", TRUE);
        } else {
            return $this->prepared_return(7);
        }
    }

    /**
     * cambiar email de usuario
     * @param string $email
     * @param INT $id_user
     * @return object stndClass as string status, msj
     */
    public function change_user_email($email, $id_user = NULL) {
        $email = $this->clean_data($email);

        $data = array(
            'email' => $email
        );

        if (is_null($id_user)) {
            $id_user = $this->get_id_user_login();
            if (json_decode($id_user)->status) {
                $id_user = $id_user->msj;
            } else {
                return $id_user;
            }
        }
        $where = array(
            'id' => $id_user
        );
        if ($this->db->update($this->user_table, $data, $where)) {
            return $this->prepared_return(FALSE, TRUE);
        } else {
            return $this->prepared_return(FALSE);
        }
    }

    /**
     * 
     * @param string $new_pass nueva contraseña
     * @param int $id_user id de usuario; si se deja nulo, se toma el de la session actual
     * @param bool $check_current TRUE : verifica si la contraseña actual coincide (pendiente de validar la actual ingresada), FALSE : nada
     * @param string $cur_pass contraseña actual ingresada
     * @return object stndClass as string
     */
    public function change_user_pass($new_pass, $id_user = NULL, $check_current = FALSE, $cur_pass = NULL) {
        $new_pass = $this->clean_data($new_pass);

        if (is_null($id_user)) {
            $id_user = $this->get_id_user_login();
            if (json_decode($id_user)->status) {
                $id_user = $id_user->msj;
            } else {
                return $id_user;
            }
        }

        if ($check_current) {
            $check_current_pass = $this->check_current_pass($cur_pass, $id_user);
            if (!json_decode($check_current_pass)->status) {
                return $check_current;
            }
        }


        $pass = $this->CI->encrypt->encode($new_pass);

        $data = array(
            'password' => $pass
        );
        $where = array(
            'id' => $id_user
        );
        if ($this->db->update($this->user_table, $data, $where)) {
            return $this->prepared_return(FALSE, TRUE);
        } else {
            return $this->prepared_return(FALSE);
        }
    }

    /**
     * obtiene el id de el usuario actual logueado, lo guarda en "msj" del retorno
     * @return object stndClass as string
     */
    public function get_id_user_login() {
        $session_key = $this->session_key;
        if ($this->session->$session_key) {
            $session_name = $this->session_userdata;
            $id_user = $this->session->$session_name->id_user;
            return $this->prepared_return($id_user, TRUE);
        } else {
            return $this->prepared_return(8);
        }
    }

    /**
     * 
     * @param string $cur_pass contraseña actual INGRESADA
     * @param int $id_user usuario que se quiere verificar la contraseña
     * @return object stndClass as string
     */
    public function check_current_pass($cur_pass, $id_user) {
        $cur_pass = $this->clean_data($cur_pass);
        if (is_null($cur_pass) || empty($cur_pass)) {
            return $this->prepared_return(0);
        } else {
            $this->db->select('password');
            $this->db->where('id', $id_user);
            $query_pass = $this->db->get($this->user_table);
            $db_current_pass = $this->CI->encrypt->decode($query_pass->row()->password);
            if ($db_current_pass != $cur_pass) {
                return $this->prepared_return(6);
            } else {
                return $this->prepared_return(FALSE, TRUE);
            }
        }
    }

    /**
     * verifica si el usuario ya existe
     * @param type $email
     * @return object stndClass as string
     */
    public function check_user($email) {
        $check = "SELECT EXISTS (SELECT id FROM " . $this->user_table . " WHERE email = '" . $email . "') AS 'existe'";
        return $this->db->query($check)->row()->existe;
    }

    /**
     * iniciar session
     * @param string $email email of user
     * @param string $pass password of user
     * @return type
     */
    public function login($email, $pass) {
        if (empty($email) || $pass) {
            return $this->prepared_return(0);
        }

        $email = $this->clean_data($email);
        $pass = $this->clean_data($pass);

        if ($this->check_user($email)) {
            $query_get_user_data = "SELECT * FROM " . $this->user_view . " WHERE email = '" . $email . "'";
            $get_user_data = $this->db->query($query_get_user_data);
            $user_data = $get_user_data->row();
            $id_user = $user_data->id_user;
            if ($user_data->password == $pass) {
                unset($user_data->password);
                $this->session->set_userdata($this->session_key, TRUE);
                $this->session->set_userdata($this->session_userdata, $user_data_session);
                return $this->prepared_return(FALSE, TRUE);
            } else {
                $this->session->set_userdata($this->session_key, FALSE);
                $this->session->unset_userdata($this->session_userdata);
                return $this->prepared_return(3);
            }
        } else {
            $this->session->set_userdata($this->session_key, FALSE);
            $this->session->unset_userdata($this->session_userdata);
            return $this->prepared_return(2);
        }
        $this->session->set_userdata($this->session_key, FALSE);
        $this->session->unset_userdata($this->session_userdata);
        return $this->prepared_return(1);
    }

    /**
     * borra todos los valores de la session
     * @return boolean true
     */
    public function logout() {
        $this->session->set_userdata($this->get_name_session_key(), FALSE);
        $this->session->unset_userdata($this->get_name_session_userdata());
        return TRUE;
    }

    public function get_name_user_table() {
        return $this->user_table;
    }

    public function get_person_table() {
        return $this->person_table;
    }

    public function get_name_session_key() {
        return $this->session_key;
    }

    public function get_name_session_userdata() {
        return $this->session_userdata;
    }

    public function set_user_table($user_table) {
        $this->user_table = $user_table;
    }

    public function set_person_table($person_table) {
        $this->person_table = $person_table;
    }

    public function set_session_key($session_key) {
        $this->session_key = $session_key;
    }

    public function set_session_userdata($session_userdata) {
        $this->session_userdata = $session_userdata;
    }

    public function set_db() {
        if (!class_exists('CI_DB')) {
            $this->CI->load->database();
        }
        $this->db = $this->CI->db;
    }

    public function set_session() {
        if (!class_exists('CI_Session')) {
            $this->CI->load->library('session');
        }
        $this->session = $this->CI->session;
    }

    /**
     * ----> catagolo de errores: <-----
     * 0 : "error  porque los parametros no existen y se les asigna null (se detiene la ejecucion)"
     * 1 : "error desconocido"
     * 2 : "el usuario no existe en la tabla usuarios"
     * 3 : "las constraseñas no coninciden (input y database)"
     * 4 : "el email de usuario que se intenta crear....ya existe"
     * 5 :  recordar contraseña "El correo ingresado no existe"
     * 6 : cambiar contraseña "Contraseña antigua no concide con la base de datos - se cerrara sesion" 
     * 7 : nuevo usuario no se pudo registrar, error en DB
     * 8 : session no iniciada
     * 
     * 
     * 
     * @param string $msj num of catalog
     * @param bool $status Si todo esta bien TRUE, sino FALSE
     * @return object stndClass as string
     */
    private function prepared_return($msj, $status = FALSE) {
        if ($msj === FALSE) {
            return json_encode(array(
                'status' => $status
            ));
        } else {
            return json_encode(array(
                'status' => $status,
                'msj' => $msj
            ));
        }
    }

    /**
     * limpia $string de caracteres de escape, tag's html y demas intencinoes maliciosas
     * @param string/int $string
     * @return string
     */
    public function clean_data($string) {
        return $this->CI->security->xss_clean(strip_tags(trim($string)));
    }

    public function test_comunication() {
        return TRUE;
    }

    private function check_islogin() {
        if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
            $protocol = 'https://';
        } else {
            $protocol = 'http://';
        }
        if (
                (
                empty($this->session->userdata($this->session_key)) ||
                $this->session->userdata($this->session_key) == FALSE
                ) &&
                (
                $_SERVER['REQUEST_URI'] != '/' &&
                $_SERVER['REQUEST_URI'] != '/login'
                )
        ) {
            header('Location: ' . $protocol . $_SERVER['SERVER_NAME']);
        }
    }

}
