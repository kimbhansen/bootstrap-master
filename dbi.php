<?php  
$dbi = mysqli_connect('localhost','root','root','marketguide_user') or die(mysql_errno());
   
if ($dbi->connect_error ){
    die('kan ikke forbinde til SQLserver' . $dbi->connect_errno .
    ":".$dbi->connect_error);
}
$dbi->set_charset('utf8');
?>