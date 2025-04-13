<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beverage_shop";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối database thành công!";

} catch (PDOException $e) {
    echo "Kết nối thất bại: ", $e->getMessage();
}
?>