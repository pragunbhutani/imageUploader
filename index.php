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

		<div class="container well">

			<h1 class="text-center">Upload Image</h1>

			<div class="span8 offset2">

				<div class="messages text-center" id="message">
					<?php include('messages.php'); ?>
				</div>

				<form method="post" action="upload.php" enctype="multipart/form-data" class="form-horizontal" id="form">

					<legend>Image Details</legend>

					<div class="control-group">
						<label class="control-label" for="img_name">Image Name : </label>
						<div class="controls">
							<input type="text" name="img_name" id="img_name" /><br />
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="file">Image : </label>
						<div class="controls">
							<input type="file" name="img_file" id="img_file" style="display:none" />

							<div class="input-append">
								<input id="photoCover" class="input-large" type="text" />
								<a class="btn" onclick="$('#img_file').click();">Browse</a>
							</div>

						</div>
					</div>

					<hr />

					<div class="text-center">
							<button type="submit" class="btn btn-primary" id="upload-btn"><i class="icon-circle-arrow-up icon-white"></i> Upload</button>
							<a href="mediaLibrary.php" class="btn"><i class="icon-picture"></i> Media Library</a>
					</div>

				</form>

			</div>

		</div>

	</body>

</html>