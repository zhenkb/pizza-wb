<?php
    include("nav.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove'])) {
        $index = $_POST['remove'];
        unset($_SESSION['cart'][$index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // 重新排序索引
    }

    $total = array_sum(array_column($_SESSION['cart'], 'price'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的訂單</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        // 彈出支付成功訊息
        function checkout(total) {
            alert("恭喜支付成功！總金額為 $" + total);
        }
    </script>
</head>
<body>
    <?=$ling?>
    <div id="main">
        <div class="w3-deep-purple">
            <button id="openNav" class="w3-button w3-deep-purple w3-xlarge" onclick="w3_open()">&#9776;</button>
            <div class="w3-container">
                <h1>小饞貓貪吃店</h1>
            </div>
            <?=$link?>
        </div>
        <div class="w3-container">
            <h1>我的訂單</h1>
            <?php if (!empty($_SESSION['cart'])): ?>
                <ul class="w3-ul w3-card">
                    <?php foreach ($_SESSION['cart'] as $index => $item): ?>
                        <li class="w3-padding">
                            <?php echo $item['name']; ?> - $<?php echo $item['price']; ?>
                            <form action="" method="post" style="display:inline;">
                                <button type="submit" name="remove" value="<?php echo $index; ?>" class="w3-button w3-red">刪除</button>
                            </form>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <p>總金額: $<?php echo $total; ?></p>
                <!-- 結帳按鈕，觸發 checkout 函數 -->
                <button class="w3-button w3-green" onclick="checkout(<?php echo $total; ?>)">結帳</button>
            <?php else: ?>
                <p>您的訂單是空的。</p>
            <?php endif; ?>
            <button onclick="location.href='home.php'" class="w3-button w3-blue">回到首頁</button>
        </div>
    </div>
    <script>
        function w3_open() {
            document.getElementById("main").style.marginLeft = "25%";
            document.getElementById("mySidebar").style.width = "25%";
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("openNav").style.display = 'none';
        }
        function w3_close() {
            document.getElementById("main").style.marginLeft = "0%";
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("openNav").style.display = "inline-block";
        }
    </script>
</body>
</html>
