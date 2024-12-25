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
    <h2>義式臘腸披薩</h2>

    <div class="w3-card-4" style="display: flex; justify-content: center; width: 50%; margin: 0 auto;">
        <!-- Image Section -->
        <img src="pizza/Pizza-1.jpg" alt="Alps" style="width: 50%;">

        <!-- Text Section -->
        <div style="flex: 1; padding-left: 20px;">
            <h4 style="text-align: left;">義式臘腸披薩（Italian Sausage Pizza）
                是一款經典的披薩，搭配了濃郁的義式臘腸，
                這種臘腸通常是用豬肉製成，加入香料和調味料，
                如蒜、茴香、胡椒等，給披薩增添了豐富的風味。
                這款披薩的基本構成包括薄脆的披薩底，
                濃郁的番茄醬、融化的莫札瑞拉起司，
                並以切片的義式臘腸為主要配料，
                為披薩增添鹹香和微辣的味道。</h4>
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