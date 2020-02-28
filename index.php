<?php

require "Controller/FormController.php";

// $path = str_replace('/Aula04', '', $_SERVER['REQUEST_URI']);

switch($path) {
    case "/formulario":
        $obj = new FormController();
        $obj->form();
    break;
    case "":
        $obj = new FormController();
        $obj->home();
    break;
    case "/post":
        $obj = new FormController();
        $obj->post();
    default:
        echo "404 - Não encontrado";
}
