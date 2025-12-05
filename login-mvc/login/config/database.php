<?php
class database {
    private static $host = 'localhost';
    private static $usuario = 'root';
    private static $senha = '';
    private static $database = 'login';
    private static $conn;

    public static function getConnection() {
        if (!self::$conn) {
            self::$conn = new mysqli(
                self::$host,
                self::$usuario,
                self::$senha,
                self::$database
            );

            if (self::$conn->connect_error) {
                die("Erro ao conectar: " . self::$conn->connect_error);
            }
        }
        return self::$conn;
    }
}
