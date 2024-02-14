<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="images/logo.webp" type="image/x-icon">

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
        }
        .form_admin{
            width:100%;
            height:100vh;
            background-color:gray ;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }
        .form_admin form{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px 0px;
            width:300px;
            height:300px;
            font-size: 20px;
            color:white;
            font-weight: 900;
        }
        .form_admin form input{
            margin-bottom: 20px;
            margin-top: 5px;
        }
        .form_admin form input,
        .form_admin form button{
            width:300px;
            height:70px;
            border-radius: 20px;
            outline: none;
            border: 3px solid white;
        }
        .form_admin form input:focus{
            border:3px solid #005A9C ;
            outline: none;
            padding-left:5px;
            font-size: 20px;

        }
        .form_admin  .title img{
            width:60px;
            height:60px;
            
        }
        .form_admin  .title h2{
          color: white;
          margin-right: 20px;
          font-size:30px;
            
        }
        .color{
            color: #005A9C;
            font-size: 35px;
            text-shadow: -26px 35px 4px rgba(0,0,0,0.83);
          }

        .form_admin  .title{
            display: flex;
            flex-direction: row;
            width:300px;
            justify-content: flex-end;
            align-items: center;
        }
        .form_admin form button{
            color: white;
            font-size: 20px;
            font-weight: 900;
            background-color: gray;
            cursor: pointer;
        }
        .form_admin form button:hover{
            color:#005A9C;
            border-color: #005A9C;
        }



</style>
</head>
<body>
<?php

if (isset($_POST['login'])) {
    $userName ='lplp';
    $password='RoI3up254GJr';

    if($userName == $_POST['email'] && $password == $_POST['password']){
        session_start();
        $_SESSION['admin']= 'yes';
    header('location: control_panel.php');
}
}
?>
<div class="form_admin">
<div class="title">
    <h2><span class="color">eyes</span> of yemen</h2>
<img src="images/logo.webp" alt="logo">

    </div>

<form method="POST" action="login_admin.php">

<label>User name : </label>
<input type="text" name="email" required>
<label>Password : </label>
<input type="password" name="password" required>
<button type="submit" value="login" name="login">login</button>
</form>
</div>
</body>
</html>