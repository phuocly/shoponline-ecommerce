<?php
session_start();
if(isset($_GET['masanpham']))
{
	$masanpham=$_GET['masanpham'];
	$gh=array();
	if (isset($_SESSION['gh'])) //Da co it nhat 1 san pham trong gio hang
	{
		$gh=$_SESSION['gh'];
		$t=0;
		foreach($gh as $ms=>$sl)
		{
			if($ms==$masanpham) // sp da co trong gio hang truoc do
			{
				$gh[$ms]=$sl+1;
				$t=1;
			}
		}
		if($t==0) //sp moi chua co trong gio hang
			$gh[$masanpham]=1;
		$_SESSION['gh']=$gh;
	}
	else //Chua co san pham nao
	{
		$gh[$masanpham]=1;
		$_SESSION['gh']=$gh;
	}
}
header("Location:/cart.php");
die();
?>