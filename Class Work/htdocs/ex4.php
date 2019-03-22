<?php
$name = '';
$try = 0;
// $_POST superglobal
if( isset($_POST['newName']) ){
		$name = $_POST[ 'newName' ];
}
if( isset($_POST['try']) ){
		$try = $_POST[ 'try' ];
		$try = $try + 1;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Enter name</title>
</head>
<body>
<form action="ex4.php" method="POST" >
<input type="text" name="newName" > </input>
<input type="hidden" name="try" value="<?php echo $try ?>"/>
<input type="submit" value="SUBMIT" />
<h1> <?php echo "hello $name"; ?></h1>
</form>
</body>
</html>