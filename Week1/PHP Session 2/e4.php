<?php

$name = '';
$try = 0;
if( isset($_POST['newName']) ){
		$name = $_POST[ 'newName' ];
}
if( isset($_POST['try']) ){
		$try = $_POST[ 'try' ];
		$try += 1;
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Enter name</title>
</head>
<body>
<form action="e4.php" method="POST" >
<input type="text" name="newName" > </input>
<input type="hidden" name="try" value="<?php echo $try ?>"/>
<input type="submit" value="SUBMIT" />
<h1> <?php echo "hello $name"; ?></h1>
<h1> <?php echo "Try : $try"; ?></h1>
</body>
</html>