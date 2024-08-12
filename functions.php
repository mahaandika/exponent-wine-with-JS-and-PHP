<?php

$conn = mysqli_connect("localhost", "root", "", "exponent_wine");

function show($queery){
    global $conn;
    $result = mysqli_query($conn, $queery);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

?>