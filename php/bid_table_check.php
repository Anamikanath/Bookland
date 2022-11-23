<?php

date_default_timezone_set("Asia/Dhaka");
    $user = "root";
    $pass = "";
    $db = "bookdb";
	
	$db_connect = mysqli_connect("localhost", $user, $pass, $db) or die("no database found");
    //echo "Database Connected"."<br>";
    
    $qry = "SELECT * FROM oldbook, time_track  WHERE time_track.Track_ID = oldbook.Time_Track";
    $res = mysqli_query($db_connect, $qry);
    while($row = mysqli_fetch_assoc($res)){
        $starttime = $row['starttime'];
        $endtime = $row['endtime'];
        $bid_id = $row['ID'];
        //echo "$bid_s_time "."$bid_e_time"."<br>";


        $nt = new DateTime($starttime);
        $starttime = $nt->getTimestamp();
          
        $nt = new DateTime($endtime);
        $endtime = $nt->getTimestamp();

        $date = time();
        //echo "$bid_s_time "."$bid_e_time "."$date"."<br>";
        $flag=2;
        if($starttime <= $date && $endtime >= $date)
        {
            $flag=0;
            
            $qry = "UPDATE oldbook SET status = 'ongoing' WHERE ID = '$bid_id'";
            mysqli_query($db_connect, $qry);
        }
        else if($starttime > $date)
        {
            $flag=3;
            $qry = "UPDATE oldbook SET status = 'yet to bid' WHERE ID = '$bid_id'";
            mysqli_query($db_connect, $qry);
        }
        else
        {
            $flag=4;
            $qry = "UPDATE oldbook SET status = 'finished' WHERE ID = '$bid_id'";
            mysqli_query($db_connect, $qry);
        }
    }
    
?>
<html>
  <body>
    <?php
      /*echo $starttime;
      echo '<br>';
      echo $endtime; echo '<br>';
      echo $date;
      echo '<br>';
      echo $flag;*/
    ?>

</body>

</html>