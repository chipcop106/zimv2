<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <h4 class="mg-b-15 tx-spacing--1">Create notification</h4>
        <div class="create_notification">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Title</span>
                </div>
                <input type="text" aria-label="First name" class="form-control" placeholder="Notification title...">
                <select name="" id="select-role" class="custom-select">
                        <option value="" disabled selected>Select role receive</option>
                        <option value="">All</option>
                        <option value="admin">Admin</option>
                    </select>
            </div>
         
            <div class="message-editor-wrap mg-y-20">
                <div id="message-editor">

                </div>
                <div class="d-flex justify-content-between mg-t-20">
                    <div class="custom-control custom-checkbox align-self-start">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Notify email</label>
                    </div>
                    <a href="#" class="btn btn-primary">Create</a>
                </div>
            
            </div>
        </div>
        <div class="notification__wrap">
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th>Date</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th class="no-wrap">Created by</th>
                            <th>Title</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>20/04/2019</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4" checked
                                        disabled>
                                    <label class="custom-control-label" for="customCheck4"></label>
                                </div>
                            </td>
                            <td><span class="badge badge-info">QL</span></td>

                            <td>Phuong Nguyen</td>
                            <td>V/V nghỉ lễ 02/09/2018</td>
                            <td>Toàn bộ Hệ thống Anh Ngữ ZIM (học viên và nhân viên) sẽ nghỉ lễ theo thời gian sau: từ
                                ngày 01/09 đến hết ngày 02/09 (nghỉ CN và thứ 2) Các Trưởng Cơ sở nắm rõ thông tin và
                                Admin học vụ thông báo lịch nghỉ cho học viên chính xác.</td>

                        </tr>
                        <tr>
                            <td>20/04/2019</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4" checked
                                        disabled>
                                    <label class="custom-control-label" for="customCheck4"></label>
                                </div>
                            </td>
                            <td><span class="badge badge-info">QL</span></td>

                            <td>Phuong Nguyen</td>
                            <td>V/V nghỉ lễ 02/09/2018</td>
                            <td>Mục đăng kí học: Nhập CMND, nơi cấp, ngày cấp nhưng vào hồ sơ chi tiết của học viên ko thấy hiện. Sau khi điền lại để cập nhập cũng không thấy hiện lên.</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <nav aria-label="Page navigation" class="mg-t-10">
                <ul class="pagination mg-b-0 justify-content-end">
                    <li class="page-item disabled"><a class="page-link page-link-icon" href="#"><i
                                data-feather="chevron-left"></i></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link page-link-icon" href="#"><i
                                data-feather="chevron-right"></i></a></li>
                </ul>
            </nav>
        </div>
    </div><!-- container -->
</div><!-- content -->
<?php require_once( 'footer.php' ); ?>
<script src="lib/tinymce/tinymce.min.js"></script>
<script>
$(document).ready(function() {
    var commentEditor = {
        selector: '#message-editor',
        menubar: false,
        inline: false,
        plugins: [
            'lists',
            'autolink',
            'paste'
        ],
        paste_as_text: true,
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i'
        ],
        init_instance_callback: function (editor) {
            editor.setContent('Type message here...');  
        }
    };
    tinymce.init(commentEditor);
});
</script>