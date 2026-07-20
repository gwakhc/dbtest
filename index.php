<?php
// dbtest - 간단한 테스트 페이지

echo "<h1>Hello, dbtest!</h1>";
echo "<p>서버 시간: " . date('Y-m-d H:i:s') . "</p>";
echo "<p>PHP 버전: " . phpversion() . "</p>";

// 요청 정보 확인
echo "<hr>";
echo "<p>Server IP: " . $_SERVER['SERVER_ADDR'] . "</p>";
echo "<p>Client IP: " . $_SERVER['REMOTE_ADDR'] . "</p>";
?>
