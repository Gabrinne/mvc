<?php

class FormController {
    function form() {
        require './View/form.php';
    }

    function home() {
        require './View/home.php';
    }

    function post() {
        // Salva dados no JSON
        // Ou salva no Banco
        header("location: /");
    }
}