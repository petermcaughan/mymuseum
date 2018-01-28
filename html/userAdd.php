<?php

	$con=mysqli_connect("west2-mymuseum-instance1.cykrp8fthqkf.us-east-2.rds.amazonaws.com","pkmcaughan14","phillipman","mymuseum");
	if (mysqli_connect_errno()){
		echo "Failed to connect! : " . mysqli_connect_error();
	}
	else{
		echo "started from the bottom now we here";
		$sql = "INSERT INTO users VALUES ('peter','password','directory')";
		$result=mysqli_query($con, $sql);
		echo "This maybe worked?";
		mysqli_close($con);
	}
?>
