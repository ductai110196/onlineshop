<script>
$(document).ready(function() {
    let url = "http://localhost:8000/onlineshop/index.php/admin/product";
    $(document).on("click", "#Status", function() {
        $value = $(this).val();
        $id = $("#Status").attr("data-id");
        $.get(url + "/status", {
            id: $id,
            status: $value
        }, function(res) {
            if (res > 0) {
                toastr.info("Trạng thái cập nhật thành công");
            } else {
                toastr.error("Trạng thái cập nhật thất bại");
            }
            setTimeout(() => {
                window.location.reload();
            }, 1000);
        });
    });

    //add 
    $(document).on("click", "#add_item", function() {
        window.location.href = url + "/create";
    });

    setplugineditorandckfinder(1, 'mota');
    setplugineditorandckfinder(1, 'chitiet');

    $(document).on("click", "#img", function() {
        setplugineditorandckfinder(0, '', 'hinhanh');
    });

    $(document).on('keyup', '#tensanpham', function() {
        let val = $(this).val();
        $("#texturl").val(replaceurl(val));
    })

});
</script>