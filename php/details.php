<?php session_start();?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href = "" rel = "stylesheet" type = "text/css" >
<title>Bidding details</title>
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/shopping.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">
<?php require_once('php/header2.php');

?>
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-light">
<?php
	//header("Location: bid_table_check.php");
	include "bid_table_check.php";
?>


	
	
	
		<?php
		include "db_conn.php";
			$user = "root";
			$pass = "";
			$db = "bookdb";
			
			$db_connect = mysqli_connect("localhost", $user, $pass, $db) or die("no database found");

			//echo "Database Connected"."<br>";
			$bid_id = $_POST['details'];
			$qry = "SELECT oldbook.ID, oldbook.nameofbook, oldbook.author, oldbook.edition,oldbook.price,
						oldbook.chooseoption1, oldbook.chooseoption2,oldbook.image_url, oldbook.status, time_track.starttime, time_track.endtime,oldbook.seller_id ,oldbook.Top_Bid,oldbook.Top_Bidder_ID
							FROM oldbook, time_track 
								WHERE ID = '$bid_id' AND oldbook.Time_track = time_track.Track_ID";

			 
			$res = mysqli_query($db_connect, $qry);
			$row = mysqli_fetch_assoc($res);
			 
			 
			//echo $row['Product_Name'] . " " . $row['Category'] . " " . $row['Top_Bid'] . " " . $row['Top_Bidder_ID'] . " " . $row['Start_Time'] . " " . $row['End_Time'] . " " . $row['Status'] . "<br>";
			//echo "<div style = 'width : 450px; height : 100%; background-color : white; float : left'>";
				//echo "<image src = 'image.png' style = 'margin-left : 20%; margin-top : 3%'>";
				//echo "<h3 style = 'margin-left : 20%; color : blue'>BID ID : " . $row['image_url'] . "</h3>";
				
				
				
           ?>
		   <div class="container-fluid">
	 <div class="row px-5">
    <div class="col-md-6 offset-md-0 border rounded mt-5 bg-white h-25 pt-4 pb-4 pl-5">
        <div class="shopping-cart">
				
				<img src="uploads/<?=$row['image_url']?>">
				<?php
 
 $conn=mysqli_connect("localhost","root","","bookdb");
  
  
 
  $email=$_SESSION['email'];
 $sql = "SELECT * FROM users WHERE email='{$email}'";
 $result = mysqli_query($conn, $sql);
  
 $idq2=mysqli_fetch_assoc($result);
	
		  
	 $loggeduserid=     $idq2['ID'];
	 
 
  
				echo "<h1>  </h1>";
    
				//echo "<h3 style = 'margin-left : 0%; color : blue'>BID ID :</h3>" ;
				//echo "<h3 style = 'margin-left : 0%; color : blue'>BID ID : " . $row['ID'] . "</h3>";
				echo "<h6 >Book Name : " . $row['nameofbook'] . "</h6>";
				echo "<h6 >Author name : " . $row['author'] . "</h6>";
				echo "<h6 >Edition : " . $row['edition'] . "</h6>";
				echo "<h6 >Is the cover page teared? : " . $row['chooseoption1'] . "</h6>";
				echo "<h6 >Is any page missing? : " . $row['chooseoption2'] . "</h6>";
				echo "<h6>Bid Start Time : " . $row['starttime'] . "</h6>";
				echo "<h6 >Bid End Time : " . $row['endtime'] . "</h6>";
				echo "<h6 >Initial Bid : $" . $row['price'] . "</h6>";
				echo "<h6 >Status : " . $row['status'] . "</h6>";
				// echo  $row['seller_id'];
				 
				  /* print_r($rq1);
				   echo "<br>";
				  print_r($rq2); echo "<br>";
				  print_r($rq2['ID']);
				  echo "<br>";*/
				 
			/*print_r($idq); echo "<br>";
			print_r($idq1); echo "<br>";
			print_r($idq2); echo "<br>";*/
			/*print_r($idq2['seller_id']);*/
		
			if($loggeduserid==$row['seller_id'])
			{
				echo "<h5 '>Top Bid until now : $" . $row['Top_Bid'] . "</h5>";
				echo "<h5 '>Id of Top bidder  : " . $row['Top_Bidder_ID'] . "</h5>";
				 $topid=$row['Top_Bidder_ID'];
				 if($topid!=0){
				 $sq= "SELECT * FROM users WHERE ID=$topid";
				 $idq11=mysqli_query($conn,$sq);
			$idq22=mysqli_fetch_assoc($idq11);
			/*print_r($sq);
			print_r($idq11);
			print_r($idq22);
			print_r($idq22['fname']);
			print_r($idq22['lname']);
			print_r($idq22['email']);*/
			echo "<h5 '>Name of the Top bidder: " . $idq22['fname'] . " ". $idq22['lname'] ."</h5>";
				echo "<h5 '>Email of the Top bidder  : " . $idq22['email'] . "</h5>";
				 }
			
			}
				?>
				
			
			</div>
		</div>
				
			<div class="col-md-4 offset-md-2 border rounded mt-5 bg-white h-25">
        
		<div class="mx-auto" style="width: 200px;">
			<div class="row price-details">
			<div class="col-md-6">
		    <?php	
			if(strcmp($row['status'], "ongoing") == 0){
				echo "<h5 align=center>Status:<font color = 'green'>Ongoing</h5>";
				/*echo "<table style = 'border-collapse : collapse; width : 50%' align = center><tr><th colspan = 2>Top Bid</th></tr>";
					if($row['Top_Bidder_ID'] == $row['Seller_ID'])
						echo "<td colspan = 2 align = 'center'><b>Haven't Bid Yet</b></td>";
					else 
						echo "<td align = 'center'>" . $row['Top_Bidder_ID'] . "</td><td align = 'center'>" . $row['Top_Bid'] . "</td>";
				echo "</table>";
				echo "<br><br>";*/
				if($loggeduserid!=$row['seller_id'])
			{
				echo "<h3 align = center><font color = 'red'>BidNow!</font></h3>";
				echo "<form action = 'Bid_update.php' align = 'center' method = 'post'>";
					//echo "<input type = 'text' name = 'bid_id' placeholder = 'Bid ID' style = 'height : 40px; width : 225px; font : 35px'><br>";
					//echo "<input type = 'text' name = 'bidder_id' placeholder = 'Your ID' style = 'height : 40px; width : 225px; font : 35px'><br>";
					echo "<input type = 'text' name = 'new_bid' placeholder = 'Your Bid' style = 'height : 40px; width : 225px; font : 35px' required><br>";
					 
               
                 
                       
                 
					echo "<button type = 'submit' name = 'bid' value = " . $bid_id . " style = 'background-color : green; padding : 5px 10px; text-align: center'>BID</button>";
				echo "</form>";
				}
						
				}
				else if(strcmp($row['status'], "yet to bid") == 0)
					echo "<h2 style = 'margin-left : 35%; margin-top : 20%'><font color = 'red'>YetToBid</h2>";
				else 
				{
					//echo "<h2 style = 'margin-left : 32%; margin-top : 15%'>Status : <font color = 'red'>Finished</h2>";
					echo "<h2 align=center><font color = 'red'>Finished</h2>";
					//echo "<table style = 'border-collapse : collapse; width : 50%' align = center><tr><th colspan = 2>Top Bid</th></tr>";
						
				}
				
			//echo "</div>";
		    ?>
			</div>
		  </div>
        </div>
    </div>
    </div>
</div>
<br><br><br><br>
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