
<html>
<head>
	<meta charset="utf-8">
    <title>QR Maker</title>	  	
	<script src="js/qrcode.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<?php $url = $_POST["url"]; ?>
</head>

<body>			
	<div id="qrcode"></div>
		<script type="text/javascript">
		var url = "<?php $url = $_POST["url"]; echo $url; ?>";
		console.log(url);
			new QRCode(document.getElementById("qrcode"), url);
		</script>
	


	
</body>
</html>
