<?php
    $HOST = 'localhost';
    $USER = 'root';
    $PASS = '';
    $BASE = 'paineldopreco';

    $mysqli = new mysqli($HOST, $USER, $PASS, $BASE);

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
?>