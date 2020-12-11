<?php


require_once '../config/connect.php';

$id = $_POST['id'];
$company = $_POST['company'];
$place = $_POST['place'];
$item = $_POST['item'];
$money = $_POST['money'];
$address = $_POST['address'];
$nalcost = $_POST['nalcost'];
$ostatcost = $_POST['ostatcost'];
$osencost = $_POST['osencost'];
$marketcost = $_POST['marketcost'];
$value = $_POST['value'];

mysqli_query($connect, "UPDATE `active` 
                                SET `company`= '$company', `place` = '$place', `item` = '$item', `money` = '$money', `address` = '$address', `nalcost` = '$nalcost', `ostatcost`= '$ostatcost', `osencost` = '$osencost', `marketcost`= '$marketcost', `value`='$value' 
                                WHERE `active`.`id` = '$id'");

header('Location: /');