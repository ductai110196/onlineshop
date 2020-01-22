<script>
$(document).ready(function() {
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
    });
});
</script>