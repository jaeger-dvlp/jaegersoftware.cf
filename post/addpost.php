<?php



$cnnct = mysqli_connect($host, $username, $psw, $database, $port) or die("cant connect");

$cnnct = mysqli_connect("", "", "", "", "") or die("Cant Connect");
//$cnnct = mysqli_connect("localhost", "root", "", "jktest", "3308") or die("Cant Connect");

$cnnct->set_charset("utf8");

session_start();

if (isset($_SESSION['user'])) {
    session_destroy();
} else {
    session_destroy();
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1254" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="JK Web & Software. Desktop Softwares, Web Sites, Discord Bots and more!">
    <meta name="twitter:creator" content="@7AEGER">
    <meta name="author" content="JAEGER" />
    <meta name="copyright" content="JAEGER SOFTWARE" />
    <title>JK Admin - Post Ekle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="p_style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../resources/tabicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/highlight.js@10.6.0/styles/obsidian.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body style="background-color: #1F2026;">

    <header class="mainheader">
        <div class="header1 col-12 ">
            <div class="logo mx-auto row" onClick="window.open('http://www.jaegersoftware.cf')" style="cursor:pointer;"></div>
        </div>
        <div class="header2 mx-auto row"></div>
    </header>

    <div class="avatar mx-auto mt-5"></div>


    <div class="d-flex mt-2 col-12">
        <div class="hitext mx-auto row text-center">Jaeger
        </div>
    </div>

    <div class="d-flex mt-3 col-12">
        <div class="hitext2 mx-auto row">Hoş Geldin.</div>
    </div>

    <div class="hrs mt-5 mx-auto"></div>

    <div class="admin mb-5 w-100 mx-auto col-12">

        <div class="admtext1 mx-auto justify-content-center row w-100 text-center row">Yönet</div>

        <div class="menus mb-5 mx-auto mt-4 col-12">

            <form class="mt-5 mb-5 form-group" id="addpostf" name="Form" action="func.php" method="POST" target="frame">
                <select name="konu" id="konu" class="konu form-select form-select2 w-100" placeholder="Konu Seçiniz..">
                    <option selected disabled>Konu Seçiniz..</option>
                    <option value="cs">C-Sharp</option>
                    <option value="js">Javascript</option>
                    <option value="djs">Discord.JS</option>
                    <option value="htmlcss">Html/CSS</option>
                </select>
                <input type="text" class="form-control inputtext" id="baslik" name="baslik" placeholder="Başlık.." value="">
                <input type="text" class="form-control inputtext" id="aciklama" name="aciklama" placeholder="Açıklama.." value="">
                <textarea class="form-control inputtext" id="kod" name="kod" placeholder="Kod.." value=""></textarea>

                <div class="mx-auto text-center mt-5">
                    <input type="button" class="btn " onclick="addpost()" value="Ekle">
                </div>

            </form>

        </div>

    </div>







    <div style="margin-bottom:200px;width:100%;height:1px;opacity:0;"></div>







    <div class="topbtn text-center" id="topbtn" onClick="topFunction()">
        <i class="fas fa-angle-double-up mt-2" style="color:white;font-size:22px;"></i>
    </div>


    <iframe style="display:none;" name="frame" id="frame" class="frame"></iframe>
    <script src="../js/scripts.js" type="text/javascript"></script>
    <script src="../js/filter.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/a5c523402b.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.5.0/build/highlight.min.js"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
</body>

</html>