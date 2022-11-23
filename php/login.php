<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "", "Bookdb");

if (!$conn) {
    echo "Connection Failed";
}
$msg = "";

if (isset($_POST['submit'])) {
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
   // $fname=mysqli_real_escape_string($conn, $_POST['fname']);
    //$lname=mysqli_real_escape_string($conn, $_POST['lname']);

    $sql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
    $result = mysqli_query($conn, $sql);
    
 
    if (mysqli_num_rows($result) === 1) {
       
       // $row = mysqli_fetch_assoc($result);
       $_SESSION['email']=$email;
       $_SESSION['islogged']=true;
            header("Location: indexafter.php");
        
       
    } else {
        $msg = "<div class='alert alert-danger' style='color:yellow;text-align: center'>     Email or password do not match.</div>";
    }
 
}





?><!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Login</title>
    <style>
        .ayesha4{
    text-align: center;
    color:#750904 ;
    font-size: 15px;
     margin-top: 8px;
    margin-left: 9px;
    font-weight: bold;
}
    </style>
</head>
<body>
<div class="container">
    <div class="ayesha5">  <h1> Login</h1>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                        <label>Email *</label>  <input type="email" class="email" name="email" placeholder=" " required>
                        <label>Password *</label>  <input type="password" class="password" name="password" placeholder=" " style="margin-bottom: 2px;" required>
                           
                            <!--  /* eta nie pore bhabbo
                            <p><a href="forgot-password.php" style="margin-bottom: 15px; display: block; text-align: right;">Forgot Password?</a></p>
                          */-->
                            <button name="submit" name="submit"class="ayesha2" class="btn" type="submit">Submit</button>
                        </form>
                        <div class="social-icons">
                            <p class="ayesha3">Not have an account ?<a href="register.php"class="ayesha4">Sign Up here</a>.</p>
                        </div>
                    </div>
        </div>
                    </div>
</div>
</body>
</html>