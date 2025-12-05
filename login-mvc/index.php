<?php
require_once __DIR__ . '/../app/controllers/loginController.php';

$controller = new loginController();
$action = $_GET['action'] ?? 'index';
if ($action === 'autenticar') {
    $controller->autenticar();
} else {
    $controller->index();
}
