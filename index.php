<?php

/*
$cnnct = mysqli_connect($host, $username, $psw, $database, $port) or die("cant connect");
*/

$cnnct = mysqli_connect("", "", "", "", "") or die("Cant Connect");
$cnnct->set_charset("utf8");
//$cnnct = mysqli_connect("localhost", "root", "", "jktest", "3308") or die("Cant Connect");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
    <title>JK Software</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/style.css">
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
    <link rel="icon" type="image/png" href="resources/tabicon.png">



</head>

<body style="background-color: #1F2026;">

    <header class="mainheader">
        <div class="header1 col-12 ">
            <div class="logo mx-auto row" onClick="window.open('http://www.jaegersoftware.cf')" style="cursor:pointer;"></div>
        </div>
        <div class="header2 mx-auto row"></div>
    </header>
    <div class="d-flex mt-5 col-12">
        <div class="hitext mx-auto row">Merhaba.</div>

    </div>
    <div class="d-flex mt-5 col-12">
        <div class="hitext2 mx-auto row">JK Web & Software Development<br>topluluğuna hoş geldin.</div>
    </div>

    <div class=" mainvalue col-12 mx-auto row justify-content-center mt-3">

        <div class="mainthree m-3 col-lg-3" onClick="window.open('https://discord.gg/EPUSRFZKd7')">
            <div class="mx-auto text-center w-100 mt-2 mb-2">
                <i class="fab fa-discord text-center icons" style="font-size:50px;"></i>
            </div>
            <div style="width:100%;height:1px;background-color:rgba(16, 65, 57, 1);margin:0;">
            </div>
            <div class="mainvaluetext text-center mx-auto">
                Discord topluluğumuzda kodlarken yaşadığın <br>sorunu belirt, topluluğumuzdan yardım edin.
            </div>
        </div>

        <div class="mainthree m-3 col-lg-3" onClick="window.open('https://github.com/jaeger-dvlp')">
            <div class="mx-auto text-center w-100 mt-2 mb-2">
                <i class="fab fa-github text-center icons" style="font-size:50px;"></i>
            </div>

            <div style="width:100%;height:1px;background-color:rgba(16, 65, 57, 1);margin:0;">
            </div>
            <div class="mainvaluetext text-center mx-auto">
                GitHub adresimizden paylaştığımız<br>tüm yararlı paylaşımlara ulaş.
            </div>
        </div>

        <div class="mainthree m-3 col-lg-3" onclick="helpscroll()">
            <div class="mx-auto text-center w-100 mt-2 mb-2">
                <i class="fas fa-question-circle text-center icons" style="font-size:50px;"></i>
            </div>

            <div style="width:100%;height:1px;background-color:rgba(16, 65, 57, 1);margin:0;">
            </div>
            <div class="mainvaluetext text-center mx-auto">
                Yazılımın alanında ki bilgi <br> havuzumuzdan istediğin gibi yararlan.
            </div>
        </div>
        <br>

    </div>

    <div class="scroll-icon mx-auto text-center mt-5">
        <span class="wheel">
        </span>
    </div>

    <div class="topbtn text-center" id="topbtn" onClick="topFunction()">
        <i class="fas fa-angle-double-up mt-2" style="color:white;font-size:22px;"></i>
    </div>

    <div class="picside mt-5 mb-5" style="position:relative;top:50px;">
        <div class="header2 mx-auto row col-12"></div>
        <div class="justify-content-center" style="background-color:black;z-index:2;">
            <div class="picsidepic">
                <div style="width:100%;height:100%;background-color: #000000c7;">
                    <div class="mx-auto text-center justify-content-center pictext">
                        Kütüphaneler</div>
                </div>
            </div>
        </div>
        <div class=" header2 mx-auto row"></div>
    </div>

    <div class="libraries mt-5 col-11 mx-auto row justify-content-center mb-5">

        <div class="libs col-lg-5 col-xl-5 mt-5 mb-5 mx-auto" id="cs">
            <div style="position:relative;height:300px;overflow: hidden;">
                <div class="lib-head w-100" style="padding:0px;background-image:url('resources/lang/cs.jpg');">
                    <div style="width:100%;height:100%;background-color: rgba(0, 0, 0, 0.911);position: absolute;top:0;">
                        <div class="libheader w-100 mx-auto text-center mt-1">
                            C-Sharp
                        </div>
                        <div class="libheader2 w-100 mx-auto text-center">
                            Kütüphanesi
                        </div>
                        <div class="header3 mx-auto row mt-2"></div>
                    </div>
                </div>
            </div>
            <div class="lib-subject w-100  mx-auto ">

                <div class="lib-subject2 mx-auto row mb-5">
                    <div class="text-center m-4">
                        C-Sharp ile alakalı paylaşmış olduğumuz, kodlara, programlara, kaynaklara, haberlere ve daha bir
                        çok
                        bilgiye
                        ulaş.
                    </div>
                </div>
                <div class="read-more m-5 text-center mx-auto" onClick="window.open('groups/cs_index.php')">
                    Göz At
                </div>
            </div>
        </div>


        <div class="libs col-lg-5 col-xl-5 mt-5 mb-5 mx-auto">
            <div style="position:relative;height:300px;overflow: hidden;">
                <div class="lib-head w-100" style="padding:0px;background-image:url('resources/lang/js.jpg');">
                    <div style="width:100%;height:100%;background-color: rgba(0, 0, 0, 0.911);position: absolute;top:0;">
                        <div class="libheader w-100 mx-auto text-center mt-1">
                            Javascript
                        </div>
                        <div class="libheader2 w-100 mx-auto text-center">
                            Kütüphanesi
                        </div>
                        <div class="header3 mx-auto row mt-2"></div>

                    </div>

                </div>
            </div>
            <div class="lib-subject w-100  mx-auto ">

                <div class="lib-subject2 mx-auto row mb-5">
                    <div class="text-center m-4">
                        Javascript ile alakalı paylaşmış olduğumuz, kodlara, programlara, kaynaklara, haberlere ve daha
                        bir çok
                        bilgiye
                        ulaş.
                    </div>
                </div>
                <div class="read-more m-5 text-center mx-auto" onClick="window.open('groups/cs_js.php')">
                    Göz At
                </div>

            </div>
        </div>

        <div class="libs col-lg-5 col-xl-5 mt-5 mb-5 mx-auto">
            <div style="position:relative;height:300px;overflow: hidden;">
                <div class="lib-head w-100" style="padding:0px;background-image:url('resources/lang/html.jpg');">
                    <div style="width:100%;height:100%;background-color: rgba(0, 0, 0, 0.911);position: absolute;top:0;">
                        <div class="libheader w-100 mx-auto text-center mt-1">
                            Html/Css
                        </div>
                        <div class="libheader2 w-100 mx-auto text-center">
                            Kütüphanesi
                        </div>
                        <div class="header3 mx-auto row mt-2"></div>

                    </div>

                </div>
            </div>
            <div class="lib-subject w-100  mx-auto ">

                <div class="lib-subject2 mx-auto row mb-5">
                    <div class="text-center m-4">
                        HTML ve CSS ile alakalı paylaşmış olduğumuz, kodlara, programlara, kaynaklara, haberlere ve daha
                        bir çok
                        bilgiye
                        ulaş.
                    </div>
                </div>
                <div class="read-more m-5 text-center mx-auto" onClick="window.open('groups/cs_htmlcss.php')">
                    Göz At
                </div>

            </div>
        </div>

        <div class="libs col-lg-5 col-xl-5 mt-5 mb-5 mx-auto">
            <div style="position:relative;height:300px;overflow: hidden;">
                <div class="lib-head w-100" style="padding:0px;background-image:url('resources/lang/dc.jpg');">
                    <div style="width:100%;height:100%;background-color: rgba(0, 0, 0, 0.911);position: absolute;top:0;">
                        <div class="libheader w-100 mx-auto text-center mt-1">
                            Discord.js
                        </div>
                        <div class="libheader2 w-100 mx-auto text-center">
                            Kütüphanesi
                        </div>
                        <div class="header3 mx-auto row mt-2"></div>

                    </div>

                </div>
            </div>
            <div class="lib-subject w-100  mx-auto ">

                <div class="lib-subject2 mx-auto row mb-5">
                    <div class="text-center m-4">
                        Discord.js ile alakalı paylaşmış olduğumuz, kodlara, programlara, kaynaklara, haberlere ve daha
                        bir çok
                        bilgiye
                        ulaş.
                    </div>
                </div>
                <div class="read-more m-5 text-center mx-auto" onClick="window.open('groups/cs_djs.php')">
                    Göz At
                </div>

            </div>
        </div>

    </div>


    <script src="js/scripts.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/a5c523402b.js" crossorigin="anonymous"></script>
</body>

</html>