<?php
    // to start the session and check if the user is logged in
    // check if the user is logged in
    
    session_start();
    include("../Authentication_System/connectionDB.php");
    include("../Authentication_System/functions.php");
    $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css">
    <script src="./mainScript.js" async></script>
    <title>Document</title>
</head>

<body>
    <!-- <header>
        <div class="container">
            <h2 class="lobo">Game<span>Hub</span></h2>
            <a href="#" class="nav home">home</a>
            <a href="#" class="nav join">join</a>
            <div class="nav themeToggle">
                <i class="fa-solid fa-sun"></i>
                <i class="fa-solid fa-moon"></i>
            </div>
        </div>
    </header> -->
    <div class="searchBar">
        <div class="inputWrap">
            <input type="text" class="search" placeholder="Search...">
            <button onclick="searchGame()" class="searchButton">Search</button>
        </div>
    </div>
    <div class="loader"></div>
    <div class="display">
        <div class="cards">

        </div>
    </div>
    <button id="returnToTopBtn" class="return-to-top-btn">↑</button>
</body>

</html>