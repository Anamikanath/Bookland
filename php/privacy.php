
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
 <link rel="stylesheet" href="privacy.css">
<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/header.css">
</head>
<style>
    .ooo{
    color: antiquewhite;
    font-family:'Times New Roman', Times, serif;
    text-decoration: solid;
    text-align:center;
    font-weight: bolder;
    font-variant: small-caps;
    font-size: 40px;
    padding-left: 32%;
   
  }
  h3{
    color: hotpink;
    margin-left :120px;
    padding-left: 50%;
    font-style: italic;
  }
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
#body1{
	line-height: 1.5;
	font-family: 'Poppins', sans-serif;
}
*{
	margin:0;
	padding:0;
	box-sizing: border-box;
}
.container{
	max-width: 1170px;
	margin:auto;
     font-weight: bolder;

}
.row{
	display: flex;
	flex-wrap:wrap;
}
.foname{
	list-style: none;
}
.footer{
	background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color:whitesmoke;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
    font-weight: bolder;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	align-items: center;
	bottom: -10px;
	background-color: hotpink;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: grey;
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}
@media(max-width: 767px){
    .footer-col{
      width: 50%;
      margin-bottom: 30px;
  }
  }
  @media(max-width: 574px){
    .footer-col{
      width: 100%;
  }
  }



</style>
<body>
<?php if($_SESSION['islogged']==true)
require_once('php/header2.php');
else
require_once('php/header.php');

?>
 
 <div class="backprivacy">
            <div><br><br>
                <div class="ooo">Bookland Privacy Policy</div>
                <h3>   What we stands for</h3>
            </div>
        </div>  
        
        <div class="para1">
            <p>Bookland.com respects your privacy. Bookland.com knows that you care how information about you is used and shared, 
                and we appreciate your trust that we will do so carefully and sensibly.<br>
                <p id="bold">You are advised to read the Privacy Policy carefully.</p>
                 By accessing the services provided by Bookland.com you agree to the
                 collection and use of your data by Bookland.com in the manner provided in this Privacy Policy.</p>
        </div> 
         
        <div class="para1">
            Assuring the user to:
           <ul class="list">
            <li>Feel our website trustworthy.</li>
            <li>Feel comfortable using our website.</li>
            <li>Feel secure to submit your informations.</li>
            <li>Contact us with your questions or concerns about privacy on this site.</li>
            <li>Know that by using our sites you are consenting to the collection of certain data.</li>
           </ul>
        </div>
        
         
        <div class="para1">
            <p>The information that are collected to idenify each user uniquely:</p>
            <ul class="list">
                <li>Name including first name and last name.</li>
                <li>Email Address.</li>
                <li>Mobile phone number and contact details.</li>
                <li>Financial information (Like account or credit card numbers).</li>
                <li>Other information as per our registration and delivery process.</li>
            </ul>
            <p class="para2"> </p>
        </div>
        
         
        <div class="para1">
            The personal information of user used as:
            <ul class="list">
                <li> To get in touch with you when necessary.</li>
                <li>To provide the services requested by you.</li>
                <li>To preserve social history as governed by existing law or policy.</li>
            </ul>
        </div>  
        <div class="para1">
            Policy Update:
            We reserve the right to change or update this policy at any time by placing a prominent notice on our site. Such changes shall be effective immediately upon posting to this site.
            <br><br>
        </div>
        <footer id="body1" class="footer" >
        <div class="container">
            <div class="row">
                 
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul class="foname">
                        <li><a href="FAQ.php">FAQ</a></li>
                        <li><a href="aboutus.php">about us</a></li>
                        
                        <li><a href="privacy.php">privacy policy</a></li> 
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul class="foname">
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
   <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="review.js"></script>
</body>
</html>