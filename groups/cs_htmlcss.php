<?php

$host = "";
$username = "";
$psw = "";
$database = "";
$port = "";




/*
$host = "localhost";
$username = "root";
$psw = "";
$database = "jktest";
$port = "3308";
*/


$cnnct = mysqli_connect($host, $username, $psw, $database, $port) or die("cant connect");
$cnnct->set_charset("utf8");

//$cnnct = mysqli_connect("localhost", "root", "", "jktest", "3308") or die("Cant Connect");

$vt = new PDO("mysql:host=$host:3306;dbname=$database;charset=UTF8", "$username", "$psw");
$sorgu = $vt->prepare('SELECT * FROM htmlcss');
$sorgu->execute();
$test = $sorgu->fetchAll(PDO::FETCH_OBJ);

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
    <title>Html/CSS Kütüphanesi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="cs_style.css">
    <link rel="stylesheet" type="text/css" href="group.css">
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
    <div class="d-flex mt-5 col-12">
        <div class="hitext mx-auto row text-center">Html/CSS<br>
            Kütüphanesi


        </div>

    </div>
    <div class="d-flex mt-5 col-12">
        <div class="hitext2 mx-auto row">Yüzlerce koda, bilgiye ve projeye ulaş.</div>
    </div>

    <div class="scroll-icon mx-auto text-center mt-5">
        <span class="wheel">
        </span>
    </div>
    <div class="topbtn text-center" id="topbtn" onClick="topFunction()">
        <i class="fas fa-angle-double-up mt-2" style="color:white;font-size:22px;"></i>
    </div>


    <div class="libheaders row col-10 mx-auto w-100">
        <div class="text-center mx-auto libheadera d-flex">Konular</div>
        <div class="hrs mx-auto row mt-2"></div>
    </div>



    <div class="groups col-12 row mx-auto mt-5" style="margin-bottom:200px;">
        <div class="mt-4 mb-4 w-100 mx-auto justify-content-center d-flex">
            <input class="search mx-auto" type="text" id="data" placeholder="Ara...">
        </div>

        <?php
        foreach ($test as $data) { ?>


            <div class="group col-12 col-sm-10 col-lg-7 col-md-8 mx-auto mt-5 mb-5">
                <div class=" group-header w-100 text-center">

                    <div class="gh1 mt-2 mx-auto text-center">
                        <?= $data->baslik ?>
                    </div>
                    <div class="gh2 mt-1 mx-auto text-center">Html/CSS</div>
                    <div class="hrs2 mx-auto row mt-2"></div>
                </div>

                <div class="w-100 group-desc">
                    <?= $data->aciklama ?>
                </div>

                <div class="windowtab w-100 mt-2">
                    <div class="float-left ml-2 windowtabicons" style="background-color:#FF5E52;">
                    </div>
                    <div class="float-left ml-2 windowtabicons" style="background-color:#FFBC2D;">
                    </div>
                    <div class="float-left ml-2 windowtabicons" style="background-color:#2DC640;">
                    </div>
                </div>

                <div class="w-100 row mx-auto group-code mb-3" style="user-select:text">

                    <pre class=" w-100 mx-auto">
                    <code class="csharp">
<?= $data->kod ?>
                    </code></pre>

                </div>

            </div>


        <?php } ?>

    </div>




    <script src="../js/scripts.js" type="text/javascript"></script>
    <script src="../js/filter.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/a5c523402b.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.5.0/build/highlight.min.js"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
</body>

</html>