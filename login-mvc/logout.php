<?php
require_once __DIR__ . '/../app/helpers/auth.php';

Auth::logout();
header("Location: index.php");

