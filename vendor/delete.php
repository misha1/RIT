<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `active` WHERE `active`.`id`= '$id'");

header ('Location: /');