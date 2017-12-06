<?php
include './connect/connect.php';

function sanitizer($data) {
    global $con;
    $data = mysqli_real_escape_string($con, $data);
    $data = htmlentities($data);
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    
    return $data;
}
