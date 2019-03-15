<?php
echo $_SERVER[ 'QUERY_STRING' ];
?>
<?php
$data = array( 'cats' => 'evil', 'dogs' => 'dumb', 'birds' =>
'flighty' );
header( 'Content-Type: application/json' );
echo json_encode( $data ) ;
?>
<!DOCTYPE html>
<html>
<body>
<div id="data">
</div>
<script>
var xmlhttp, xxx;
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
xxx = xmlhttp.responseText;
document.getElementById('data').innerHTML = xxx;
}
}
xmlhttp.open( "GET", 'restDemo.php?11', true );
xmlhttp.send();
</script>
</body>