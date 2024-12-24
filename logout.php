<?php
session_start();
session_unset(); // 清除所有 Session 變數
session_destroy(); // 銷毀 Session
header("Location: home.php"); // 跳轉回首頁
exit();
?>