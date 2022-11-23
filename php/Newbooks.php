
<?php

session_start();

require_once('php/CreateDb.php');
require_once('php/component.php');
///create instance of createdb class
$database=new CreateDb("Bookdb","new_arrival");

if(isset($_POST['add']))
{
    
    ///print_r($_POST['id']);
    if(isset($_SESSION['cart']))
    { 
        $item_array_id=array_column($_SESSION['cart'],"id");
        if(in_array($_POST['id'],$item_array_id))
        {
            echo "<script>Book is already in the cart</script>";
            echo "<script>window.location='indexafter.php'</script>";
        }else
        {
            $count=count($_SESSION['cart']);
            $item_array=array(
                'id'=>$_POST['id']
            );
            $_SESSION['cart'][$count]=$item_array;
           
        }
    }
    else{
        $item_array=array(
            'id'=>$_POST['id']
        );

    $_SESSION['cart'][0]=$item_array;
    ///print_r($_SESSION['cart']);

    }

}
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

</head>
<body>
<?php if($_SESSION['islogged']==true)
require_once('php/header2.php');
else
require_once('php/header.php');

?><br><br>
<div class="container">
    <div class="row text-center py-2">
    <?php
    $result=$database->getData();
    while ($row = mysqli_fetch_assoc($result)){
        if($_SESSION['islogged']==true)
        component($row['book_name'], $row['author_name'], $row['prev_price'], $row['book_price'],$row['book_image'],$row['ID']);
else
component1($row['book_name'], $row['author_name'], $row['prev_price'], $row['book_price'],$row['book_image'],$row['ID']);
}
 ?>
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