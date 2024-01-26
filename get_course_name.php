<?php
header('Access-Control-Allow-Origin: *');
include("database.php");

$sql = "SELECT course_name FROM names";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row['course_name']; 
    }
}

header('Content-Type: application/json');
echo json_encode($data);

$conn->close();
?>
