<?php

    if(isset($_GET['error']))  {

      switch($_GET['error']) {
        case 1:
          $text = "Unable to save image into the database.";
          break;
        case 2:
          $text = "Invalid image file.";
          break;
        case 3:
          $text = "File already exists.";
          break;
        default:
          $text = "Unknown message code.";
          break;
      }

      $message = '<div class="alert alert-error fade in">' . $text . '
              <a class="close" data-dismiss="alert" href="#">&times;</a>
            </div>';

    } elseif (isset($_GET['status'])) {

      switch($_GET['status']) {
        case 1:
          $text = "Image uploaded successfully!";
          break;
        default:
          $text = "Unknown message code.";
          break;
      }

      $message = '<div class="alert alert-success fade in">' . $text . '
              <a class="close" data-dismiss="alert" href="#">&times;</a>
            </div>';

    }

    if(isset($message)) {
      echo $message;
    }

?>