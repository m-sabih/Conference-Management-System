<?php
  session_start(); 
  include_once('library.php');
  include_once('conference.php');

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
  
  $obj=new conference();
  $obj->conferences();
?>
</div>
</body>
</html>