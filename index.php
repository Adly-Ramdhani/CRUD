<?php
require 'controller.php';

if (isset($_POST['register'])) {

    if(registrasi($_POST ) > 1) {
    echo "
    <script>
        alert('data user berhasil di masukan');
        document.location.href = 'login,php';
    </script>
     ";
 }else{
    echo mysqli_error($conn);
  }

 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
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
        ul h3{
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }
        ul{
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
        .user-box input{
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
        button{
            float: right;
            border-radius: 5px;
            border-right:  5px;
            padding: 10px 15px;
            background-color: #93BFCF;


                

        }
        .user-box li{
            list-style: none;
        }
    </style>
</head>
<body>
   
        <div class="user-box">
        <form action="" method="post">
        <ul>
        <h3>register</h3>
            <li>
                <label for="username">username</label>
                <input type="text" name="username" id="username" autocomplete="0">
            </li>

            <li>
                <label for="password">password</label>
                <input type="password" name="password" id="password">
            </li>

            <li>
                <label for="">konfirmasi password</label>
                <input type="password" name="conf_password" id="conf_password">
            </li>
            
            <li>
            <button type="submit" name="register"> register</button>
            </li>

            </ul>
        </form>
        </div>
    </ul>
</body>
</html>