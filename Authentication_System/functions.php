<?php

function check_login($con){
    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";

        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    // redirect to login
    header("Location: ../login page/index4.php");
    die;
}

function random_num($length){
    $text = "";
    if($length < 5){
        $length = 5;
    }

    $len = rand(4, $length);

    for ($i=0; $i < $len; $i++) {   
        $text .= rand(0,9);
    }

    return $text;
}


// The function check_login takes a database connection object $con as a parameter.
// It first checks if the user_id key exists in the $_SESSION superglobal array. If it does, it retrieves the user_id value and assigns it to the variable $id.
// It then constructs a SQL query to select all columns from the users table where the user_id matches the value stored in $id. The limit 1 clause is used to ensure that only one row is returned.
// The function executes the query using the mysqli_query function, passing in the database connection object and the query string.
// If the query is successful ($result is not false) and at least one row is returned (mysqli_num_rows($result) > 0), it fetches the first row of the result set using mysqli_fetch_assoc and assigns it to the variable $user_data.
// Finally, the function returns the $user_data if it exists.
// If the user_id key does not exist in the $_SESSION array, it redirects the user to the login page using the header function and terminates the script execution using the die function.