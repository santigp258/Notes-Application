<?php

session_start();

$conn = new mysqli('localhost', 'root', '', 'Agenda');

if ($conn->connect_error) {
    echo $error = $conn->connect_error;
}
