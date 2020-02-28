<?php
require_once "./Controller/Controller.php";

class HomeController extends Controller {
    function home() {
        $this->view('home');
    }
}