<?php

class Controller {
    protected function view($pagina) {
        require "./View/$pagina.php";
    }
}