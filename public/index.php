<?php
require_once '../controllers/ChatController.php';

$controller = new ChatController();

$pengirim = isset($_GET['pengirim']) ? $_GET['pengirim'] : '';
$penerima = isset($_GET['penerima']) ? $_GET['penerima'] : '';

$controller->index($pengirim, $penerima);