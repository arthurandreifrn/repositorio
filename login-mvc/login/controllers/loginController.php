<?php
require_once __DIR__ . '/../models/usuario.php';
require_once __DIR__ . '/../helpers/auth.php';

class loginController {

    public function index() {
        require __DIR__ . '/../views/login.php';
    }

    public function autenticar() {
        if (empty($_POST['email']) || empty($_POST['senha'])) {
            $erro = "Insira o email e a senha.";
            require __DIR__ . '/../views/login.php';
            return;
        }

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $usuario = Usuario::autenticar($email, $senha);
        if ($usuario) {
            Auth::logar($usuario);
            header("Location: painel.php");
            exit;
        }
        $erro = "E-mail ou senha incorretos.";
        require __DIR__ . '/../views/login.php';
    }
}
