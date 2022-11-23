
 <?php session_start();include "db_conn.php"; ?>
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
<link rel="stylesheet" href="styleabout.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

</head>
<body>
<?php 
if($_SESSION['islogged']==true)
require_once('php/header2.php');
else
require_once('php/header.php');

?>
  <div class="pop1"> 
        <div class="k3">
            
            <blockquote><p class="pop98">"It is is better to know one book intimately<br> than a hundred superficially."</p>
                <cite class="k9">~Donna Tartt, <em>The Secret History</em></cite></blockquote>   
        </div>

        <div class="k1">
            About Us
            
        </div>
        <div class="k2">
             
            Hey Bookworms!! You are at the right place for your desired book.The BookLand team is committed to bring all kinds of best book in
             the world at as cheaper price as possible.
            It provides different categories of book. It includes comics, novels, fantasy, mystery, action,educational (To keep your parents happy<em>&#128515;</em>),best seller books. 
            If you are searching for a book only write the name of book on search option, we will try to find out the book even if we have to move heaven, earth and even old cupboards to find it for you.
            <br> <br>  Are you worry about where to keep the stack of your old and unwanted books?  <br><em class="k10"> No Worry!!</em>We are here with an exciting 
            option of selling your old books. The website provides a bidding section which deals with this old books.
            The book you bid for sell will go through an auction phase to get the desirable price of book.
            BookLand will be wise option for people who are looking to save money on book cost.
        <br>
        I know , I have brainwashed you. To enjoy the exiciting features of the website, please browse the store and make a good use of it.
          Browse through them amd order. Don't forget your friendly website, BookLand.
        We, surely shall never forget you!
        <br>
        <br>
        </div>
    </div>
        </body>
         

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