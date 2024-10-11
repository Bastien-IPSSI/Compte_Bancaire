<?php

abstract class AbstractController {

    public function render($vue, array $data = []){
        ob_start();
        extract($data);
        include "vue/" . $vue . ".php";
        $content = ob_get_clean();
        include "vue/template.php";
    }

    public function isConnected(){
        return isset($_SESSION["user"]);
    }

    public function getUser(){
        return unserialize($_SESSION["user"]);
    }

}