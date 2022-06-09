<?php 
   include("connection.php");
   session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $myusername = mysqli_real_escape_string($db,$_POST['name']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
    
    
    $sql = "select *from users where name = '$myusername' and password = '$mypassword'";  
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count == 1) {
   
       header("location: login.php?n=1");
    } else {
        $error ="Your Login Name or Password is invalid";
    }
 }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" method="post" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="name" name="name" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                  <?php  if (isset($error)) {?>
                    <div class="error">
                       <?php echo $error?>
                    </div>
                    <?php }else {?>
                        <div class="error" hidden>
                       <?php echo $error?>
                    </div>
                    <?php }?>
                    
                    <input class="btn solid" type="submit" value="Login" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="https://www.facebook.com/" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/?lang=en" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.google.com/" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="https://www.linkedin.com/" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <form action="Registeration.php" method="post" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username"  />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="newemail" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="newpassword" placeholder="Password"  />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirm password" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="tel" name = "phone" placeholder="Phone" />
                    </div>
                    <input type="submit" class="btn" value="Sign up" />
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="https://www.facebook.com/" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/?lang=en" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.google.com/" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="https://www.linkedin.com/" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="img/Registeration.svg" class="image" alt="" />
            </div>
        </div>
    </div>
    <script src="index.js"></script>
</body>

</html>