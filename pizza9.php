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
    <div class="w3-container w3-center">
    <h2>冷凍披薩</h2>

    <div class="w3-card-4" style="display: flex; justify-content: center; width: 50%; margin: 0 auto;">
        <!-- Image Section -->
        <img src="pizza/Pizza-7.jpg" alt="Alps" style="width: 50%;">

        <!-- Text Section -->
        <div style="flex: 1; padding-left: 20px;">
        <h3 style="text-align: left;">
                冷凍披薩是一款便捷且美味的選擇，特別適合忙碌的生活方式或是需要快速解決一餐的時候。
                這款披薩的特色在於它的準備簡單，從冰箱取出後，放入烤箱即可快速加熱，無需等待長時間。
                雖然是冷凍產品，但其餅皮酥脆、起司濃郁，味道絲毫不亞於現做的披薩，且有多種口味可供選擇，
                包括經典的香腸、海鮮、蔬菜等，滿足不同食客的需求。
                冷凍披薩是一個即時享受美味的好選擇，無論是單獨享用還是與朋友共享，都是方便又美味的選擇。
            </h3>
        </div>
    </div>
</div>


        <!-- Buttons Section -->
        <div style="text-align: center; margin-top: 20px;">

            <a href="index.php" class="w3-button w3-green">加入購物車</a>
            <a href="order.php" class="w3-button w3-blue">查看訂單</a>
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