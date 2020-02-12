<?php
require_once('connect.php');
if(isset($_GET) & !empty($_GET)){
	$id = $_GET['id'];
	if (!mysqli_query($connection,"UPDATE `users` SET acc_type='user' WHERE user_id=$id"))
  {
  echo("Error description: " . mysqli_error($connection));
  }     
  else {
            //echo 'Success! Your file was successfully added!';
             header('Location: index.php');
        }

}
