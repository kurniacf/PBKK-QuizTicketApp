<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'pbkk_quiz');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

echo 'Success... ' . $mysqli->host_info . "\n";

$mysqli->close();
