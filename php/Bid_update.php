<?php
 include "db_conn.php";
 session_start();
 $email=$_SESSION['email'];
              $sql = "SELECT * FROM users WHERE email='{$email}'";
              $result = mysqli_query($conn, $sql);
               
              $idq2=mysqli_fetch_assoc($result);
                 
                       
                  $loggeduserid=     $idq2['ID'];
	$bidder_id = $idq2['ID'];
	$bid_id = $_POST['bid'];
	//$seller_id='SELECT * FROM users order by id desc';
        //    $rq1=mysqli_query($conn,$seller_id);
            //   $rq2=mysqli_fetch_assoc($rq1);
	$new_bid = $_POST['new_bid'];
	
	
	$user = "root";
	$pass = "";
	$db = "bookdb";
	$_GET['bid_ok'] = 1;
			
	$db_connect = mysqli_connect("localhost", $user, $pass, $db) or die("no database found");
	//echo $bidder_id, $bid_id, $new_bid;
	
	$qry = "SELECT Top_Bid,price FROM oldbook WHERE ID = '$bid_id'";
	$res = mysqli_query($db_connect, $qry);
	$row = mysqli_fetch_assoc($res);
	$prev_top_bid = $row['Top_Bid'];
	if($row['price'] > $new_bid)
	{
		
		header("Location: view.php");
	}
	else if($new_bid > $prev_top_bid)
	{
		$qry = "UPDATE oldbook SET Top_Bid = '$new_bid', Top_Bidder_ID = '$bidder_id' WHERE ID = '$bid_id'";
		mysqli_query($db_connect, $qry);
		$_POST['details'] = $bid_id;
		header("Location: view.php");
	}
	else 
	{
		header("Location: view.php");
	}

	
?>