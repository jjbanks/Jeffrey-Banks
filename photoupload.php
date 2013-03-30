 <?php 
   include('../layouts/header_admin.php');
       ?>
  <div id="main">

  <h2>Photo Upload</h2>
<?php


  if (!isset($_POST['MAX_FILE_SIZE'])) { 

?>
  <form action="photo_upload.php" enctype="multipart/form-data" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
    <p><input type="file" name="file" id="file" /></p>
    <p><input type="submit" name="submit" value="Upload" /></p>
  </form>
  <p><a href='../index.php'>Return to Gallery</a></p>
  <?php

 } else {
  
  // Uploads The Photo Image


$allowedExts = array("gif", "jpeg", "jpg");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") ||
($_FILES["file"]["type"] == "image/jpg"))&& ($_FILES["file"]["size"] < 1048576 )&& in_array($extension, $allowedExts))  
{
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
  echo "<br/><p>File successfully uploaded</p><br>";
    echo "<br/><p>Upload: " . $_FILES["file"]["name"] . "</p><br>";
    echo "<br/><p>Type: " . $_FILES["file"]["type"] . "</p><br>";
    echo "<br/><p>Size: " . ($_FILES["file"]["size"] / 1024) . " kB</p><br>";
    echo "<br/><p>Stored in: " . $_FILES["file"]["tmp_name"] ." </p><br>";
    }
 } else
 {
 echo '<br/><p>Invalid file  -- File must be GIF, JPEG, JPG or Picture Size must be under 1 MB </p><br/>';
 }
 


 // Saves The Uploaded File 
$allowedExts = array("gif", "jpeg", "jpg");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") ||
($_FILES["file"]["type"] == "image/jpg"))&& ($_FILES["file"]["size"] < 1048576 )&& in_array($extension, $allowedExts))  
{
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "<br/><p>Upload: " . $_FILES["file"]["name"] . "</p><br>";
    echo "<br/><p>Type: " . $_FILES["file"]["type"] . "</p><br>";
    echo "<br/><p>Size: " . ($_FILES["file"]["size"] / 1024) . " kB</p><br>";
    echo "<br/><p>Temp file: " . $_FILES["file"]["tmp_name"] . "</p><br>";

    if (file_exists("../images/" . $_FILES["file"]["name"]))
      {
      echo "<br/><p>" . $_FILES["file"]["name"] . " already exists. <br/><p>";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../images/" . $_FILES["file"]["name"]);
      echo "<br/><p>File successfully saved and stored in: " . "../images/" . $_FILES["file"]["name"]. "  </p><br>";
      }
    }
}

 
 } // end if isset
 
  include('../layouts/footer_admin.php');
 ?>
