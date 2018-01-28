<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
	ini_set('display_errors','On');
	session_start();
	if(isset($_SESSION["username"])){
		$username = $_SESSION["username"];
	}
	else {
		$username = $_GET["user"];
	}
	if (isset($_POST["obj"])) {
		$obj = $_POST["obj"];
	}
	else {
		$obj = $_GET["obj"];
	}

	$images = glob("users/".$username."/".$obj."/*.{jpg,png,gif}",GLOB_BRACE);
        
	foreach($images as $image) {
    	echo '<img style="max-width:100%;" src="'.$image.'"/><br />';
	}

	$videos = glob("users/".$username."/".$obj."/*.{mp4, ogg}", GLOB_BRACE);
	foreach($videos as $video){
	echo '<video style="max-height:600px; max-width:600px" controls> <source src="'.$video.'" type="video/mp4"> Your browser does not support HTML5 video. </video> <br/>';
	}

  ?>
</body>
</html>
