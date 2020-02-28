<?php

require "Controller/formController.php";
// echo $_SERVER['REQUEST_URI'];die;

switch($_SERVER['REQUEST_URI']) {
    case "/formulario":
        $obj = new FormController();
        $obj->form();
    break;
    case "/":
        $obj = new FormController();
        $obj->home();
    break;
    case "/post":
        $obj = new FormController();
        $obj->post();
    default:
        echo "404 - Não encontrado";
}
