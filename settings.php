<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "imageUploader";
	$table_for_images = "images";

	$con = mysqli_connect($host, $user, $pass, $dbname);

	if(mysqli_connect_errno($con))	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}


	$createTable = "CREATE TABLE IF NOT EXISTS `" . $table_for_images . "` (
	                `id` int(11) NOT NULL AUTO_INCREMENT,
	                `img_name` text NOT NULL,
	                `img_loc` text NOT NULL,
	                PRIMARY KEY (`id`)
	                ) DEFAULT CHARSET=utf8";

	mysqli_query($con, $createTable) or die('Unable to create table : ' . mysqli_error($con));

?>