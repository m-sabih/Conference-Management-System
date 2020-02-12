<?php
  session_start(); 
  include_once('library.php');

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../logsign.php');
  }
  if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    unset($_SESSION['username']);
    
    header("location: ../logsign.php");
  }
?>
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/foundation/5.5.0/css/foundation.css'>
</head>
<body>
    <nav class="top-bar" data-topbar role="navigation">

  <section class="top-bar-section">
        <ul class="left">
         <li style="padding-left: 15px; padding-right: 15px;"><p style="padding-top: 5px; color: white; font-size: 20px;" >Conference Management System</p></li>
    </ul>
    <ul class="right">
      <li class="divider"></li>
    <li><?php  if (isset($_SESSION['username'])) : ?>
      <p style=" padding-left: 30px;padding-top: 10px; padding-right: 30px;  color: white;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?></li>
      <li class="divider"></li>
      <li style="padding-left: 15px; padding-right: 15px;"><a  href="../index.php">Back</a></li>
      <li class="divider"></li>
      <li class="divider"></li>
      <li style="padding-left: 15px; padding-right: 15px;"><a  href="../../logsign.php?logout='1'">Logout</a></li>
      <li class="divider"></li>
    </ul>
  </section>
</nav>
            <?php
      $sql = 'SELECT * FROM `users`';
      $result = query($sql);
      ?>

      <div style="padding-top: 80px;" class="container">
    <div class="row">
        <table class="table" width="500">
            <tr>
                <th>User Id</th>
                <th>User Name</th>
                <th>Account</th>
            </tr>     

            <?php 
               // while ($r = mysqli_fetch_assoc($result)) {
            foreach ($result as $key => $r){
            ?>
            <tr>
                <td><?php echo $r['user_id']; ?></td>
                <td><?php echo $r['username']; ?></td>
                <td><?php echo $r['acc_type']; ?></td>
                <td><a href="reviewer.php?id=<?php echo $r['user_id']; ?>">Reviewer</a></td>
                <td><a href="user.php?id=<?php echo $r['user_id']; ?>">User</a></td>

            </tr>
            <?php } ?>

</div>
</body>
</html>