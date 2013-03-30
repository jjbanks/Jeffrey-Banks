<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Please Logon"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
} else {
   }
$user_name = ($_SERVER['PHP_AUTH_USER']);
$password = ($_SERVER['PHP_AUTH_PW']);
$mytxt1 = "admin/access.txt";
$mytxt2 = "admin/unauthorized.txt";
if ($user_name == 'CMWEB241')
{
}
if ($password == 'P@ssword!')
{
header("Location: http://jbanks.mystudentsite.net/CMWEB241/Labs/Lab6/admin/photo_upload.php");
if ($handle = fopen($mytxt1,a))
fwrite($handle,$user_name);
fwrite($handle,$password);
fclose($handle);
}
else
{
if ($handle = fopen($mytxt2,a))
fwrite($handle,$user_name);
fwrite($handle,$password);
fclose($handle);


}
include('layouts/header.php');
?>

    <div id="main">

 
<div style='float: left; margin-left: 20px;'><a href='photo.php?id=images/sailboat.jpg' ><img src='images/sailboat.jpg' alt='photo' width='300' /></a><br /> Sailboat</div>
<div style='float: left; margin-left: 20px;'><a href='photo.php?id=images/seaturtle.jpg'><img src='images/seaturtle.jpg' alt='photo' width='300' /></a><br />Sea Turtle</div>
<div style='float: left; margin-left: 20px;'><a href='photo.php?id=images/Paradise-Valley-Mansion.jpg'><img src='images/Paradise-Valley-Mansion.jpg' alt='photo' width='300' />
</a><br />Paradise Valley Mansion</div>
<div style='float: left; margin-left: 20px;'><a href='photo.php?id=images/beachfront.jpg'><img src='images/beachfront.jpg' alt='photo' width='300' /></a><br /> Beach Front Relaxation</div>
<div style='float: left; margin-left: 20px;'><a href='photo.php?id=images/dock.jpg'><img src='images/dock.jpg' alt='photo' width='300' /></a><br />Dock To Island</div>
    </div>
<?php  
    include('layouts/footer.php');
?>
