<?php
    include("nav.php");
    session_start();

    $name = $_GET['name'];
    $price = $_GET['price'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> 披薩</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function showSuccess() {
            alert("訂單加入成功！");
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
        <div class="w3-container w3-center">
            <h1><?php echo $name; ?></h1>
            <img src="https://via.placeholder.com/300" alt="<?php echo $name; ?>" class="w3-image">
            <p>價格: $<?php echo $price; ?></p>
            <form action="add_to_cart.php" method="post" onsubmit="showSuccess()">
                <input type="hidden" name="name" value="<?php echo $name; ?>">
                <input type="hidden" name="price" value="<?php echo $price; ?>">
                <button type="submit" class="w3-button w3-blue">加入購物車</button>
            </form>
            <button onclick="location.href='order.php'" class="w3-button w3-green">查看訂單</button>
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
