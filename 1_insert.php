<?php

require_once('./dbconfig.php');

$data = array();

try {
          $conn = new PDO("mysql:host=$dbServer;dbname=$database", $dbUsername, $dbPassword);
          $query = $conn->prepare("INSERT INTO users VALUES (NULL, :name, NOW())");
          $query->execute([":name" => "ABCD"]);

          echo json_encode(["state" => true, "msg" => "Insert successfully."]);
          unset($conn);
} catch (PDOException $e) {
          echo ($e->getMessage());
}
