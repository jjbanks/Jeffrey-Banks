<?php
    
   include('layouts/header.php');
   
 ?>
  <div id="main">
<?php 
   $myPictures[0] = "images/sailboat.jpg";
   $myPictures[1] = "images/seaturtle.jpg";
   $myPictures[2] = "images/Paradise-Valley-Mansion.jpg";
   $myPictures[3] = "images/beachfront.jpg";
   $myPictures[4] = "images/dock.jpg";
   $myCaptions[0] = "Sailboat";  
   $myCaptions[1] = "Sea Turtle";  
   $myCaptions[2] = "Paradise Valley Mansion";  
   $myCaptions[3] = "Beach Front Relaxation";  
   $myCaptions[4] = "Dock To Island";
   $myPicture =' ';
$myPictureSource = $_GET['id'];  




$link = "<a href='photo.php?id=$myPictureSource'><img src='$myPictureSource' alt='photo' heigth='600' width='600' /></a>";
echo '  <p> ' .$link . 
   '</p>'; 
     $myCaption = ' ';
   $myCaption = $_GET['id'];  
  if ($myCaption ==  $myPictures[0]){
  $myCaption = $myCaptions[0];
   }
  else if ($myCaption == $myPictures[1]){
  $myCaption = $myCaptions[1];
   }
  else if
  ($myCaption ==  $myPictures[2]){
  $myCaption = $myCaptions[2];
  }
  else if ($myCaption ==  $myPictures[3]){
  $myCaption = $myCaptions[3];
  }
  else if($myCaption == $myPictures[4]){
  $myCaption = $myCaptions[4];
  }
echo '<p><br/><br/><br/><br/<br/>'  . $myCaption . '</p><br/><br/><br/><br/<br/>';
$link2 = "<a href='index.php'>Return To Photo Gallery</a>";
echo 
 '<p>' .  
$link2 .
'</p></p><br/><br/><br/><br/<br/>';
echo '</div>';
     
   include('layouts/footer.php');
?>

