<style>
.cart h3 {
    font-weight: 700;
    text-decoration: underline;
    position: relative;
    margin-left: 20px;
}

.cart h3::before {
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    content: "\f00c";
    position: absolute;
    left: -30px;
    color: red;
}

.cart h3 span {
    color: red;
    font-weight: 700;
    font-size: 30px;
}
</style>

<script>
$(document).ready(function() {

    $(document).on("click", "#add", function() {
        let ID = $(this).val();
        let SL = $("#soluong_" + ID).val();
        window.location.href = "http://localhost:8000/onlineshop/index.php/gio-hang/" + ID + "/" + SL;
    });
    $("#delete").on("click", function() {
        let ID = $(this).val();
        window.location.href = "http://localhost:8000/onlineshop/index.php/gio-hang/xoa/" + ID;
    });
    $(document).on("click", "#delete", function() {
        let ID = $(this).val();
        window.location.href = "http://localhost:8000/onlineshop/index.php/gio-hang/xoa/" + ID;
    });

    $(document).on("click", "#pay", function() {
        window.location.href = "http://localhost:8000/onlineshop/index.php/thanh-toan";
        // return confirm("Bạn có tài khoản user chưa?");
    });
});
</script>