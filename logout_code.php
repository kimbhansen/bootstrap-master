
<?php

session_start();
if ($_SESSION["login"] == 'true') {
include 'dbi.php';

session_destroy();

header("location:pd.php");

} else {
   header("location:kd.php");
}

?>