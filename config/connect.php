<?php

$connect = mysqli_connect('localhost', 'root', 'root', 'active');

if (!$connect) {
    die('error connect to database');
}
