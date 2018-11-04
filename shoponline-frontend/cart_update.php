<?php
session_start();
if(!empty($_SESSION['gh'])) 
{
	foreach($_SESSION['gh'] as $ms => $sl) 
	{
		if(!empty($_POST['sl'][$ms])) 
		{
			if($_POST['sl'][$ms] >= 1) 
			{
				$_SESSION['gh'][$ms] = $_POST['sl'][$ms];
			}
		}
	}		
}
header('Location:/cart.php');
?>
