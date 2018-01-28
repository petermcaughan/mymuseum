<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
	session_start();
	$user = $_SESSION["username"];
	$images = glob("users/".$user."/*.png");

	foreach($images as $image) {
    	echo '<img src="'.$image.'"/><br />';
	}
  ?>
</body>
</html>
