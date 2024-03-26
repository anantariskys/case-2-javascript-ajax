<?php

$username = $_GET['username'];
$receiver = $_GET['receiver'];



$file = 'messages.txt';
$messages = file_get_contents($file);


echo $messages;