<script>
$(document).ready(function() {
    var url = "http://localhost:8000/onlineshop/index.php/admin/user/";
    $(document).on("click", "#Status", function() {
        var status = $(this).val();
        var id = $(this).attr('data-id');
        $.get(url + "status", {
            id: id,
            status: status
        }, function(res) {
            if (res == 1) {
                toastr.info("Trạng thái cập nhật thành công");
            } else {
                toastr.error("Có lỗi xảy ra cập nhật trạng thái");
            }
            setTimeout(() => {
                window.location.reload();
            }, 1000)
        })
    });
    //create add-item
    $(document).on("click", "#add_item", function() {
        window.location.href = url + "create";
    })
});
</script>