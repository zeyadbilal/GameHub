<?php
    include("connectionDB.php");
    include("functions.php");
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

            header("Location: ./login.php");
            die;
        }
        else {
            echo "Please enter some valid information!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Styling/login.css">
    <title>Signup</title>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Sign Up</h2>
            <form method = "post" action="">
                <input type="text"  name="user_name"  placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <div class="options">
                    <a href="./login.php">Sign in now?</a>
                </div>
                <button type="submit" name="login" value="signup" id = "btn">Sign Up</button>
            </form>
        </div>
        <div class="image-box">
            <img src="./Styling/90f4f23923da831d9b216505ac7042e2.jpg" alt="Image">
        </div>
    </div>
</body>
</html>