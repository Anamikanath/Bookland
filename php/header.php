<?php
 
$conn=mysqli_connect("localhost","root","","bookdb");
 
  $_SESSION['islogged']=False;

 

?>

<header>

    <nav class="navbarheader navbar navbar-light navbar-expand-lg">
     <div><h1  id="f1" ><i class="fas fa-book">Bookland</i></h1>
    <span  id="f2" ><p id="p1">****A Zion for Bookworms</p>
    </span></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbar-collapse">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="ii" style="background-color:#778899;">
        <ul class="navbar-nav ml-auto">
        <!-- <li class=" user-drop nav-item dropdown ">
                    <a class="link nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user" id="login-btn"></i>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="user-dropdown">

                        <li><a class="dropdown-item" href="register.php"><i class="fa-solid fa-user"></i>Sign up</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="login.php"><i class="fa-solid fa-tags"></i>login</a></li>
                        <hr>
                

                    </ul>
                </li> -->
  <li>
  <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-user" id="login-btn"></i>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" id="abc1" href="register.php">Signup</a>
    <a class="dropdown-item" id="abc1" href="login.php">Login</a>
  </div>
</div>
  </li>
            <li class="navbar-item ml-4">
            <a href="register.php" class="nav-item nav-link active"style="background-color:#778899;">
                   
                </a>
    
        </li>
        </ul>
    </div></nav>
    <div class="topnav">
        <a  href="index.php">Home</a>
        <a href="novel.php">Novel</a>
        <a href="literature.php">Literature</a>
        <a href="science.php">Science Fiction</a>
        <a href="education.php">Educational</a>
        <a href="comic.php">Comic</a>
        <a href="fantasy.php">Fantasy</a>
        <a href="horror.php">Horror</a>
    
      </div></div>
      <script src="boot/js/bootstrap.bundle.min"></script>
    
</header>