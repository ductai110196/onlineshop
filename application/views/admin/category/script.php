<script>
$(document).ready(() => {
    let url = "http://localhost:8000/onlineshop/index.php/admin/category";
    //status
    $(document).on("click", "#Status", function() {
        var st = $(this).val();
        var id = $(this).attr('data-id');
        $.get(url + "/status", {
            id: id,
            status: st
        }, function(res) {
            if (res == 1) {
                toastr.info("Trạng thái đã thay đổi thành công");
            } else {
                toastr.error("Trạng thái đã thay đổi thất bại");
            }
            setTimeout(() => {
                window.location.reload();
            }, 100)
        })
    })
    //show on home
    $(document).on("click", "#Show", function() {
        var st = $(this).val();
        var id = $(this).attr('data-id');
        $.get(url + "/show", {
            id: id,
            show: st
        }, function(res) {
            if (res == 1) {
                toastr.info("Trạng thái đã thay đổi thành công");
            } else {
                toastr.error("Trạng thái đã thay đổi thất bại");
            }
            setTimeout(() => {
                window.location.reload();
            }, 100)
        })
    })


    //create 

    $(document).on("click", "#add_item", function() {
        window.location.href = url + "/create";
    })

    //keypress url
    $(document).on("keyup", "#tenloai", function() {
        $text = $(this).val();
        $("#texturl").val(replaceurl($text));
    });
    //keypress url
    $(document).on("keyup", "#sua_tenloai", function() {
        $text = $(this).val();
        $("#sua_texturl").val(replaceurl($text));
    });

})
</script>