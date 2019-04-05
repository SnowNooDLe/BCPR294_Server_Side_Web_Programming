<?php
session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
	$_SESSION['count']++;
}
echo 'you have visited this SITE ';
echo $_SESSION['count'];
echo ' times';
?>


<a href="sss1.php"> first page</a>
<a href="sss3.php"> last page</a>