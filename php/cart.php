<?php
session_start();
require_once('php/CreateDb.php');
require_once('php/component.php');
$db=new CreateDb("Bookdb","newbooks");
if(isset($_POST['remove']))
{
    if($_GET['action']=='remove')
    {
        foreach($_SESSION['cart'] as $key=>$value)
        {
            if($value['id']==$_GET['id'])
            {
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/shopping.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">
</head>
<body class="bg-light">
<?php
require_once('php/header2.php');
?>
<div class="container-fluid">
    <div class="row px-5">
    <div class="col-md-7">
        <div class="shopping-cart">
            <h4 class="center"style="color:darkblue"><strong>View Cart</strong></h4><hr>
            <?php
            $total=0;
            if(isset($_SESSION['cart']))
            {
                $count=count($_SESSION['cart']);
                if($count==0)
                {
                    ?>
                    <div>
            <center> <img src="123.jpg" alt="Book makes you enrich"></center>
              </div>
              <?php

                }
                else{
             $book_id=array_column($_SESSION['cart'],'id');
            $result=$db->getData();
            while($row=mysqli_fetch_assoc($result))
            {
                foreach($book_id as $id)
                {
                    if($row['id']==$id){
                        cartElement($row['book_image'],$row['book_name'],$row['author_name'],$row['book_price'],$row['id']);
                    $total=$total+(int)$row['book_price'];
                    }
                }
            }
        }
            }
            else
            {
                
               // echo "<h5>Cart is Empty</h5>";
               ?>
               
                <div>
            <center> <img src="123.jpg" alt="Book makes you enrich"></center>
              </div>
              <?php
            }
            ?>
            
        </div>
    </div>
    <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
        <div class="pt-4">
            <h6 class="center"style="color:SlateBlue">PRICE DETAILS</h6><hr>
            <div class="row price-details">
            <div class="col-md-6">
                <?php
                if(isset($_SESSION['cart']))
                {$count=count($_SESSION['cart']);
                echo "<h6>Price($count items)</h6>";
                }else
                {
                    echo "<h6>Price(0 items)</h6>";
                }
                ?>
                <h6>Delivery Charges</h6><hr>
                <h6>Amount Payable</h6>
            </div>
            <div class="col-md-6">
                <h6>$<?php echo $total; ?></h6>
                <?php 
                ?>
                <?php
                if(isset($_SESSION['cart']))
                {
                    $count=count($_SESSION['cart']);
                    if($count==0) echo "<h6>$0</h6><hr>";
                    else
                    echo "<h6>$150</h6><hr>";
                }
                else
                {
                    echo "<h6>$0</h6><hr>";
                }
                ?>
                <h6>$
                    <?php
                    if(isset($_SESSION['cart']))
                    {
                        $count=count($_SESSION['cart']);
                        if($count!=0){
                        echo $total+150;
                        }
                        else
                        {
                            echo $total;
                        }
                    }
                    else
                    {
                        echo $total;  
                    }
                    ?>
                </h6>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>
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