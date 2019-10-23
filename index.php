<?php
    session_start(); 
?>

<?php

    if(isset($_SESSION['use']))
     {
        header("Location:Home.php"); 
     }

    if(isset($_POST['login']))
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if($user == "donnie58744" && $pass == "TheOffice12")
        {
            $_SESSION['use']=$user;
            header('Location:Home.php');
        }

        else if($user == "rwGnarly13" && $pass == "HulkStrong2001")
        {
            $_SESSION['use']=$user;
            header('Location:Home.php');
        }
        
        else if($user == "ChrisIsKool" && $pass == "FuckSchool42069")
        {
            $_SESSION['use']=$user;
            header('Location:Home.php');
        }

        else
        {
            echo '<script>alert("Not A Valid User")</script>';        
        }
    }
 ?>
<html>
<head>
    <title> Login Page </title>
</head>
<body class="Body">
    <form action="" method="post" class="LoginBoxes">
        <input type="text" name="user" placeholder="Username">
        <br>
        <br>
        <input type="password" name="pass" placeholder="Password">
        <br>
        <br>
        <center>
            <input type="submit" name="login" value="Login" class="LoginBtn">
        </center>
    </form>
</body>
<style>
    .Body
    {
        zoom: 170%;
        background-color: black;
    }
    
    .LoginBoxes
    {
      position: fixed;
      top: 50%;
      left: 50%;
      margin-top: -50px;
      margin-left: -100px;
    }
    
    .LoginBtn
    {
        background-color: blue;
        outline: none;
        border: none;
        height: 30px;
        width: 60px;
        font-size: 15px;
    }
</style>
</html>
