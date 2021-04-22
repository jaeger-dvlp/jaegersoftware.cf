<?php

$cnnct = mysqli_connect("", "", "", "", "") or die("Cant Connect");
$cnnct->set_charset("utf8");
//$cnnct = mysqli_connect("localhost", "root", "", "jktest", "3308") or die("Cant Connect");
$baslik = $_POST["baslik"];
$aciklama = $_POST["aciklama"];
$kod = $_POST["kod"];
$konu = $_POST["konu"];

if ($konu == "cs") {
    $addpost = "INSERT INTO csharp(baslik,aciklama,kod) VALUES('$baslik','$aciklama','$kod')";
} else if ($konu == "js") {
    $addpost = "INSERT INTO js(baslik,aciklama,kod) VALUES('$baslik','$aciklama','$kod')";
} else if ($konu == "djs") {
    $addpost = "INSERT INTO djs(baslik,aciklama,kod) VALUES('$baslik','$aciklama','$kod')";
} else if ($konu == "htmlcss") {
    $addpost = "INSERT INTO htmlcss(baslik,aciklama,kod) VALUES('$baslik','$aciklama','$kod')";
}



if ($cnnct->query($addpost)) {
} else {
    echo "Failed";
}
