<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$conn = new mysqli('localhost', 'root', '', 'devops');
if ($conn->connect_error) {
  die("Connection failed :( : " . $conn->connect_error);
}

$sql = "SELECT * FROM `test`";
$result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $response =  $row['word'];
            // echo json_encode($response);
            echo $response;
            }
}
