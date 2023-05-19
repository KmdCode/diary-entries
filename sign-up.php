<?php
    require 'connection.php';
    
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $username = addslashes($_POST['username']);
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        $confirm = addslashes($_POST['confirm']);

        if($password == $confirm)
        {
            $pass =  password_hash($password,PASSWORD_BCRYPT);
            $query = "insert into users (username, email, password) values ('$username','$email','$pass')";
            $result = mysqli_query($con,$query);
        }
        else
        {
            $error = "Passwords do not match";
        }


        
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="landing">
        
        <h2>DIARY<span>ENTRIES</span></h2>
        <div class="entry">
            <div class="landing-heading">
            <h3> SIGN UP </h3>
            <?php
                if(!empty($error))
                {
                    echo $error;
                }
            ?>
            </div>
            <form method="post">
                <div><input type="text" name = "username" ><label>username</label> </div>
                <div><input type="email" name = "email" ><label>email</label></div>
                <div><input type="password" name = "password" ><label>password</label></div>
                <div><input type="password" name = "confirm"><label>confirm password</label></div>
                <button>Sign Up</button>
                <div class = "ref"><a href="login.php">Already have an account?Sign in.</a></div>
            </form>
        </div>
    </div>
</body>
</html>