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
    <h2>草仙子披薩</h2>

    <div class="w3-card-4" style="display: flex; justify-content: center; width: 50%; margin: 0 auto;">
        <!-- Image Section -->
        <img src="pizza/Pizza-13.jpg" alt="Alps" style="width: 50%;">

        <!-- Text Section -->
        <div style="flex: 1; padding-left: 20px;">
        <h4 style="text-align: left;">
                草仙子披薩是一款充滿清新口感的素食披薩，將新鮮的蔬菜與香草完美結合。
                這款披薩的餅皮酥脆，搭配了特製的香草醬和濃郁的莫札瑞拉起司，帶來清爽的風味。
                配料選用了新鮮的番茄、菠菜、蘑菇、綠椒等，並撒上香草香料，增添豐富的層次感。
                草仙子披薩不僅是素食者的美味選擇，也是任何喜愛健康清新風味食物的食客的理想之選。
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