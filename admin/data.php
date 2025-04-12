<?php
include '../conn.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

try {
    $stmt = $conn->prepare("SELECT * FROM posts JOIN categories ON posts.category_id = categories.id");
    $stmt->execute();
    $resultSet = $stmt->get_result();
    $data = $resultSet->fetch_all(MYSQLI_ASSOC);
    $response = array(
        "data" => $data
    );

    echo json_encode($response);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
