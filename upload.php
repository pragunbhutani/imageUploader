<?php

	require('includes/settings.php');

	if ((($_FILES["img_file"]["type"] == "image/gif")
	|| ($_FILES["img_file"]["type"] == "image/jpeg")
	|| ($_FILES["img_file"]["type"] == "image/jpg")
	|| ($_FILES["img_file"]["type"] == "image/pjpeg")
	|| ($_FILES["img_file"]["type"] == "image/x-png")
	|| ($_FILES["img_file"]["type"] == "image/png")))
	{

		if ($_FILES["img_file"]["error"] > 0)	{
    		echo "Return Code: " . $_FILES["img_file"]["error"] . "<br>";
    	}

    	else	{

    		if (file_exists("uploads/" . $_FILES["img_file"]["name"]))	{
            header('Location: index.php?error=3');
      		}

    		else 	{
      			move_uploaded_file($_FILES["img_file"]["tmp_name"],
      			"uploads/" . $_FILES["img_file"]["name"]);

      			$sql="INSERT INTO " . $table_for_images . " (img_name, img_loc)
					   VALUES
					   ('" . $_POST['img_name'] . "','uploads/" . $_FILES["img_file"]["name"] . "')";

      			if(mysqli_query($con, $sql))	{
      				header('Location: index.php?status=1');
      			}	else 	{
      				header('Location: index.php?error=1');
      			}

      		}

    	}

  	}

  	else 	{
  		header('Location: index.php?error=2');

  	}

?>