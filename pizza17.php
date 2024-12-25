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
    <h2>兒童披薩</h2>

    <div class="w3-card-4" style="display: flex; justify-content: center; width: 50%; margin: 0 auto;">
        <!-- Image Section -->
        <img src="pizza/Pizza-17.jpg" alt="Alps" style="width: 50%;">

        <!-- Text Section -->
        <div style="flex: 1; padding-left: 20px;">
        <h4 style="text-align: left;">
                兒童披薩專為小朋友設計，口味溫和，色彩繽紛，非常適合孩子們的胃口。這款披薩的餅皮輕薄，外脆內軟，搭配上滿滿的融化莫札瑞拉起司和香甜的番茄醬，為小朋友帶來簡單又美味的享受。
                配料包括鮮嫩的番茄片、玉米、火腿、香腸等，口感清爽，營養豐富。兒童披薩不僅美味可口，還能讓孩子們在享受美食的同時獲得足夠的能量，無論是家庭聚會還是生日派對，都是一道受歡迎的選擇。
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