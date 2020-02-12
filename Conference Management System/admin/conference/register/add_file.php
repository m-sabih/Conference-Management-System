 <?php
   session_start(); 
     include_once('library.php');
  require_once('connect.php');
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../../logsign.php');
  }

        $c_name = mysqli_real_escape_string($connection, $_POST['c_name']);
        $c_des = mysqli_real_escape_string($connection, $_POST['c_des']);
          $c_date = mysqli_real_escape_string($connection, $_POST['c_date']);
          $c_loc = mysqli_real_escape_string($connection, $_POST['c_loc']);
          echo $c_name;


            $id = $_GET['id'];
        //$sql = "UPDATE file SET status='Accepted' WHERE id=$id";
        $sql =" UPDATE conferences SET con_name= '$c_name', con_description='$c_des', con_date='$c_date',location = '$c_loc'  WHERE conf_id=$id ";
                //if(mysqli_query($connection, $sql)){
                        //header('location: index.php');

            if (!mysqli_query($connection,$sql))
            {
                echo("Error description: " . mysqli_error($connection));
                header('Location: failed/index.html');
            }
            else{
                header('Location: success/index.html');
            }     

        // Execute the query
        //$result = $dbLink->query($query);
        //
//else {
 //header('Location: index.php');
//}
 //header('Location: index.html');
// Echo a link back to the main page
//echo '<p>Click <a href="index.html">here</a> to go back</p>';
?>