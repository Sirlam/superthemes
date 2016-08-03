$(document).ready(function () {
    $(".delete_theme").click(function (event) {
        $("#btn_delete_theme").prop('href', '/product/delete/' + event.target.id );
    });
});