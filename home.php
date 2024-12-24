<?php
    include("nav.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <?=$ling?>
    

    <div id="main">
        <div class="w3-deep-purple">
            <button id="openNav" class="w3-button w3-deep-purple w3-xlarge" onclick="w3_open()">&#9776;</button>
            <div class="w3-container">
                <h1>My Page</h1>
            </div>
            <?=$link?>
        </div>

        <div class="w3-container">
            <p>In this example, the sidebar is hidden (style="display:none")</p>
        </div>
        <div class="w3-container">
            <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px; max-width: 1200px; margin: 0 auto;">
                <!-- 卡片 1 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza\Pizza-1.jpg" alt="Pizza 1" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>The Italian / Austrian Alps</p>
                        <div class="w3-section">
                            <a href="pizza1.php" class="w3-button w3-green">了解更多</a>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
                
                <!-- 卡片 2 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-2.jpg" alt="Pizza 2" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>The Swiss Alps</p>
                        <div class="w3-section">
                            <button class="w3-button w3-green">了解更多</button>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
                
                <!-- 卡片 3 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-3.jpg" alt="Pizza 3" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>The French Alps</p>
                        <div class="w3-section">
                            <button class="w3-button w3-green">了解更多</button>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
                
                <!-- 卡片 4 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-4.jpg" alt="Pizza 4" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>The Italian Alps</p>
                        <div class="w3-section">
                            <a href="pizza1.php" class="w3-button w3-green">了解更多</a>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
                
                <!-- 卡片 5 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-5.jpg" alt="Pizza 5" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>The Italian Alps</p>
                        <div class="w3-section">
                            <a href="pizza1.php" class="w3-button w3-green">了解更多</a>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
                
                <!-- 卡片 6 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="img_snowtops.jpg" alt="Alps" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>The French Alps</p>
                        <div class="w3-section">
                            <button class="w3-button w3-green">了解更多</button>
                            <button class="w3-button w3-red">直接訂餐</button>
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