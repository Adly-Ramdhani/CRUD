<?php
require 'controller.php';

    if (isset ($_POST['submit']) ){

        $username = $_POST["username"];
        $username = $_POST["username"]; 
        $result = mysqli_query($_conn, "SELECT * FROM users WHERE
        username = '$username'");

        if(mysqli_num_rows($result) === 1 ){

            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){
                header("location: data.php");
                exit;
            }

        }else{
            $error = true;

        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <style>
        html{
    height: 100%;
}

body{
    margin: 0;
    padding:0 ;
    font-family:sans-serif ;
    background: linear-gradient(#096096B4 ,#93BFCF);

}

.login-box{
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    padding: 40px;
    transform: translate(-50% , -50%);
    background: #BDCDD6;
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(#BDCDD6 ,#EEE9DA) ;
    border-radius: 10px;

}

.login-box h3{
    margin: 0 0 30px;
    padding: 0;
    color: #fff;
    text-align: center;

}

.login-box .user-box{
   position: relative;

}

.login-box p{
    
    margin: 0 0 30px;
}

.login-box .user-box input{
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color:black;
    margin-bottom: 30px ;
    border: none;
    border-bottom: 1px solid #FFFF;
    outline: none;
    background: transparent;
}

.login-box .user-box input:focus ~ label
.login-box .user-box input:valid ~ label
{
    top: -20px;
    left: 0;
    color: black;
    font-size: 12px;

}
.user-box button{
      float: right;
}

    </style>
</head>
<body>
     <div class="login-box">
        <form action=""  method="post">
            <?php if( isset($error) ) : ?>
                <p>username/password salah</p>
            <?php endif; ?>
            <div class="user-box">
            <h3>LOGIN</h3>
            <label class="form-label" for="username">username</label>
            <input type="text" class="form-control" name="username">
            </div>
            <div class="user-box">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <h3>create an account<a href="index.php">register</a></h3>
        <button type="submit" class="btn btn-primary" name="submit">LOGIN</button>
        </form>
     </div>
</body>
</html>