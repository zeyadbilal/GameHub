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

            //read from  database
            $query = "select * from users where user_name = '$username' limit 1";
            $result = mysqli_query($con, $query);
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: ../home page/index.php");
                    die;
                }
            }

            header("Location: login.php");
            die;
            echo "Please enter some valid information!";
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./Styling/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Sign In</h2>
            <form method = "post" action="">
                <input type="text"  name="user_name"  placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <div class="options">
                    <p>Not a member? <a href="./signup.php">Sign up now!</a> </p>
                </div>
                <button type="submit" name="login" value="Login" id = "btn">Log In</button>
            </form>
        </div>
        <div class="image-box">
            <img src="./Styling/90f4f23923da831d9b216505ac7042e2.jpg" alt="Image">
        </div>
    </div>
</body>
</html>