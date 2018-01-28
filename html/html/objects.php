<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
	ini_set('display_errors','On');
	session_start();
	$username = $_SESSION["username"];
	$path = "users/".$username;
	$images = glob($path."/*.{jpg,png,gif}",GLOB_BRACE);
        
	foreach($images as $image) {
	$path_parts = pathinfo($image);
	$picname = $path_parts['filename'];
	echo '<p style="text-align:center;">'.$picname.'</p>';
    	echo '<img style="display:block; max-height:600px; max-width:600px; margin: 0 auto;" src="'.$image.'"/><br />';
	echo '<form style="text-align:center; display:block;" action="editObject.php"method="post"> <input type="submit" value = "Upload Memories for Object" /> <input type="hidden" name="obj" value="'.$picname.'"> </form>';
	echo '<form style="text-align:center; display:block;" action="displayObject.php" method="post"> <input type="submit" value = "Display Memories for Object" /> <input type="hidden" name="obj" value="'.$picname.'"> </form>';
	echo '<form style="text-align:center;" action="displayQR.php" method="post"> <input type="submit" value="Generate QR Code for Object" /> <input type="hidden" name="url" value="mymuseum.me/displayObject.php?user='.$username.'&obj='.$picname.'"> </form>';
	}
  ?>

 <form>
<input type="button" value="Create New Object" onclick="window.location.href='createObject.html'" />
</form> 

</body>
</html>
