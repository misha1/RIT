<?php
/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */
require_once '../config/connect.php';
/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */
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
/*
 * Делаем запрос на добавление новой строки в таблицу
 */
mysqli_query($connect, "INSERT INTO `active` (`id`, `company`, `place`, `item`, `money`, `address`, `nalcost`, `ostatcost`, `osencost`, `marketcost`, `value`) 
                                            VALUES (NULL, '$company', '$place', '$item', '$money', '$address', '$nalcost', '$ostatcost', '$osencost', '$marketcost', '$value')");


header('Location: /');