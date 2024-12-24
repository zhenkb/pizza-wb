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
            <div class="w3-card-4" style="width:50%">
                <img src="user\pizza\Pizza01.jpg" alt="Alps" style="width:50%">
                <div class="w3-container w3-center">
                    <p>The Italian / Austrian Alps</p>
                    <div class="w3-section">
                        <button class="w3-button w3-green">點餐</button>
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