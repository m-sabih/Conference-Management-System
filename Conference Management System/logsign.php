<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Log in / Sign up</title>
  
  
 
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

<section class="login-section">
    <section class="login-container">
        <h3>Login to Your Account</h3>
        <p class="explanatory-text">Log in to your account.</p>

<form class="login-form" action="logsign.php" method="post">
                                    <?php include('errors.php'); ?>
                                    <input type="text" name="username" value="<?php echo $username; ?>" class="input" id="user_login" autocomplete="on" placeholder="Username">
                                    <input type="password" name="password" class="input" id="user_pass" autocomplete="on" placeholder="Password">
                                    <div class="input-group">
                                         <button type="submit" class="btn" name="login_user">Login</button>
                                    </div>
                            </form>
    </section><!--
    
 --><section class="signup-container">
        <h3>Sign Up for an Account</h3>
        <p class="explanatory-text">Let's get you all set up.</p>
                                <form class="signup-form" action="logsign.php" method="post">
                                    <?php include('errors.php'); ?>
                                    <input type="text" name="username" class="input" value="<?php echo $username; ?>" id="user_name" autocomplete="on" placeholder="Username">
                                    <input type="email" name="email"  value="<?php echo $email; ?>" class="input" id="user_email" autocomplete="on" placeholder="Email">
                                    <input type="password" name="password_1" class="input" id="user_pass" autocomplete="off" placeholder="Password">
                                    <input type="password" name="password_2" class="input" id="user_pass" autocomplete="off" placeholder="Password">
                                    <div class="input-group">
                                        <button type="submit" class="btn" name="reg_user">Register</button>
                                    </div>
                                </form>
    </section>
    
    <section class="switcher-overlay">
        <svg viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M 0,0 L 100,0 L 80,100 L 0,100 z"></path>
        </svg>
        <div class="signup-text">
            <h3>Don't have an account yet?</h3>
            <p class="explanatory-text">Let's get you all set up.</p>
            <button class="switch">Sign up</button>
        </div>

        <div class="login-text">
            <h3>Already signed up?</h3>
            <p class="explanatory-text">Log in to your account.</p>
            <button class="switch">Log in</button>
        </div>
    </section>

</section>
  
  

    <script  src="js/index.js"></script>




</body>

</html>
