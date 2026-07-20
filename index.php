<?php

$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$db   = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');

try {
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4",
        $user,
        $pass
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $pdo->query("SELECT 1")->fetchColumn();

    echo "DB 접속 성공<br>";
    echo "SELECT 결과: " . $result;

} catch (PDOException $e) {
    echo "DB 접속 실패<br>";
    echo $e->getMessage();
}

?>
