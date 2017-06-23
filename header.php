<?php
	#This is how you redirect a page
	#header("HTTP/1.0 404 Not Found");exit;
?>


<html>
	<head>
		<title>Headers</title>
	</head>
	<body>
		
	<?php
		header("Location:session.php");
		exit;
	?>

	</body>
</html> 