<!DOCTYPE HTML>
<html>
    
<?php session_start(); ?>
    
<title>Just The Boys</title>
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    
<link rel="icon" href="favicon.png">
<link rel="stylesheet" type="text/css" href="CSS/SplitersNShiters.css">
<link rel="stylesheet" type="text/css" href="CSS/Buttons.css">
<link rel="stylesheet" type="text/css" href="CSS/Titles.css">
<link rel="stylesheet" type="text/css" href="CSS/HomeBody.css">
<script src="RefreshCode.js"></script>

<body class="Body">
    <center>
        <a href="?delete=1" class="DeleteBtn">ABORT</a>
        <div class="PushIt"></div>
        <a href="logout.php" class="LogoutBtn">Logout</a>
        <div class="RadioBtns">
            <p class="RefreshTitle">Refresh On</p>
            <input type="radio" name="Refresh" id="RadioBtnOn" checked="checked" onclick="y()">
            <br>
            <p class="RefreshTitle">Refresh Off</p>
            <input type="radio" name="Refresh" id="RadioBtnOff" onclick="x()">
        </div>
        <div class="TextBoxArea">
            <form method="post" action="Write.php">
                <textarea rows="1" cols="50" name="CommentTB" class="CommentTextBoxStyle" id="CommentTB" onclick="z()"></textarea>
                <input type="submit" name="submit" value="Post" class="PostBtn">
                <div class="DividerForBtns"></div>
                <button class="CancelBtn" id="CancelBtn" onclick="Cancel()">Cancel</button>
            </form>
        </div>
        <div class="Spliter"></div>
    </center>
    
    <?php
        $File = "TextMsg.txt";
        $GetComments = file_get_contents($File);
        echo '<div class="CommentArea">';
        echo '<p class="MsgTitle">Messages:</p>';
        echo '<div class="Spliter2"></div>';
        echo nl2br($GetComments);
        echo '</div>';
    ?>
    <?php
        if(isset($_GET['delete']))
        {
            unlink("TextMsg.txt");
        }
    ?>
    <?php
        if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
        {
           header("Location:index.php");  
        }
    ?>
    <script>
        var Time;

        function y() {
            if (document.getElementById('RadioBtnOn').checked = true) {
                Time = setTimeout(function() {
                    window.location.reload(1);
                }, 2000);
            }
        }

        function x() {
            if (document.getElementById('RadioBtnOff').checked = true) {
                clearTimeout(Time);
            }
        }

        function z() {
            document.getElementById("RadioBtnOff").checked = true;
            clearTimeout(Time);
        }

        y();

    </script>
</body>
</html>