<!--<!DOCTYPE html >
<html lang="en">

<head>
<title> Jeff's Photo Gallery</title>
    <link href="/CMWEB241/Labs/Lab5/stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
<meta charset="utf-8">
<body>
-->

<?php
   include('../configs/config.php');
if (COPY_FORMAT == "F")
{
 $formattedDate = date("F j, Y");
 }
else if (COPY_FORMAT == "Y")
 {
 $formattedDate = date("Y"); 
 }
else if (COPY_FORMAT == "M")
{
$formattedDate = date("m  Y"); 
}
echo ' <div id="footer"> Copyright ' .$formattedDate . ', Jeff Banks (some rights reserved)
  </div>'; 

?>
</body>
</html>
