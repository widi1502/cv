<?php
$host = "localhost";
$user = "widi";
$password = "12345";
$database = "CV";

$sambung = mysqli_connect($host, $user, $password, $database);
if (!$sambung) {
    die('maaf anda tidak bisa terhubung ke server' . mysqli_connect());
}