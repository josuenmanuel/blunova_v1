<?php


/**
 * Configuracion de la llave AES-256 
 * para encriptacion de las contraseñas
 * **/
if(!function_exists("get_key")){
    function get_key()
    {
        return "APANtByIGI1BpVXZTJgcsAG8GZl8pdwwa84";
    }
}


/**
 * Region de configuracion de correo electronico
 * : config
 * : email from config
 * **/

if(!function_exists("email_config")){
    function email_config(){
        
         $instance = &get_instance();
         
         $DEBUG_ = $instance
                        ->config->item("mail_debug");
        
         if($DEBUG_){
            $config['protocol']='smtp';
            $config['smtp_host']='ssl://p3plcpnl0226.prod.phx3.secureserver.net';
            $config['smtp_port']='465';
            $config['smtp_timeout']='10';
            $config['smtp_user']='test@lieison.org';
            $config['smtp_pass']='support2015';
         }
         
         $config['charset']='utf-8';
         $config['newline']="\r\n";
         $config['wordwrap'] = TRUE;
         $config['mailtype'] = 'html';
         
         return $config;
            
    }
}

if(!function_exists("email_from")){
    function email_from(){
        return array(
            "from"  => "info@lieison.com",
            "name"  => "Lieisoft"
        );
    }
}


if(!function_exists("email_from_error")){
    function email_from_error(){
        return array(
            "from"  => "info@lieison.com",
            "name"  => "Lieisoft"
        );
    }
}



/**
 * Varios
 */

if(!function_exists("check_model")){
    
    //PARCHE ANALIZADOR SINTACTICO PARA LAMP Y WAMP
    function check_model(array $model){
        
        $path1       = APPPATH . "models/" ;
        $path2       = APPPATH . "models/";
        
        if(count($model) == 1){
           $path1 .=  ucwords($model[0]);
           $path2 .=  $model[0];
        }else{
            $path1 .= $model[0] . "/" . ucwords($model[1]);
            $path2 .= $model[0] . "/" . $model[1];
        }
 
        if(file_exists( $path1 . ".php")){
            return TRUE;
        }else
        {
            if(file_exists($path2 . ".php")){
                return TRUE;
            }
            
            return FALSE;
        }
    }
}

if(!function_exists("system_token")){
    function system_token(){
        return "=";
    }
}


if(!function_exists("internet_conection")){
    function internet_conection(){
        if(!@fsockopen("www.google.com", 80)){
            return FALSE;
        }else{ return TRUE; }
    }
}
