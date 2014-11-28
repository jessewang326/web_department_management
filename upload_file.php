<!--------------------------------------------------------------
*upload_file.php
*
*Computer Science 3319a
*
*Assignment 3
*
*Author: Jiaxi Wang
*
*Email: jwang724@uwo.ca
*
*This is a web-based TA management system.
*
*This file uploads files in the system.
-------------------------------------------------------------->

<?php
  include ('folders.php');
  $allowedExts = array("gif", "jpeg", "jpg", "png", "txt");
  $temp = explode(".", $_FILES["file"]["name"]);
  $extension = end($temp);  
  $extension = strtolower($extension);
  $uploadholder = dirname(__FILE__) . "/upload";
  $uploadFolder = new Folder;
  if ((($_FILES["file"]["type"] == "image/gif")
      || ($_FILES["file"]["type"] == "image/jpeg")
      || ($_FILES["file"]["type"] == "image/jpg")
      || ($_FILES["file"]["type"] == "image/pjpeg")
      || ($_FILES["file"]["type"] == "image/x-png")
      || ($_FILES["file"]["type"] == "image/png")
      || ($_FILES["file"]["type"] == "text/plain"))
      && ($_FILES["file"]["size"] < 500000)
      && in_array($extension, $allowedExts)) {
            if ($_FILES["file"]["error"] > 0) {
                        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
            } else {
                        $uploadFolder->createFolder($uploadholder);
                        if (file_exists("upload/" . $_FILES["file"]["name"])) {
                                    echo '<p><hr>';
                                    echo $_FILES["file"]["name"] . " already exists. ";
                                    echo '<p><hr>';
                                    $taPic = "NULL";
                        } else {
                                    move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
                                    $taPic = "upload/" . $_FILES["file"]["name"];
                        } // end of else
            } // end of else
     } else {
            echo "Invalid file";
    } //end of else
?>
