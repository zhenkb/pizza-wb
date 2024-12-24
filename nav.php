<?php
    $ling=<<<ling
    <!-- Sidebar -->
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-light-grey" style="width:30%; display:none;" id="mySidebar">
        <!-- Close Button -->
        <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
            
        <!-- Navigation Links -->
        <a href="home.php" class="w3-bar-item w3-button">首頁</a>
        <a href="login.php" class="w3-bar-item w3-button">Link 2</a>
        <a href="#" class="w3-bar-item w3-button">Link 3</a>
            
        <!-- Dropdown Menu -->
        <div class="w3-dropdown-hover">
            <button class="w3-button">披薩種類選擇
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="w3-dropdown-content w3-bar-block">
                <a href="#" class="w3-bar-item w3-button">Link</a>
                <a href="#" class="w3-bar-item w3-button">Link</a>
            </div>
        </div>
    </div>

    ling;
    
    $link=<<<link
    <div class="w3-bar w3-light-blue">
        <a href="#" class="w3-bar-item w3-button">首頁</a>
        <a href="#" class="w3-bar-item w3-button">Link 1</a>
        <a href="#" class="w3-bar-item w3-button">Link 2</a>
        <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>
    link;
