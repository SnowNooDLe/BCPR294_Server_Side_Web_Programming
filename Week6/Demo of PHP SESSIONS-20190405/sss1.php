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
<br>
<a href="sss2.php"> next page</a>

