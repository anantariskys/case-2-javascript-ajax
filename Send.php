<?php
date_default_timezone_set('Asia/Jakarta');
$message = $_POST['message'];
$username = $_POST['username'];
$receiver = $_POST['receiver'];


$file = 'messages.txt';
$timestamp = date('Y-m-d H:i:s');

$content = $timestamp . ': ' . $username . ' -> ' . $receiver . ': ' . $message . "\n";
file_put_contents($file, $content, FILE_APPEND | LOCK_EX);