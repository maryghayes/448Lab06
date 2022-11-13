<?php

echo "<link href='style.css' rel='stylesheet' type='text/css'/>";
//echo "<link href="style.css" rel="stylesheet" type="text/css"/>"

function product($x, $y) {
    $z = $x * $y;
    return $z;
}

function shipping($z){
    if($z == "Free 7 day" ){
        $answer = 0;
    }
    if($z == "$50.00 over night"){
        $answer = 50;
    }
    if($z == "$5.00 three day" ){
        $answer = 5;
    }

    return $answer; 
}

$user = $_POST["username"];
$pass = $_POST["password"];
echo "Welcome ".$user." to the shop<br>"; 
echo "Your password is ".$pass." <br>";
echo "<table>";
echo "<tr>";
echo "<td> </td>";
echo "<td> quantity </td>";
echo "<td> cost per item </td>";
echo "<td> sub total </td>";
echo "</tr>";

$price = 1; 
echo "<tr>";
$banana = $_POST["Bananas"];
$bananas = product($price, $banana);
echo "<td> Banana </td>";
echo "<td>".$banana."</td>";
echo "<td> $1.00 </td>";
echo "<td>$".$bananas. "</td>";
echo "</tr>";

$price = 5; 
echo "<tr>";
$straw = $_POST["Strawberries"];
$straws = product($price, $straw);
echo "<td> Stawberries </td>";
echo "<td>".$straw."</td>";
echo "<td> $5.00 </td>";
echo "<td>$".$straws. "</td>";
echo "</tr>";

$price = 2; 
echo "<tr>";
$ap = $_POST["Apples"];
$aps = product($price, $ap);
echo "<td> Stawberries </td>";
echo "<td>".$ap."</td>";
echo "<td> $2.00 </td>";
echo "<td>$".$aps. "</td>";
echo "</tr>";

echo "<tr>";
$ship = $_POST["q1"];
$shipping = shipping($ship); 
echo "<td> Shipping </td>";
echo "<td>".$ship."</td>";
echo "<td>$".$shipping."</td>";
echo "</tr>";

echo "<tr>";
$total = $shipping + $aps + $straws + $bananas;
echo "<td> Total </td>";
echo "<td>$".$total."</td>";
echo "</tr>";
echo "</table>";

?>