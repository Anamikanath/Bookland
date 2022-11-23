<?php session_start();include "db_conn.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ PAGE</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    

    <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
 <link rel="stylesheet" href="faq.css">
<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

</head>
<body class="body1">
<?php if($_SESSION['islogged']==true)
require_once('php/header2.php');
else
require_once('php/header.php');

?>
    <main>

        <div class="ana"><h1 class="faq-heading">Frequently Ask Questions</h1>
           
    
        <section class="faq-container">
            <hr class="hr-line">
            <div class="faq-one">

                <!-- faq question -->
                <h3 class="faq-page">What products does Bookland.com sell?</h3>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Bookland sell books of native and foreign original prints. Here you will get old books at lower price.</p>
                </div>
            </div>
            <hr class="hr-line">

            <div class="faq-two">

                <!-- faq question -->
                <h3 class="faq-page">Is there any chance to get an idea about a book before buying it?</h3>

                <!-- faq answer -->

                <div class="faq-body">
                    <p>Of course You can see the details of the product you are thinking of buying on our site. You will see the book name, author name,
                         price, discount etc</p>
                </div>
            </div>
            <hr class="hr-line">


            <div class="faq-three">

                <!-- faq question -->
<h3 class="faq-page">How do I open an account or register or log in?</h3>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>If you click on the sign up page from Bookland's home page you will see a page where 
                        you need to give some informations such as first name, last name, email and passsword. Then login page will open.
                         And after login you can visit our website smoothly.
                    </p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-four">

                <!-- faq question -->
<h3 class="faq-page">Can I buy books without being a user of this website?</h3>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Sorry to say that you can't buy any books or add books to the cart without being a user.
                         We have maintained this policy for our security issue.
                    </p>
                </div>
            </div>
            <hr class="hr-line">
        </section>
    </main>
    <br><br><br><br><br>
    
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
    <script src="faq.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="review.js"></script>
</body>


</html>