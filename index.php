<?php
    include("nav.php");

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $pizzas = [
        ['name' => '義式臘腸披薩', 'price' => 200],
        ['name' => '看心情披薩', 'price' => 250],
        ['name' => '番茄起司披薩', 'price' => 300],
        ['name' => '麵包超人披薩', 'price' => 280],
        ['name' => '起司披薩', 'price' => 260],
        ['name' => '西瓜披薩', 'price' => 270],
        ['name' => '聖誕老人披薩', 'price' => 250],
        ['name' => '菇菇雙倍起司披薩', 'price' => 130],
        ['name' => '冷凍披薩', 'price' => 110],
        ['name' => '番茄雙倍起司披薩', 'price' => 220],
        ['name' => '血月影姬披薩', 'price' => 300],
        ['name' => '暗夜焰王披薩', 'price' => 300],
        ['name' => '草仙子披薩', 'price' => 250],
        ['name' => '花仙子披薩', 'price' => 250],
        ['name' => '音速小子披薩', 'price' => 170],
        ['name' => '雙人披薩', 'price' => 270],
        ['name' => '兒童披薩', 'price' => 290],
        ['name' => '臘腸跑車披薩', 'price' => 250],
        ['name' => '菇菇跑車披薩', 'price' => 380],
        ['name' => '立體喵咪披薩', 'price' => 1280],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>披薩訂單系統</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function showSuccess(name) {
            alert(name + " 已成功加入購物車！");
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

        <div class="w3-container">
            <h1 class="w3-center">披薩訂單系統</h1>
            <div class="w3-row-padding">
                <?php foreach ($pizzas as $key => $pizza): ?>
                    <div class="w3-col s12 m6 l3 w3-center">
                        <div class="w3-card w3-padding w3-margin">
                            <h2><?php echo $pizza['name']; ?></h2>
                            <!-- 動態生成圖片路徑 -->
                            <img src="pizza/Pizza-<?php echo $key + 1; ?>.jpg" alt="<?php echo $pizza['name']; ?>" class="w3-image">
                            <p>價格: $<?php echo $pizza['price']; ?></p>
                            <form action="add_to_cart.php" method="post" onsubmit="showSuccess('<?php echo $pizza['name']; ?>')">
                                <input type="hidden" name="name" value="<?php echo $pizza['name']; ?>">
                                <input type="hidden" name="price" value="<?php echo $pizza['price']; ?>">
                                <button type="submit" class="w3-button w3-blue">加入購物車</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button onclick="location.href='order.php'" class="w3-button w3-green w3-margin-top">查看訂單</button>
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
