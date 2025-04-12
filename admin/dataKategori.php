<?php
include '../conn.php';
try {
    $stmt = $conn->prepare("SELECT * FROM categories");
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
