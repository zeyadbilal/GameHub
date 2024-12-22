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
    <link rel="stylesheet" href="all.css">
    <script src="./mainScript.js" async></script>
    <title>Document</title>
</head>

<body>
    <header class="navbar">
        <h2 class="lobo">Game<span>Hub</span></h2>
        <div class="searchBar">
            <div class="inputWrap">
                <input type="text" class="search" placeholder="Search...">
                <button onclick="searchGame()" class="searchButton">Search</button>
            </div>
        </div>
    </header>
    <div class="loader"></div>
    <div class="display">
        <div class="cards">
        </div>
    </div>
    <button id="returnToTopBtn" class="return-to-top-btn">↑</button>
    <footer class="footer-bar">
        <p>© 2024 Valve Corporation. All rights reserved. All trademarks are property of their respective owners in
            Egypt and other countries.</p>
    </footer>
</body>

</html>