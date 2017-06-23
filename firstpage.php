<html>
	<head>
		<title>First Page</title>
	</head>
	<body>

		<?php
			$linktext = "<Click> & you will see";
		?>

		<a href="secondpage.php?name=<?php echo urlencode("leonard&");?>&id=1000">
			<?php echo htmlspecialchars($linktext) ?></a>



	</body>
</html>