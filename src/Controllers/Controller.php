<?php

namespace App\Controllers;

class Controller {
    protected function render($view, $data = []): void
    {
        extract($data);
        include SOURCE_DIR . "/Views/$view.php";
    }
}