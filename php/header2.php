<?php
 
$conn=mysqli_connect("localhost","root","","bookdb");
 
  

 $email=$_SESSION['email'];
$sql = "SELECT * FROM users WHERE email='{$email}'";
$result = mysqli_query($conn, $sql);
 
$idq2=mysqli_fetch_assoc($result);
    
         
    $a= $idq2['fname'];
    $b=$idq2['lname'];

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
    <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="navbar-nav ml-auto ">
        
        <li class="navbar-item ml-5">
            <a href="#" class="nav-item nav-link active" style="background-color:#778899;">
                    <h5 id="abc0">
                    
                        <?php
echo $a;

                        
                        ?>
                    </h5>

                </a>
    
        </li>
            <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-user" id="login-btn"></i>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" id="abc1" href="logout.php">Logout</a>
  </div>
</div>
            <li class="navbar-item ml-4">
            <a href="cart.php" class="nav-item nav-link active" style="background-color:#778899;">
                    <h5 id="abc0">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span class=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span class=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
    
        </li>
        </ul>
    </div></nav>
    <div class="topnav">
        <a  href="indexafter.php">Home</a>
        <a href="novel.php">Novel</a>
        <a href="literature.php">Literature</a>
        <a href="science.php">Science Fiction</a>
        <a href="education.php">Educational</a>
        <a href="comic.php">Comic</a>
        <a href="fantasy.php">Fantasy</a>
        <a href="horror.php">Horror</a>
         

      </div></div>
    
</header>