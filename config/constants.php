<?php
session_start();

define('SITEURL','http://localhost/food_order_web_site/');
$dbServerName= "localhost";
$dbUserName ="root";
$dbPassword = "";
$dbName="food-order";

$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName) or die();

?>