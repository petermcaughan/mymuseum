<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>myMuseum Login</title>	  	
	<script src="js/qrcode.min.js"></script>
	<script src="js/jquery.min.js"></script>
	 <link rel="stylesheet" href="css/intro.css">

</head>
<body>
<?php
	$obj = $_POST["obj"];

	echo	'<form action = "uploadToObject.php" method = "post" enctype="multipart/form-data">';
?>

	<div>
	<label for="pic">Upload File To <?php echo $obj; ?></label>
		<input type = "file" name="fileToUpload" id="fileToUpload" >
		<input type="hidden" name="obj" id="obj" value="<?php echo $obj; ?>" >
		</div>
		
		
		<input type="submit" value="upload image" name="submit">
	</form>
</body>
</html>
