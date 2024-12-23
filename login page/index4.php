<?php
include("../Authentication_System/connectionDB.php");
include("../Authentication_System/functions.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password) && !is_numeric($username)) {
        $query = "select * from users where user_name = '$username' limit 1";
        $result = mysqli_query($con, $query);
        
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['password'] === $password) {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: ../home page/index.php");
                die;
            }
        }

        echo "<script>
                alert('Invalid username or password. Please try again.');
                window.location.href = 'index4.php';
              </script>";
        die;
    } else {
        echo "<script>
                alert('Please enter valid username and password.');
                window.location.href = 'index4.php';
              </script>";
        die;
    }
}
?>



<!-- php explain -->
 <!-- This is a PHP script that handles user login functionality. Here's a succinct explanation:

It includes two external PHP files: connectionDB.php and functions.php.
It starts a session using session_start().
It checks if the request method is POST. If so, it retrieves the user_name and password from the POST data.
It validates the input data: both fields must be non-empty, and the username must not be numeric.
If the input is valid, it queries the database to check if the username exists and if the password matches the stored password.
If the credentials are correct, it sets the user_id in the session and redirects the user to ../home page/index.php. If not, it redirects the user to login.php and displays an error message. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index4.css">
    <title>Login</title>
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
                            <h1>Log in and let the games begin<Span>!</Span></h1>
                        </div>
                        <div class="contactForm">
                            <form method="post" action="">
                            <div class="inputWrap w-100">
                                <input type="text" name="user_name" class="contactInput" required>
                                <label>Username</label>
                                <i class="icon fa-solid fa-envelope"></i>
                            </div>
                            <br>
                            <div class="inputWrap w-100">
                                <input type ="password" name = "password" class="contactInput">
                                <label>Password</label>
                                <i class="icon fa-solid fa-lock"></i>
                            </div>

                            <div class="contactButtons">
                                <input type="submit" name="login" value="Login" class="btn">
                            </div>
                            </form>
                            <div class="login">
                                <a href="../sign up page/index3.php" class="nav loginText">Don't have an account yet? Sign up here!</a>
                            </div>
                         </div>

                    </div>
                </div>

                <div class="right">
                    <div class="imagWrapper">
                        <img src="./photos/spider.webp" class="img">
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
    <script src="./index4.js"></script>
</body>
</html>