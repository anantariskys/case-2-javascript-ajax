<?php
require_once '../controllers/ChatController.php';

$controller = new ChatController();

$pengirim = $_GET['pengirim'];
$penerima = $_GET['penerima'];
$lastId = isset($_GET['lastId']) ? intval($_GET['lastId']) : 0;

$controller->getNewMessages($pengirim, $penerima, $lastId);