<?php
include '../conn.php';

try {
    $stmt = $conn->prepare("SELECT id,title,content,created_at,status FROM posts");
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
