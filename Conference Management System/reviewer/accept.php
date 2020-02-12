<?php
require_once('connect.php');
if(isset($_GET) & !empty($_GET)){
	$id = $_GET['id'];
	$sql = "SELECT * FROM `file` WHERE `id`={$id}";
	$res = mysqli_query($connection, $sql);
	$r = mysqli_fetch_assoc($res);
	//if(unlink($r['location'])){
		 $sql = "UPDATE file SET status='Accepted' WHERE id=$id";
		if(mysqli_query($connection, $sql)){
			header('location: index.php');
	}
	//else

	//	echo error;
}
