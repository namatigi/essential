<html>
	<head>
		<title>Second Page</title>
	</head>
	<body>

	<?php 
		print_r($_GET);
		//echo $id;

		$id=$_GET['id'];

		$name=$_GET['name'];

		echo "<br/><strong>".$id.":".$name ."</strong><br/>";
	?>

	<?php
		$string = "Leonard Mangu";
		echo urlencode($string);
		echo "<br/>";

		echo rawurlencode($string);
	?>

	</body>
</html>
