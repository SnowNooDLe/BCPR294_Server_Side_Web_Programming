<?php
function echoAsTable ($dataArray){
    
    echo '<table border="1px">';
    foreach($dataArray as $index => $value){
        echo "<tr> <td>$index</td> <td>$value</td> </tr>";
    }
    
    echo '</table>';
}
?>