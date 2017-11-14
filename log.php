<?php
/**
 * Created by PhpStorm.
 * User: franciscomera
 * Date: 11/13/17
 * Time: 9:04 PM
 */
    if(is_ajax()){
        $var = array("mensaje"=>"Hola Mundo");
        echo json_encode($var);
    }

    function is_ajax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    }