<?php
    // 檢查 session 是否已經啟動，避免重複呼叫 session_start()
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    $ling=<<<ling
    <!-- Sidebar -->
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-light-grey" style="width:30%; display:none;" id="mySidebar">
        <!-- Close Button -->
        <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
            
        <!-- Navigation Links -->
        <a href="home.php" class="w3-bar-item w3-button">首頁</a>
        <a href="login.php" class="w3-bar-item w3-button">會員登入/註冊</a>
        <a href="index.php" class="w3-bar-item w3-button">線上訂餐</a>
            
        <!-- Dropdown Menu -->
        <div class="w3-dropdown-hover">
            <button class="w3-button">披薩種類選擇
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="w3-dropdown-content w3-bar-block">
                <a href="Regular pizza.php" class="w3-bar-item w3-button">普通披薩</a>
                <a href="special pizza.php" class="w3-bar-item w3-button">特別披薩</a>
                <a href="Seasonal limited pizza.php" class="w3-bar-item w3-button">季節限定披薩</a>
                <a href="Anime limited pizza.php" class="w3-bar-item w3-button">動漫限定披薩</a>
            </div>
        </div>
    </div>

    ling;
    
    

    // 根據是否登入來顯示不同的頂部導航欄 HTML
    if (isset($_SESSION['user_id'])) {
        // 已登入，顯示「登出」按鈕
        $link=<<<link
        <div class="w3-bar w3-light-blue">
            <a href="home.php" class="w3-bar-item w3-button">首頁</a>
            <a href="logout.php" class="w3-bar-item w3-button w3-right">登出</a>
            <a href="Regular pizza.php" class="w3-bar-item w3-button">普通披薩</a>
            <a href="special pizza.php" class="w3-bar-item w3-button">特別披薩</a>
            <a href="Seasonal limited pizza.php" class="w3-bar-item w3-button">季節限定披薩</a>
            <a href="Anime limited pizza.php" class="w3-bar-item w3-button">動漫限定披薩</a>
        </div>
        link;
    } else {
        // 未登入，顯示「登入」按鈕
        $link=<<<link
        <div class="w3-bar w3-light-blue">
            <a href="home.php" class="w3-bar-item w3-button">首頁</a>
            <a href="login.php" class="w3-bar-item w3-button w3-right">登入</a>
            <a href="Regular pizza.php" class="w3-bar-item w3-button">普通披薩</a>
            <a href="special pizza.php" class="w3-bar-item w3-button">特別披薩</a>
            <a href="Seasonal limited pizza.php" class="w3-bar-item w3-button">季節限定披薩</a>
            <a href="Anime limited pizza.php" class="w3-bar-item w3-button">動漫限定披薩</a>
        </div>
        link;
    }

    $nav = <<<NAV
        <div class="w3-bar w3-light-blue">
            <a href="home.php" class="w3-bar-item w3-button">首頁</a>
            <a href="logout.php" class="w3-bar-item w3-button w3-right">返回</a>
            <a href="Regular pizza.php" class="w3-bar-item w3-button">普通披薩</a>
            <a href="special pizza.php" class="w3-bar-item w3-button">特別披薩</a>
            <a href="Seasonal limited pizza.php" class="w3-bar-item w3-button">季節限定披薩</a>
            <a href="Anime limited pizza.php" class="w3-bar-item w3-button">動漫限定披薩</a>
        </div>
    NAV;
?>