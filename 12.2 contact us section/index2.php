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
    <link rel="stylesheet" href="./index2.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <h2 class="lobo">Game<span>Hub</span></h2>

            <div class="nav themeToggle">
                <i class="fa-solid fa-sun"></i>
                <i class="fa-solid fa-moon"></i>
            </div>
        </div>
    </header>

    <main>
        <div class="contact">
            <div class="container">
                <div class="left">
                    <div class="formWrapper">

                        <div class="heading">
                            <h1>We’re just a click away<Span>!</Span></h1>
                        </div>
                        <div class="contactForm">
                            <div class="inputWrap">
                                <input type="text" class="contactInput" required>
                                <label>First Name</label>
                                <i class="icon fa-solid fa-id-card"></i>
                            </div>

                            <div class="inputWrap">
                                <input type="text" class="contactInput" required>
                                <label>Last Name</label>
                                <i class="icon fa-solid fa-id-card"></i>
                            </div>

                            <div class="inputWrap w-100">
                                <input type="email" class="contactInput" required>
                                <label>Email</label>
                                <i class="icon fa-solid fa-envelope"></i>
                            </div>

                            <div class="textarea inputWrap w-100">
                                <textarea name="message" class="contactInput"></textarea>
                                <label>Message</label>
                                <i class="icon fa-solid fa-inbox"></i>
                            </div>

                            <div class="contactButtons">
                                <button class="btn upload">
                                    <span></span><i class="fa-solid fa-paperclip"></i> add attachment</span>
                                    <input type="file" name="attachment">
                                </button>
                                <input type="submit" class="btn">
                            </div>
                         </div>

                    </div>
                </div>

                <div class="right">
                    <div class="imagWrapper">
                        <img src="./photos/gost 1.jpg" class="img">
                        <div class="waveWrap">
                            <svg class="wave"  viewBox="0 0 783 1536" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path id="wave" d="M236.705 1356.18C200.542 1483.72 64.5004 1528.54 1 1535V1H770.538C793.858 63.1213 797.23 196.197 624.165 231.531C407.833 275.698 274.374 331.715 450.884 568.709C627.393 805.704 510.079 815.399 347.561 939.282C185.043 1063.17 281.908 1196.74 236.705 1356.18Z"/>
                            </svg>
                        </div>
                        <svg class="dashedWave" viewBox="0 0 345 877" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="dashedWave" d="M0.5 876C25.6667 836.167 73.2 739.8 62 673C48 589.5 35.5 499.5 125.5 462C215.5 424.5 150 365 87 333.5C24 302 44 237.5 125.5 213.5C207 189.5 307 138.5 246 87C185 35.5 297 1 344.5 1"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js"></script>
    <script src="./index2.js"></script>
</body>
</html>