
<?php

session_start();

require_once('php/CreateDb.php');
require_once('php/component.php');
///create instance of createdb class
$database=new CreateDb("Bookdb","newbooks");

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookland</title>
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/shopping.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/review.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

</head>
<body>
<?php require_once('php/header.php');

?>
<br><br>
<div class="container">
  <div class="row">
    <div class="col-8"><img src="back.jpg" alt="booksloversday" style="height:550px"></div>
    <div class="col-4">
    <a href="register.php" class="nav-item nav-link active bg-light"style=" border: 1px solid darkblue "><div class="row pt-2 center ">Sell Your Old Book!!</div></a><hr>
    <a href="Newbooks.php" class="nav-item nav-link active bg-light" style=" border: 1px solid darkblue"><div class="row pt-2 center">New Arrival Books</div></a><hr>
    <a href="register.php" class="nav-item nav-link active bg-light" style=" border: 1px solid darkblue"><div class="row pt-2 center">Auction Section</div></a><hr>
    </div>
  </div>
</div>
 <br><br>
 <center><h2>Recently sold Books</h2></center>
 <br>
<div class="container">
    <div class="row text-center py-2">
    <?php
    $result=$database->getData();
    while ($row = mysqli_fetch_assoc($result)){
    component1($row['book_name'], $row['author_name'], $row['prev_price'], $row['book_price'],$row['book_image'],$row['id']);
}
 ?>
    </div>
</div>
<br><br>

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
   <script src="boot/js/bootstrap.bundle.min"></script>
   <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>