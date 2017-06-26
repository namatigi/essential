<?php
	#create database connection.
	$link = mysqli_connect('localhost','root','Paulina@1959');

	if(!$link){
	    die("Database connection failed: ".mysqli_connect_error());
    }else{
	    #select a database to use
	    $db_select = mysqli_select_db($link,'widget_corp');
	    if(!$db_select){
	        die("Database selection failed:  ".mysqli_connect_error());
        }
    }
?>

<html>
	<head>
		<title>Database</title>
	</head>
	<body>
    <?php
    #perform database query.
    $result = mysqli_query($link,"select * from subject");

    if(!($result)){
        die("No results found: ".mysqli_connect_error());
    }

    #Use returned data.
    while($row=mysqli_fetch_array($result)){
        #echo $row[1]. " ".$row[2]."<br/>";
        echo $row['menu_name']. " ". $row['position']."<br/>";
    }
    // var_dump($result);
?>

	</body>
</html>

<?php

mysqli_close($link);
?>