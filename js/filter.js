
$(document).ready(function () {
    $("#data").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        console.log(value);
        $(".groups .group").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});