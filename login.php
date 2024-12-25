<?php
session_start(); // 啟動 session

// 引入 nav.php
include 'nav.php';

// 資料庫連線
$conn = new mysqli("localhost", "root", "", "login_system");
if ($conn->connect_error) {
    die("資料庫連接失敗：" . $conn->connect_error);
}

// 處理表單提交
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $action = $_POST['action']; // 判斷是 "login" 或 "register"
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($action === "register") {
        // 註冊邏輯
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashed_password);

        if ($stmt->execute()) {
            echo "註冊成功！現在可以登入。";
        } else {
            echo "註冊失敗：" . $stmt->error;
        }

        $stmt->close();
    } elseif ($action === "login") {
        // 登入邏輯
        $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $id;
                // 登入成功後直接跳轉到 home.php
                header("Location: home.php");
                exit();
            } else {
                echo "密碼錯誤！";
            }
        } else {
            echo "使用者不存在！";
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入與註冊</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-deep-purple">
            <button id="openNav" class="w3-button w3-deep-purple w3-xlarge" onclick="w3_open()">&#9776;</button>
            <div class="w3-container">
                <h1>小饞貓貪吃店</h1>
            </div>
    </div>
    <!-- 顯示導覽列 -->
    <?php echo $nav; ?>

    <div class="w3-center form-container">
        <h2>登入或註冊</h2>
        <form method="POST">
            <label for="username">使用者名稱：</label>
            <input type="text" name="username" id="username" required><br><br>

            <label for="password">密碼：</label>
            <input type="password" name="password" id="password" required><br><br>

            <button type="submit" name="action" value="login">登入</button>
            <button type="submit" name="action" value="register">註冊</button>
        </form>
    </div>
</body>
</html>
