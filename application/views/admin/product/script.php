<script>
$(document).ready(function() {
    let url = "http://localhost:8000/onlineshop/index.php/admin/product";
    $(document).on("click", "#Status", function() {
        $value = $(this).val();
        $id = $(this).attr("data-id");
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
            }, 100);
        });
    });

});
</script>