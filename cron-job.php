<?php
   include('config/connection.php');

   $currentDateTime = date("Y-m-d H:i:s");
   
   //$newdate = strtotime ( '-30 minute' , strtotime ( $currentDateTime ) ) ;
   //$fromdate = date ('Y-m-d H:i:s',$newdate);

    $sql = "SELECT * FROM jobs where schedule_at < '$currentDateTime' limit 1";
    $result = $con->query($sql);
	$count = mysqli_num_rows($result);

	if($count > 0){
		$row = $result->fetch_assoc();
		//echo $row['schedule_at'];
		$id = $row['id'];

		$update = "UPDATE jobs SET schedule_at=NULL,complete_at='$currentDateTime', status='1' where id='$id'";
		//echo $update.'<br>';
		$result2 = $con->query($update);
		if($result2)
		{
			$sql2 = "SELECT * FROM jobs where id ='$id'";
			$result3 = $con->query($sql2);
			$row3 = $result3->fetch_assoc();
		}
		 $randomNumber = rand(15,35000); 
	     $_SESSION["fromYear"] = $row3['from_year'];
	     $_SESSION["fromMonth"] = $row3['from_month'];
	     $_SESSION["randomNumber"] = $randomNumber;	     
	     require_once('batch-file.php');
	}else
	{
		echo "Error!";
	}
	

	
?>