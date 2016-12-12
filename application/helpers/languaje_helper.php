<?php

/**
 * @todo Funcion de multilenguaje 
 * @version 1.2
 * @author Rolando Arriaza <rolignu90@gmail.com>
 * @copyright (c) 2016, Rolignu
 * * */
if (!function_exists("lang_")) {

    /**
     * @deprecated since version 1.2 , sustituida por meta_lang
     * @param string $type que tipo de lenguaje es por ejemplo "en" buscara dentro del objeto en 
     * @param string $view a que vista pertenece por ejemplo puede ser header , footer , index etc ...
     * @param string $object el objeto a referir si digamos el objeto a referir esta dentro de la vista header y se llama about_us entonces ese objeto llamara
     * @param string $find es un objeto relativo en cual buscara dentro de otro objeto 
     * 
     *                  ejemplo 
     *                  
     *                  en->    header->    navigator-> about_us
     *              
     *                  type    view        find         object
     * ** */
    function lang_($type, $view, $object, $find = null) {

        $instance = &get_instance();
        $instance->load->library("Session");



        $directory = "./files/lang/lang.json";

        if (!file_exists($directory)) {
            return null;
        }

        $find = $find == null ? "content" : $find;
        $languaje = null;


        //PARCHE PARA LENGUAJE SERA MAS RAPIDO SI SE PRECARGA UNA VEZ 

        if (!isset($instance->session->languaje)) {
            $languaje = file_get_contents($directory);
            $instance->session->languaje = $languaje;
        } else {
            $languaje = $instance->session->languaje;
        }

        //LENGUAJE LLAMADO N VECES PARA PRUEBAS
        // $languaje    = file_get_contents($directory);

        $lang = json_decode($languaje);


        if (empty($view)) {
            return @$lang
                    ->$type
                    ->$find
                    ->$object;
        }

        return @$lang
                ->$type
                ->$find
                ->$view
                ->$object;
    }

}



if (!function_exists("meta_lang")) {

    /**
     * @todo Funcion de multilenguaje de forma metadatos 
     * @version 1.1
     * @since 1.0
     * @author Rolando Arriaza <rolignu90@gmail.com>
     * @param string $type lenguaje 
     * @param array $object arreglo de datos ["a" , "b" , "c"] hace referencia a  json jerarquia 
     * 
     * <code>
     * 
     * {
     *  a: {
     *          b: {
     *              c: "LANGUAJE"
     *          }
     *      }
     * }
     * </code>
     * 
     * @param string $file archivo a llamar , por defecto es lang que hace llamado a lang.json
     * @copyright (c) 2016, Rolignu
     * 
     * @todo reparaciond e algunos bugs 
     * 
     * */
    function meta_lang($type, $object, $file = "lang") {

        $instance = &get_instance();

        $instance
                ->load
                ->library("Session");
        

        $debug = $instance
                    ->config
                    ->item("lang_debug");


        $directory = "./files/lang/$file.json";

        
        if (!file_exists($directory)) {
            return NULL;
        }



        if (!$debug) {

            if (!$instance->session->has_userdata("languaje")) {
                $languaje = file_get_contents($directory);
                $instance->session->languaje = $languaje;
            } else {
                $languaje = $instance->session->languaje;
            }
           
            
        } else {
            $languaje = file_get_contents($directory);
        }
        
        

        $lang = json_decode($languaje, TRUE);
        


        /**
         * parche que verifica si el index o lenguaje existe 
         * en dado caso no exista ... 
         * **/
        
        if(!array_key_exists($type , $lang))
        {
            if(is_array($lang) && sizeof($lang) >= 1)
            {
                $keys = array_keys($lang);
                $type = $keys[0];
            }
        }
        
        if (sizeof($lang[$type]) === 0) {
            return NULL;
        }


        $var = null;
        

        for ($i = 0; count($object); $i++) {
            if ($var == null) {
                $var = isset($lang[$type][$object[$i]]) ? $lang[$type][$object[$i]] : NULL;
            } else if ($i + 1 == count($object)) {
                
                /**
                 * parche problemas de resolucion de arreglos
                 * se verifica si el arreglo su logitud esta en existencia.
                 * **/
                
                $var = isset($var[$object[$i]]) ? $var[$object[$i]] : NULL;
                break;
            } else {
                
                 /**
                 * parche problemas de resolucion de arreglos
                 * se verifica si el arreglo su logitud esta en existencia.
                 * **/
                
                if(!isset($object[$i])){
                    $var = null;
                    break;
                }
                
                $var = isset($var[$object[$i]]) ? $var[$object[$i]] : NULL;
                if($var == NULL) break;
            }
        }


        return $var;
    }

}