<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$id = $_POST['ID'];
$personalId = $_POST['personalid'];
$accountId = $_POST['accountid'];
$amount = $_POST['amoun'];

if (empty($name)) {
    $name_error = 'Enter your name';
}
if (empty($name)) {
    $surname_error = 'Enter your surname';
}
if (empty($name)) {
    $name_error = 'Enter your name';
}
include('index.php');
