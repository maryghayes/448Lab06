<?php
echo "Multiplication Table (scroll down)";
echo "<table>";
echo "<tr>";
echo "<td> </td>"; 
echo "<td> </td>";
for($q = 1; $q <= 100; $q++){
    echo "<td>".$q."</td>"; 
}
echo "</tr>";
for($i = 1; $i <= 100; $i++){
    //echo $i; 
    echo "<tr>";
    echo "<td>".$i."<td>"; 
    for( $j = 1; $j <= 100; $j++){
        $answer = product($i, $j);
        echo "<td>" . $answer . "</td>";
    }
    echo "<br>";
    echo "</tr>";
}
echo "</table>";
function product($x, $y) {
    $z = $x * $y;
    return $z;
}

?>