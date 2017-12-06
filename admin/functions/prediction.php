<?php

include './connect/connect.php';

function addPrediction($matches, $league, $odd, $firstGoal, $secondGoal) {
	global $con;
    $query = "INSERT INTO wp_prediction (Matches,League,Odd,FirstGoal,SecondGoal) VALUES ('$matches', '$league', '$odd','$firstGoal', '$secondGoal')";
    if (mysqli_query($con, $query) == true) {
        
    }
}

function getPrediction() {
    
}
