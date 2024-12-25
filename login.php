<?php
session_start(); // 啟動 session

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
            echo "<div class='message success'>註冊成功！現在可以登入。</div>";
        } else {
            echo "<div class='message error'>註冊失敗：" . $stmt->error . "</div>";
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
                header("Location: home.php"); // 登入成功後跳轉
                exit();
            } else {
                echo "<div class='message error'>密碼錯誤！</div>";
            }
        } else {
            echo "<div class='message error'>使用者不存在！</div>";
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!-- HTML 表單 -->
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入與註冊</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #333;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h2 {
            margin-bottom: 20px;
            color: #444;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            width: calc(50% - 5px);
            padding: 10px;
            margin: 5px;
            border: none;
            border-radius: 4px;
            background-color: #ff7e5f;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #feb47b;
        }

        .message {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            font-weight: bold;
        }

        .message.success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .message.error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>登入或註冊</h2>
        <form method="POST">
            <label for="username">使用者名稱：</label>
            <input type="text" name="username" id="username" required>

            <label for="password">密碼：</label>
            <input type="password" name="password" id="password" required>

            <div>
                <button type="submit" name="action" value="login">登入</button>
                <button type="submit" name="action" value="register">註冊</button>
            </div>
        </form>
    </div>
</body>
</html>
