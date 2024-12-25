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
    <h2>音速小子披薩</h2>

    <div class="w3-card-4" style="display: flex; justify-content: center; width: 50%; margin: 0 auto;">
        <!-- Image Section -->
        <img src="pizza/Pizza-15.jpg" alt="Alps" style="width: 50%;">

        <!-- Text Section -->
        <div style="flex: 1; padding-left: 20px;">
        <h4 style="text-align: left;">
                音速小子披薩是一款充滿活力和速度感的披薩，完美融合了刺激的辣味和濃郁的香氣。
                這款披薩的餅皮酥脆，搭配了濃郁的番茄醬、融化的起司，並加入了香腸、辣椒、洋蔥等配料。
                配料中選用了辣味香腸和新鮮的辣椒，讓每一口都能感受到刺激的辣味，並與濃厚的起司和香腸味相得益彰。
                音速小子披薩的風味強烈，適合喜歡挑戰味蕾的披薩愛好者，讓人一口接一口，感受無窮的速度與熱情。
            </h4>
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