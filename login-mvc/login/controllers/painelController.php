<?php
require_once __DIR__ . '/../helpers/auth.php';

class painelController {
    public function index() {
        Auth::proteger();
        require __DIR__ . '/../views/painel.php';
    }
}
