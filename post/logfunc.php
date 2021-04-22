<?php

$cnnct = mysqli_connect("", "", "", "", "") or die("Cant Connect");
$cnnct->set_charset("utf8");
//$cnnct = mysqli_connect("localhost", "root", "", "jktest", "3308") or die("Cant Connect");

session_start();
if (empty($_POST['kad']) || empty($_POST["psw"])) {
    echo '<script> alert("Giriş Başarısız.");</script>';
    header("Refresh:1; url=login.php", true, 303);
} else {
    $kad = $_POST['kad'];
    $psw = $_POST['psw'];
    $ask = "SELECT * FROM users WHERE username='$kad' and password='$psw'";
    $result = mysqli_query($cnnct, $ask);
    if (mysqli_fetch_assoc($result)) {
        $_SESSION['user'] = $_POST['kad'];
        header("location:addpost.php");
    } else {
        echo '<script>alert("Giriş Başarısız.");</script>';
        header("Refresh:1; url=login.php", true, 303);
    }
}
