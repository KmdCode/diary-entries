<?php

    require 'functions.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        $verify = password_hash($password,PASSWORD_BCRYPT);
        

        $query = "select * from users where email ='$email' && password = '$password' limit 1";
        $results = mysqli_query($con,$query);
        
        if(mysqli_num_rows($results)>0){
            $row = mysqli_fetch_assoc($results);
            $_SESSION['info'] = $row;
            header("Location:feed.php");
        }
        else
        {
            $error = "wrong email or password";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="landing">
        
        <h2>DIARY<span>ENTRIES</span></h2>
        <div class="entry">
            <div class="landing-heading">
            <h3> LOGIN </h3>
            </div>
            <?php
                if(!empty($error))
                {
                    echo $error;
                }
            ?>
            <form method = "post">
                <div><input type="email" name = "email" ><label>email</label></div>
                <div><input type="password" name = "password" ><label>password</label></div>
                <button>Login</button>
                <div class = "ref"><a href="sign-up.php">Don't have an account? Sign up</a></div>
            </form>
        </div>
    </div>
</body>
</html>