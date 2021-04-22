
var btn = document.getElementById("topbtn");
var sharebtn = document.getElementById("sharebtn");
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 25 || document.documentElement.scrollTop > 25) {
        btn.style.opacity = "1";
    } else {
        btn.style.opacity = "0";
    }
}

function firstLoad() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function helpscroll() {
    var x = document.getElementById("cs").getBoundingClientRect();
    document.body.scrollTop = x.y - 50;
    document.documentElement.scrollTop = x.y - 50;
}

function addpost() {
    var a, b, c;
    a = document.getElementById("baslik").value;
    b = document.getElementById("aciklama").value;
    c = document.getElementById("kod").value;
    d = document.getElementById("konu").value;
    if (a == null || a == "", b == null || b == "", c == null || c == "", d == "Konu Seçiniz..") {
        alert("Lütfen hatasız seçim ve doldurma yapınız.");
    } else {
        document.getElementById("addpostf").submit();
        alert("Post Eklendi.");
    }

}
