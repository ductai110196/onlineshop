//set url - urlsave
const url = "http://localhost:8000/onlineshop/assets/plugin";
const urlsave = "/onlineshop";
//call jquery
$(document).ready(() => {
    //call progress bar
    //confignprogress('.container-fluid');
    //call đatatable
    //configdatatable('.table', 1);
    //call toast
    configtoast();
    //configmovemodal();
})
confignprogress = (id) => {
        NProgress.start(); // start    
        NProgress.set(0.4); // To set a progress percentage, call .set(n), where n is a number between 0..1
        NProgress.inc(); // To increment the progress bar, just use .inc(). This increments it with a random amount. This will never get to 100%: use it for every image load (or similar).If you want to increment by a specific value, you can pass that as a parameter
        NProgress.configure({ ease: 'ease', speed: 500 }); // Adjust animation settings using easing (a CSS easing string) and speed (in ms). (default: ease and 200)
        NProgress.configure({ trickleSpeed: 800 }); //Adjust how often to trickle/increment, in ms.
        NProgress.configure({ showSpinner: false }); //Turn off loading spinner by setting it to false. (default: true)
        NProgress.configure({ parent: id }); //specify this to change the parent container. (default: body)
        NProgress.done(); // end
    }
    //cate !=0 get vietnames,cate==0 get english
configdatatable = (table = 'table', cate = 0) => {
        var config = "";
        if (cate != 0) {
            config = $(table).DataTable({
                "language": {
                    "sEmptyTable": "Không có dữ liệu trong bảng",
                    "sInfo": "_START_ đến _END_ trong số _TOTAL_ mục nhập",
                    "sInfoEmpty": "0 đến 0 trong tổng số 0 mục",
                    "sInfoFiltered": "(được lọc bởi các mục _MAX_)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "Hiển thị các mục _MENU_",
                    "sLoadingRecords": "Đang tải ...",
                    "sProcessing": "Vui lòng chờ ...",
                    "sSearch": "Tìm kiếm",
                    "sZeroRecords": "Không có mục nào.",
                    "searchPlaceholder": "Tìm kiếm...",
                    "oPaginate": {
                        "sFirst": "đầu tiên",
                        "sPrevious": "trở lại",
                        "sNext": "kế tiếp",
                        "sLast": "cuối cùng"
                    },
                    "oAria": {
                        "sSortAscending": ": cho phép sắp xếp cột theo thứ tự tăng dần",
                        "sSortDescending": ": cho phép sắp xếp cột theo thứ tự giảm dần"
                    }
                }
            });
        } else {
            config = $(table).DataTable();
        }
        return config;
    }
    // replace url a b c  get a-b-c
replaceurl = (url) => {
        var title, slug;
        //Lấy text từ thẻ input title 
        title = url
        title = title.trim();
        //Đổi chữ hoa thành chữ thường
        slug = title.toLowerCase();
        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, " - ");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        // Thay đổi dau khảng trắng
        while (slug.search(" ") != -1) {
            slug = slug.replace(" ", '-');
        }
        // Thay đoi hai dấu gạch trùng nhau =))
        while (slug.search("--") != -1) {
            slug = slug.replace("--", '-');
        }
        //In slug ra textbox có id “slug”
        return slug;
    }
    //config toast
configtoast = () => {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "hideMethod": "fadeOut"
        };
    }
    //configckeditor
configckeditor = (name) => {
        CKEDITOR.replace(name, {
            filebrowserBrowseUrl: url + '/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: url + '/ckfinder/ckfinder.html?type=Images',
            filebrowserFlashBrowseUrl: url + '/ckfinder/ckfinder.html?type=Flash',
            filebrowserUploadUrl: url + '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: urlsave + '/data',
            filebrowserFlashUploadUrl: url + '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        });
    }
    //ckefinder show input text
selectFileWithCKFinder = (idtext) => {
        CKFinder.popup({
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function(finder) {
                finder.on('files:choose', function(evt) {
                    var file = evt.data.files.first();
                    var output = document.getElementById(idtext);
                    output.value = file.getUrl();
                });

                finder.on('file:choose:resizedImage', function(evt) {
                    var output = document.getElementById(idtext);
                    output.value = evt.data.resizedUrl;
                });
            }
        });
    }
    //()=>get 3 digitals
setplugineditorandckfinder = (category = 1, editor = '', finder = '') => {
        var config = '';
        if (category == 1) {
            config = configckeditor(editor);
        } else {
            config = selectFileWithCKFinder(finder);
        }
        return config;
    }
    //click show ckfinder
    /*var chon = document.querySelector("#chon");
    chon.onclick = () => {
            setplugineditorandckfinder(0, '', 'texthinh');
        }
        //call function show ckeditor
    setplugineditorandckfinder(1, 'mota');*/

//set get editor
setckeditor = (id, value) => {
    CKEDITOR.instances[id].setData(value);
}
getckeditor = (id) => {
    return CKEDITOR.instances[id].getData();
}

//config move modal jquery ui

configmovemodal = () => {
    $('.modal-dialog').draggable({
        handle: ".modal-header"
    });
}