<?php
    include("../Authentication_System/connectionDB.php");
    include("../Authentication_System/functions.php");
    session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $username = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password) && !is_numeric($username))
        {

            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name, password) values ('$user_id', '$username', '$password')";

            mysqli_query($con, $query);

            header("Location: ../login page/index4.php");
            die;
        }
        else {
            echo "Please enter some valid information!";
        }
    }
?>

<!-- pphp expplain -->
 <!-- This code snippet is written in PHP and is used for handling user registration.

Here's a succinct explanation:

It includes two external PHP files: connectionDB.php and functions.php.
It starts a session using session_start().
It checks if the request method is POST.
If the request method is POST, it retrieves the username and password from the POST data using $_POST['user_name'] and $_POST['password'].
It checks if the username and password are not empty and if the username is not numeric.
If the checks pass, it generates a random user ID using random_num(20) and inserts the user data into the users table in the database using mysqli_query().
After inserting the data, it redirects the user to the login page using header("Location: ./login.php") and terminates the script execution using die.
In summary, this code handles user registration by validating user input and storing it in a database -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index3.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <h2 class="lobo">Game<span>Hub</span></h2>
            <!-- <a href="#" class="nav join">join</a> -->
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
                            <h1>Sign up and join the game<Span>!</Span></h1>
                        </div>
                        <form method = "post" action="">
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
                                <input name="user_name" type="text" class="contactInput" required>
                                <label>Username</label>
                                <i class="icon fa-solid fa-envelope"></i>
                            </div>

                            <div class="inputWrap w-100">
                                <input type="password" name="password" class="contactInput"></input>
                                <label>Password</label>
                                <i class="icon fa-solid fa-lock"></i>
                            </div>

                            <div class="contactButtons">
                                <input type="submit" class="btn">
                            </div>
                            </form>
                            <div class="login">
                                <a href="../login page/index4.php" class="nav loginText">Already have an account? Log in here!</a>
                            </div>
                         </div>

                    </div>
                </div>

                <div class="right">
                    <div class="imagWrapper">
                        <img src="./photos/war.jpg" class="img">
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
    <script src="./index3.js"></script>
</body>
</html>