<?php session_start(); ?>
<?php 
    $user = $_SESSION['use'];
    date_default_timezone_set("MST");

    $CommentTB = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $CommentTB = SendInfo($_POST["CommentTB"]);
    }

    function SendInfo($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $file = fopen("TextMsg.txt","a") or die("Cant Open File");
    $txt = $user.': '.$CommentTB." -".date("h:i A")."\n";
    fwrite($file, $txt);
    fclose($file);


    header("Location: Home.php");
    die();
?> 