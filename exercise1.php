<?php
//Inside myfirstprogram.php
function product($x, $y) {
    $z = $x * $y;
    return $z;
}

echo "<table>";
echo "<tr>";
for($x = 0; $x <= 100; $x++){
    if($x == 0){
        echo "<td></td>";
    }
    else{
      echo "<td>".$x."</td> ";  
    }
    
}
echo "</tr>";
//echo "<tr>";
// for($q = 1; $q <= 100; $q++){
//     echo "<td>".$q."</td> "; 
//     echo "<br>"
// }
// echo "</tr>";
for($i = 1; $i <= 100; $i++){
    //echo $i; 
    echo "<tr>";
    for( $j = 1; $j <= 100; $j++){
        $answer = product($i, $j);
        echo "<td>" . $answer . "</td>";
    }
    echo "<br>";
    echo "</tr>";
}
echo "</table>";

?>