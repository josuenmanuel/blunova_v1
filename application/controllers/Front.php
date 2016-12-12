<?php

/**
 * Description of front
 *
 * @author VDEV
 */
class front extends CI_Controller {

    public $lang;
    private $resources = [];

    public function __construct() {
        parent::__construct();
$this->load->model('query_blonova');
        $this->lang = "es";

        $this->lang = isset($_GET['lang']) ? $_GET['lang'] : $this->lang;
        $this->resources['lang'] = $this->lang;

        $this->resources['styles'] = [
            'assets/front/css/bootstrap.css',
            'assets/front/css/style.css',
            'assets/front/css/swiper.css',
            'assets/front/css/dark.css',
            'assets/front/css/font-icons.css',
            'assets/front/fonts/font-awesome/css/font-awesome.min.css',
            'assets/front/css/animate.css',
            'assets/front/css/magnific-popup.css',
            'assets/front/css/responsive.css',
            'assets/front/css/main.css'
        ];
        $this->resources['scripts'] = [
            'assets/front/js/jquery.js',
            'assets/front/js/plugins.js',
            'assets/front/js/functions.js',
            'assets/front/js/site.js'
        ];
    }

    private function simple_page($page,$id=null) {
       $this->load->view('front/layout/header', $this->resources);
       $this->load->model('query_blonova');
        $data['categorias']=$this->query_blonova->listar_categorias();
        $data['productos']=$this->query_blonova->listar_productos();
        if ($id!=null){
        $data['detalle_producto']=$this->query_blonova->datos_producto($id);
        $data['imagenes']=$this->query_blonova->imagenes_producto($id);
        }
        $this->load->view($page,$data);
        $this->load->view('front/layout/footer', $this->resources);
        echo "<script>window.site_url = '" . site_url() . "'</script>";
    }


    public function index() {
        if ($this->config->item("mainten") == true) {
            $this->load->view('mto/index', $this->resources);
            return;
        }
        $this->simple_page("front/pages/content");
    }
    public function product_preview() {
        $this->load->view('front/emkt/product_preview');
    }

    public function breeds() {
        if ($this->config->item("mainten") == true) {
            $this->load->view('mto/index', $this->resources);
            return;
        }
        $this->simple_page("front/pages/breeds-catalog");
    }

    public function gallery() {
        if ($this->config->item("mainten") == true) {
            $this->load->view('mto/index', $this->resources);
            return;
        }
        $this->simple_page("front/pages/gallery");
    }

    public function about() {
        if ($this->config->item("mainten") == true) {
            $this->load->view('mto/index', $this->resources);
            return;
        }
        $this->simple_page("front/pages/about");
    }

    public function faq() {
        if ($this->config->item("mainten") == true) {
            $this->load->view('mto/index', $this->resources);
            return;
        }
        $this->simple_page("front/pages/faq");
    }

    public function contact() {
        if ($this->config->item("mainten") == true) {
            $this->load->view('mto/index', $this->resources);
            return;
        }
        $this->simple_page("front/pages/contact");
    }

    public function shop() {
        if ($this->config->item("mainten") == true) {
            $this->load->view('mto/index', $this->resources);
            return;
        }
        array_push($this->resources['scripts'],
            "assets/front/js/shop/shop.js"
        );
       
         
      
        
        /*$this->load->view('front/pages/shop/shop',$data);*/
        $this->simple_page("front/pages/shop/shop");
    }
    public function product($id) {
        if ($this->config->item("mainten") == true) {
            $this->load->view('mto/index', $this->resources);
            return;
        }
        $this->simple_page("front/pages/shop/single-product",$id);
    }
    public function detalle($id){
        echo $id;
    }
    public function cart() {
        if ($this->config->item("mainten") == true) {
            $this->load->view('mto/index', $this->resources);
            return;
        }
        $this->simple_page("front/pages/shop/cart");
    }
    public function checkout() {
        if ($this->config->item("mainten") == true) {
            $this->load->view('mto/index', $this->resources);
            return;
        }
        array_push($this->resources['styles'],
            "assets/front/css/components/bs-switches.css",
            "assets/front/css/components/radio-checkbox.css"
        );
        array_push($this->resources['scripts'],
            'assets/front/js/components/bs-switches.js',
            "assets/front/js/shop/checkout.js"
        );
        $this->simple_page("front/pages/shop/checkout");
    }
    public function login() {
        if ($this->config->item("mainten") == true) {
            $this->load->view('mto/index', $this->resources);
            return;
        }
        $this->simple_page("front/pages/login");
    }
}
