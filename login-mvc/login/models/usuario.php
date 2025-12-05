<?php
require_once __DIR__ . '/../config/database.php';

class usuario {

    public static function autenticar($email, $senha) {
        $conn = Database::getConnection();

        $email = $conn->real_escape_string($email);
        $senha = $conn->real_escape_string($senha);

        $sql = "SELECT * FROM usuarios 
                WHERE email = '$email' AND senha = '$senha'";

        $resultado = $conn->query($sql);

        if ($resultado->num_rows === 1) {
            return $resultado->fetch_assoc();
        }

        return null;
    }
}
