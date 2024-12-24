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

        <div class="w3-content w3-section" style="max-width:500px">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-1.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-2.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-3.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-4.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-5.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-6.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-7.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-8.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-9.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-10.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-11.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-12.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-13.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-14.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-15.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-16.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-17.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-18.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="pizza/Pizza-19.jpg" style="width:100%">
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
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
                
                <!-- 卡片 2 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-2.jpg" alt="Pizza 2" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>看心情披薩</p>
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
                        <p>番茄起司披薩</p>
                        <div class="w3-section">
                            <button class="w3-button w3-green">了解更多</button>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 特別披薩 -->
            <div class="w3-center" style="margin-top: 40px;">
                <h2>特別披薩</h2>
                <p>我們的創意披薩系列，每一款都能為您帶來驚喜！</p>
            </div>
            <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px; max-width: 1200px; margin: 0 auto;">
                <!-- 卡片 4 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-4.jpg" alt="Pizza 4" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>麵包超人披薩</p>
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
                        <p>起司披薩</p>
                        <div class="w3-section">
                            <a href="pizza1.php" class="w3-button w3-green">了解更多</a>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
                
                <!-- 卡片 6 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-6.jpg" alt="Pizza 6" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>西瓜披薩</p>
                        <div class="w3-section">
                            <button class="w3-button w3-green">了解更多</button>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 季節限定披薩 -->
            <div class="w3-center" style="margin-top: 40px;">
                <h2>季節限定披薩</h2>
                <p>我們的季節限定披薩系列，特別限定！</p>
            </div>
            <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px; max-width: 1200px; margin: 0 auto;">
                <!-- 卡片 7 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-7.jpg" alt="Pizza 7" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>麵包超人披薩</p>
                        <div class="w3-section">
                            <a href="pizza1.php" class="w3-button w3-green">了解更多</a>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
                
                <!-- 卡片 8 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-8.jpg" alt="Pizza 8" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>起司披薩</p>
                        <div class="w3-section">
                            <a href="pizza1.php" class="w3-button w3-green">了解更多</a>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
                
                <!-- 卡片 9 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-9.jpg" alt="Pizza 9" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>西瓜披薩</p>
                        <div class="w3-section">
                            <button class="w3-button w3-green">了解更多</button>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>

                <!-- 卡片 10 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-10.jpg" alt="Pizza 10" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>西瓜披薩</p>
                        <div class="w3-section">
                            <button class="w3-button w3-green">了解更多</button>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 動漫限定披薩 -->
            <div class="w3-center" style="margin-top: 40px;">
                <h2>動漫限定披薩</h2>
                <p>紅色的眼睛與烈焰的光芒在深邃的黑暗中閃耀，散發出毀滅一切的壓迫感和震撼力。</p>
            </div>
            <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px; max-width: 1200px; margin: 0 auto;">
                <!-- 卡片 11 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-11.jpg" alt="Pizza 11" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>血月影姬披薩</p>
                        <div class="w3-section">
                            <a href="pizza1.php" class="w3-button w3-green">了解更多</a>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
                
                <!-- 卡片 12 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-12.jpg" alt="Pizza 12" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>暗夜焰王披薩</p>
                        <div class="w3-section">
                            <a href="pizza1.php" class="w3-button w3-green">了解更多</a>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
                <!-- 卡片 13 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-13.jpg" alt="Pizza 13" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>草仙子披薩</p>
                        <div class="w3-section">
                            <a href="pizza1.php" class="w3-button w3-green">了解更多</a>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
                <!-- 卡片 14 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-14.jpg" alt="Pizza 14" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>花仙子披薩</p>
                        <div class="w3-section">
                            <a href="pizza1.php" class="w3-button w3-green">了解更多</a>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
                <!-- 卡片 15 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-15.jpg" alt="Pizza 15" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>音速小子披薩</p>
                        <div class="w3-section">
                            <a href="pizza1.php" class="w3-button w3-green">了解更多</a>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
                <!-- 卡片 16 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-16.jpg" alt="Pizza 16" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>雙人披薩</p>
                        <div class="w3-section">
                            <a href="pizza1.php" class="w3-button w3-green">了解更多</a>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
                <!-- 卡片 17 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-17.jpg" alt="Pizza 17" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>兒童披薩</p>
                        <div class="w3-section">
                            <a href="pizza1.php" class="w3-button w3-green">了解更多</a>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
                <!-- 卡片 18 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-18.jpg" alt="Pizza 18" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>臘腸跑車披薩</p>
                        <div class="w3-section">
                            <a href="pizza1.php" class="w3-button w3-green">了解更多</a>
                            <button class="w3-button w3-red">直接訂餐</button>
                        </div>
                    </div>
                </div>
                <!-- 卡片 19 -->
                <div class="w3-card-4" style="width: 30%; box-sizing: border-box;">
                    <img src="pizza/Pizza-19.jpg" alt="Pizza 19" style="width: 100%;">
                    <div class="w3-container w3-center">
                        <p>菇菇跑車披薩</p>
                        <div class="w3-section">
                            <a href="pizza1.php" class="w3-button w3-green">了解更多</a>
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

        var myIndex = 0;
        carousel();

        function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 9000);    
        }
    </script>
</body>
</html>