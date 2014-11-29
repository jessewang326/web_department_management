
<!--------------------------------------------------------------
*folders.php
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
*This file creates a forder for upload files the system.
-------------------------------------------------------------->

<?php
class Folder {
    function createFolder($foldername) {
         if (is_dir($foldername)) {
//if folder already exists just return 
             return false; 
          } else {
//if folder doesnt exist, then create it and set permissions
              mkdir($foldername,0755);
             $error = error_get_last();
             echo $error['message'];
            return false;
        } //end of else
   } //end of function
} //end of class
?>
