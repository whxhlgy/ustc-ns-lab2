<?php
$conn = new mysqli("localhost", "root", "plmOKTXGSephK7_Bq", "users");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>
