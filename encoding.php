<html>
	<head>
		<title>First Page</title>
	</head>
	<body>

	<?php	$url_page = '/php/created/page/url.php';

			$param1 = "this is a string";

			$param2 = '"bad"/<>characters$';

			$linktext = "<Click> & you'll see";

	?>

	<?php
		$url = "http://localhost/";

		$url .=rawurlencode($url_page);

		$url .= "?param1=" . urlencode($param1);


		$url .= "&param2=" . urlencode($param2);
	?>
	</body>
</html>