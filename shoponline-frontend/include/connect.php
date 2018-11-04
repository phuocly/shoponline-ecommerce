<?php
session_start(); $_POST['check_inc'] = 1;
define("PATH",'http://laptop.dev');
define("PATH_ADMIN",'http://laptop.dev/admin/');

$server_host="localhost"; 
$server_username="root";
$server_password="";
$database="laptop2016";

$conn= @ mysql_connect("localhost","root","") or die(" khong the ket noi");
@ mysql_select_db($database);
@ mysql_query($conn,"SET NAMES 'UTF8'");
?>