$(document).ready(function () {
    $(".delete_theme").click(function (event) {
        $("#btn_delete_theme").prop('href', '/product/delete/' + event.target.id );
    });
});
$("#feat").click(function() {
    $("#others").addClass("hide");
    $("#featured").removeClass("hide");
    $("#other").addClass("active");
    $("#feat").removeClass("active");
});
$("#other").click(function() {
    $("#featured").addClass("hide");
    $("#others").removeClass("hide");
    $("#feat").addClass("active");
    $("#other").removeClass("active");
});