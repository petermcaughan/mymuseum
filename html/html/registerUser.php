<?php
error_reporting(-1);
ini_set('display_errors','On');

if(isset($_POST["submit"])) {
	$username = htmlentities($_POST["username"]);
	$password = htmlentities($_POST["password"]);
	$con=mysqli_connect("west2-mymuseum-instance1.cykrp8fthqkf.us-east-2.rds.amazonaws.com","pkmcaughan14","phillipman","mymuseum");
        if (mysqli_connect_errno()){
                echo "Failed to connect! : " . mysqli_connect_error();
        }
        else{
		$sql_check="SELECT * FROM users WHERE username='".$username."';";
		$result = mysqli_query($con,$sql_check);
		echo "SQL Check completed.";
		if ($result->num_rows>0){
			echo "Username already exists. Choose again";
		}
		else{
                $sql = "INSERT INTO users VALUES ('".$username."','".$password."','".$username."');";
                $result=mysqli_query($con, $sql);
		if(mkdir("users/".$username,0777,true)){
			session_start();
			$_SESSION = array();
			$_SESSION["username"] = $username;
			header("Location: objects.php");
		}
		else{
		echo "Folder Not Created!";
		}
	}
                mysqli_close($con);
        }
}

?>
