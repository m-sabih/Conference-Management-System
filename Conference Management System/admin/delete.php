<?php
require_once('connect.php');
if(isset($_GET) & !empty($_GET)){
	$id = $_GET['id'];
	//if(unlink($r['location'])){
		 $sql = "DELETE FROM `register` WHERE id=$id";
		if(mysqli_query($connection, $sql)){
			header('location: index.php');
	//	}
	}
	echo 'fail';
}
