<?php

	require('includes/settings.php');

	if(isset($_POST['delete_id']) && !empty($_POST['delete_id']))	{
		$delete_id = mysql_real_escape_string($_POST['delete_id']);

		$file_name = mysqli_query($con, 'SELECT `img_loc` FROM ' . $table_for_images . ' WHERE `id`=' . $delete_id);
		$result = mysqli_fetch_array($file_name);

		$dir = dirname(__FILE__) . "/" . $result['img_loc'];

		$result = mysqli_query($con, 'DELETE FROM ' . $table_for_images . ' WHERE `id`=' . $delete_id);
		if($result != false)	{
			unlink($dir);
			echo 'true';
		}
	}

?>