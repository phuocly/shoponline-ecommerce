<?php
session_start();
if(isset($_SESSION['gh']))
{
	unset($_SESSION['gh'][$_GET['masanpham']]);
}
header('Location:/cart.php');
?>