<?php 
   session_start();
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
    include "db_conn.php";
    echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";
    date_default_timezone_set("Asia/Dhaka");
    $nameofbook = mysqli_real_escape_string($conn, $_POST['nameofbook']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $edition = mysqli_real_escape_string($conn, $_POST['edition']);
    $chooseoption1 = mysqli_real_escape_string($conn, $_POST['chooseoption1']);
    $chooseoption2 = mysqli_real_escape_string($conn, $_POST['chooseoption2']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $starttime=mysqli_real_escape_string($conn, $_POST['starttime']);
    $endtime=mysqli_real_escape_string($conn, $_POST['endtime']);
    
    $img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
    if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: question.php?error=$em");
        }else {

            // $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   // $lname = mysqli_real_escape_string($conn, $_POST['lname']);
   // $email = mysqli_real_escape_string($conn, $_POST['email']);
   // $password = mysqli_real_escape_string($conn, md5($_POST['password']));
   // $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
                // Insert int o Database
                $user = "root";
    /*$pass = "";
    $db = "login";
	
	$db_connect = mysqli_connect("localhost", $user, $pass, $db) or die("no database found");*/
              $time_trackID = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM time_track")) + 1; 
              $email=$_SESSION['email'];
              $sql = "SELECT * FROM users WHERE email='{$email}'";
              $result = mysqli_query($conn, $sql);
               
              $idq2=mysqli_fetch_assoc($result);
                 
                       
                  $loggeduserid=     $idq2['ID'];
              $seller_id=$loggeduserid;
              //$r1=mysqli_query($conn,$seller_id);
                // $r2=mysqli_fetch_assoc($r1);
                
               // echo "$time_trackID"."<br>";
               //$r3=$r2['id']; 
                $qry = "INSERT INTO time_track VALUES ('$time_trackID', '$starttime', '$endtime')";
                $qry_exec = mysqli_query($conn, $qry);
                $bid_id = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM oldbook")) + 1;
   $nt = new DateTime($starttime);
	$starttime = $nt->getTimestamp();
	$search = mysqli_query($conn,"SELECT id FROM users") ;
$sub = mysqli_fetch_row($search);
print_r($sub);
	
	$nt = new DateTime($endtime);
	$endtime = $nt->getTimestamp();
	
	$date = time();
	
	echo "$starttime"." "."$endtime "."$date"."<br>";
    echo $date;
    $flag=0;
	if($starttime > $date)
	{
        $flag=1;
		$status = "yet to bid";
	}
	else if($starttime <= $date && $endtime >= $date)
	{
        $flag=2;
		$status = "ongoing";
	}
	else if($starttime < $date)
	{
        $flag=3;
		$status = "finished";
	}
     
    $qry1 = "INSERT INTO oldbook VALUES ('$bid_id', '$nameofbook', '$author', '$edition', '$chooseoption1', '$chooseoption2', '$price','$new_img_name','$time_trackID','$status' ,'$price','0','$seller_id')";
	// $qry1 = "INSERT INTO oldbook VALUES (`$bid_id`, `$nameofbook`, `$author`, `$edition`, '$chooseoption1`, `$chooseoption2`, `$price`,`$new_img_name`,`$time_trackID`,$status' )";
    $qry_exec1 = mysqli_query($conn, $qry1);
    ?>
    <html>
    <body>
        <?php
        /*echo 'start';
        echo $starttime;
        echo '<br>';
        echo 'end ';
        echo $endtime;
        echo '<br>';
        echo 'date ';
        echo $date;
        echo '<br>';
        echo 'flag ';
        echo $flag;*/
        ?>
</body>

</html>
<?php

	if($qry_exec && $qry_exec1)
	{
		echo "Successfylly added";
		header("Location: view.php");
	}
	



    }
    else {
        $em = "You can't upload files of this type"; 
        header("Location: question.php?error=$em");
    }


}
}else {
    $em = "unknown error occurred!";
    header("Location: quetion.php?error=$em");
}
    }else {
        header("Location: question.php");
}
?>