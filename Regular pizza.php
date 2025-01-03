<?php
    include("nav.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>普通披薩</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <!-- 普通披薩 -->
            <div class="w3-center">
                <h2>普通披薩</h2>
                <p>這些是我們經典且大受歡迎的披薩選擇，保證讓您一口愛上！</p>
            </div>
            <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px; max-width: 1200px; margin: 0 auto;">
                <!-- 卡片 1 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-1.jpg" alt="Pizza 1" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>義式臘腸披薩</p>
                        <div class="w3-section">
                            <a href="pizza1.php" class="w3-button w3-green">了解更多</a>
                            <a href="index.php" class="w3-button w3-red">直接訂餐</a>
                        </div>
                    </div>
                </div>
                
                <!-- 卡片 2 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-2.jpg" alt="Pizza 2" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>看心情披薩</p>
                        <div class="w3-section">
                            <a href="pizza2.php" class="w3-button w3-green">了解更多</a>
                            <a href="index.php" class="w3-button w3-red">直接訂餐</a>
                        </div>
                    </div>
                </div>
                
                <!-- 卡片 3 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-3.jpg" alt="Pizza 3" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>番茄起司披薩</p>
                        <div class="w3-section">
                            <a href="pizza3.php" class="w3-button w3-green">了解更多</a>
                            <a href="index.php" class="w3-button w3-red">直接訂餐</a>
                        </div>
                    </div>
                </div>
            </div>
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