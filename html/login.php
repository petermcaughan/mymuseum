<?php

ob_start();
if(isset($_POST["submit"])) {
	$username = htmlentities($_POST["username"]);
	$password = htmlentities($_POST["password"]);
	$con=mysqli_connect("west2-mymuseum-instance1.cykrp8fthqkf.us-east-2.rds.amazonaws.com","pkmcaughan14","phillipman","mymuseum");
        if (mysqli_connect_errno()){
                echo "Failed to connect! : " . mysqli_connect_error();
        }
        else{
		//echo "Username: ".$username."\n";
		//echo "Password: ".$password."\n";
		//TODO: Check for existing user
		$sql_check="SELECT * FROM users WHERE username='".$username."';";
	$result=mysqli_query($con, $sql_check);
		if($result->num_rows>0){
			$row = mysqli_fetch_row($result);
			if($password == $row[1]){
				session_start();
				$_SESSION = array();
				$_SESSION["username"] = $username;
				while(ob_get_status()){
					ob_end_clean();
				}
				header("Location: objects.php");
			}
			else{
				echo "Incorrect Username/Password Credentials.";
			}
		}
		else{
			echo "Incorrect Username/Password Credentials.";
		}
                mysqli_close($con);
        }
}

?>
