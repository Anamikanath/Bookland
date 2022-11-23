<?php session_start();include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Bidding post</title>
     <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/shopping.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/view.css">
<?php if($_SESSION['islogged']==true)
require_once('php/header2.php');
else
require_once('php/header.php');

?>
<style>
    body{

background-image: url(pexels-cottonbro-3661193.jpg);
background-position:center ;
background-repeat: no-repeat;
background-size: cover;
text-align: center;

}
</style>
    </head>
<body>
    <br><br>

<div class="container">
 <div>
<?php 
          $sql = "SELECT * FROM oldbook ORDER BY id DESC";
          
          $res = mysqli_query($conn,  $sql);
           
          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div  class="book_container">
              <div class="img">
              <img src="uploads/<?=$images['image_url']?>">
              </div>
              <?php  
                    echo "<br>"; ?>
                    <div class="value">
                   
                   <div class="b1">
                    <?php
                    echo ''.$images['nameofbook'];echo "<br>";?>
                    </div>
                    <div class="b2">
                        <?php
                    echo ''.$images['author'];echo "<br>";
                    ?>
                    </div>
            </div>
                    
                     
                     <div class="det">
                        <?php
                    echo ' ' . '<form method = "post" action = "details.php"><button name = "details" type = "submit" style="background:darkblue; color:white;" value = ' . $images['ID'] . '>Details</button></form>';
                    echo "<br>";
                    ?>
                    </div>
                    <?php
               ?>
             
              </div>
          		
    <?php }  }
    ?>  
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

            </span>
            <br><br><br>
            <footer id="body1" class="footer" >
        <div class="container">
            <div class="row">
                 
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="FAQ.php">FAQ</a></li>
                        <li><a href="aboutus.php">about us</a></li>
                        
                        <li><a href="privacy.php">privacy policy</a></li> 
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="Newbooks.php">newbooks</a></li>
                        <?php if($_SESSION['islogged']==true)
 echo '<li><a href="view.php">oldbooks</a></li>';
else
echo '<li><a href="register.php">oldbooks</a></li>';   ?>   
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/Bookland-106698755406318"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>