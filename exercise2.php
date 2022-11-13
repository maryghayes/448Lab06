<?php
    echo "Question 1: What is Mary's Fav Color? <br>";
    $name = $_POST["q1"];
    echo "You answered: ".$name."<br>"; 
    echo "Correct answer: pink"; 
    echo "<br>";

    $Correct = 0; 
    if($name == "pink"){
        $Correct = $Correct + 1; 
    }
    echo "<br>";
    echo "Question 2: What is Mary's Fav Song? <br>";
    $name2 = $_POST["q2"];
    echo "You answered: ".$name2."<br>"; 
    echo "Correct answer: Party in the USA"; 
    echo "<br>";

    if($name2 == "Party in the USA"){
        $Correct = $Correct + 1; 
    }
    echo "<br>";

    echo "Question 3: What is Mary's Fav Holiday? <br>";
    $name3 = $_POST["q3"];
    echo "You answered: ".$name3."<br>"; 
    echo "Correct answer: Christmas"; 
    echo "<br>";

    if($name3 == "Christmas"){
        $Correct = $Correct + 1; 
    }
    echo "<br>";
    echo "Question 4: What is Mary's Dog's Name? <br>";
    $name4 = $_POST["q4"];
    echo "You answered: ".$name4."<br>"; 
    echo "Correct answer: Stella"; 
    echo "<br>";

    if($name4 == "Stella"){
        $Correct = $Correct + 1; 
    }
    echo "<br>";

    echo "Question 5: Where is Mary From? <br>";
    $name5 = $_POST["q5"];
    echo "You answered: ".$name5."<br>"; 
    echo "Correct answer: St. Louis"; 
    echo "<br>";

    if($name5 == "St.Louis"){
        $Correct = $Correct + 1; 
    }
    echo "<br>";

    $Correct = $Correct * 20; 

    echo "Score: ".$Correct."%<br>"; 
?>