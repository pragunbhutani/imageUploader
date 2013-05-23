<!DOCTYPE html>

<html>
	<head>
		<title>Image Uploader</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>

	</head>

	<body>

		<div class="container">

			<h1 class="text-center">Media Library</h1>

			<a href="index.php"><i class="icon-arrow-left"></i> Back to image uploader.</a>

			<table class="table table-hover span8 add-top-margin">

				<thead>
					<th class=>#</th>
					<th id="imageColumn">Image</th>
					<th>Name</th>
					<th>Action</th>
				</thead>

				<?php

				include('settings.php');

				$result = mysqli_query($con, "SELECT * FROM " . $table_for_images . " ORDER BY id DESC");

				while($row = mysqli_fetch_array($result))	{
					echo '<tr id="' . $row['id'] . '" class="fade in">

							<td>' . $row['id'] . '</td>
							<td>
								<a href="' . $row['img_loc'] . '">
									<img class="thumbnail span2" src="' . $row['img_loc'] . '"</div>
								</a>
							</td>
							<td>' . $row['img_name'] . '</td>
							<td><button class="del-btn btn btn-danger" rel="' . $row['id'] . '">Delete</button></td>

						</tr>';
				}
				?>

			</table>

		</div>

		<div id="backtotop">
			<i class="icon-arrow-up icon-white"></i>
		</div>

	</body>

	</html>