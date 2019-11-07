<script>
$(document).ready(function() {
    $(document).off().on('change', '#soluong', function() {
        $value = $(this).val();
        $price = $("#newprice").attr("data-price");
        $price = $price.trim();
        const old = parseFloat($price);
        $("#newprice").text(changemoneyandstring(old * $value));
    })

    $("#blackhome").click(function() {
        window.location.href = "../../trang-chu";
    });

    $("#giohang").click(function() {
        var ID = $(this).val();
        var SL = $("#soluong").val();
        window.location.href = "../../gio-hang/" + ID + "/" + SL;
    });
});

changemoneyandstring = (s, languages = 0, type = 0, money = 0) => {
    var temp = "";
    if (!isNaN(s)) {
        var optionmoney = {
            country: ["vi-VN", "en-US"],
            type: ["currency", "decimal", "percent"],
            money: ["VND", "USD"],
        }
        var formatter = new Intl.NumberFormat(optionmoney.country[languages], {
            style: optionmoney.type[type],
            currency: optionmoney.money[money],
        });
        temp = formatter.format(s);
    }
    return temp;
}
</script>