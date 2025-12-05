<?php
class auth {

    public static function iniciarSessao() {
        if (!isset($_SESSION)) session_start();
    }
    public static function logar($usuario) {
        self::iniciarSessao();
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
    }
    public static function logout() {
        self::iniciarSessao();
        session_destroy();
    }
    public static function proteger() {
        self::iniciarSessao();
        if (!isset($_SESSION['id'])) {
            header("Location: index.php?erro=nao-logado");
            exit;
        }
    }
}
