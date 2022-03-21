<?php

require_once('./dbconfig.php');

$data = array();

try {
          $conn = new PDO("mysql:host=$dbServer;dbname=$database", $dbUsername, $dbPassword);

          echo json_encode(["msg" => "connected"]);
          unset($conn);
} catch (PDOException $e) {
          echo (["error" => $e->getMessage()]);
}
