<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0 ">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-30">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Warning list</li>
            </ol>
        </nav>
        <!-- End breadcrumb -->

        <div class="d-xl-flex align-items-center justify-content-between ">
            <div>
                <h4 class="mg-b-0 tx-spacing--1">Warning lists</h4>
            </div>
            <div class="d-xl-block">
                <div class="d-flex justify-content-xl-center mg-t-20 mg-xl-t-0 flex-wrap">
                    <div class="search-form mg-l-5 mg-r-5">
                        <input type="search" class="form-control" placeholder="Search">
                        <button class="btn" type="button"><i data-feather="search"></i></button>
                    </div>
                    <div class="sort-by mg-l-5 mg-r-5">
                        <select class="custom-select">
                            <option value="" disabled selected>Sort by</option>
                            <option value="all">Name</option>
                            <option value="all">Phone</option>
                            <option value="1">Email</option>
                            <option value="2">Status</option>
                        </select>
                    </div>
                    <a href="#filterCollapse" class="btn btn-primary mg-l-5 mg-r-5 mg-sm-r-0 transparent" role="button"
                        data-toggle="collapse" aria-expanded="false" aria-controls="filterCollapse"><i
                            data-feather="filter"></i></a>
                </div>
            </div>

        </div>

        <div class="collapse mg-t-10" id="filterCollapse">
            <div class="card">
                <div class="card-body">
                    <div class=" d-flex flex-wrap">
                        <div class="form-group col-md-4 col-6 col-xl-3">
                            <label class="form-control-label">Name:</label>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group col-md-4 col-6 col-xl-3">
                            <label class="form-control-label">Location:</label>
                            <select class="custom-select select2">
                                <option value="" disabled selected>Select location</option>
                                <option value="1">all</option>
                                <option value="1">Phú Yên</option>
                                <option value="2">Hồ Chí Minh</option>
                                <option value="3">Hà Nội</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-6 col-xl-3">
                            <label class="form-control-label">Source:</label>
                            <select class="custom-select select2">
                                <option value="" disabled selected>Select source</option>
                                <option value="all">All</option>
                                <option value="1">https://ielts-share.com</option>
                                <option value="2">Supporter</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-6 col-xl-3">
                            <label class="form-control-label">Status:</label>
                            <select class="custom-select select2">
                                <option value="" disabled selected>Select status</option>
                                <option value="all">All</option>
                                <option value="1">Deactive</option>
                                <option value="2">Active</option>
                            </select>
                        </div>
                        <div class="form-group col-12 mg-b-0">
                            <button type="button" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mg-t-30">
            <div class="table-responsive">
                <table class="table table-striped table-sm collapse-table">
                    <thead class="thead-light">
                        <tr>
                            <th></th>
                            <th>Course</th>
                            <th>Student</th>
                            <th>Capacity</th>
                            <th>Created by</th>
                            <th>Date</th>
                            <th>Message</th>
                            <th class="no-wrap">New comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tr-row">
                            <td><a href="javascript:;" class="collapse-toggle"><i class="fas fa-plus-square"></i></a></td>
                            <td>[138 Huỳnh Lan Khánh] IELST - Professional 18/04, 18:00 - 20:00</td>
                            <td class="no-wrap">Trương Đình Lan Thi</td>
                            <td>Trung Bình</td>
                            <td class="no-wrap">Phuong Nguyen</td>
                            <td>02/09/2018</td>
                            <td>bạn này đọc còn rất chậm, đề nghị hỗ trợ bạn học lại 1 lớp RL Advanced hoặc hỗ trợ lớp Inter RL</td>
                            <td>Em sẽ cố gắng tiếp thu bài tốt hơn, cám ơn cô</td>
                        </tr>
                        <tr class="collapse-row">
                            <td colspan="8">
                                <div class="collapse-content">Thông tin thêm</div>
                            </td>
                           
                        </tr>
                        <tr class="tr-row">
                            <td><a href="javascript:;" class="collapse-toggle"><i class="fas fa-plus-square"></i></a></td>
                            <td>[138 Trần Phú]  IELST - Advanced 18/04, 18:00 - 20:00</td>
                            <td class="no-wrap">Trương Đình Thông</td>
                            <td>Trung Bình</td>
                            <td class="no-wrap">Phuong Nguyen</td>
                            <td>02/09/2018</td>
                            <td>Mục đăng kí học: Nhập CMND, nơi cấp, ngày cấp nhưng vào hồ sơ chi tiết của học viên ko thấy hiện. Sau khi điền lại để cập nhập cũng không thấy hiện lên.</td>
                            <td></td>
                        </tr>
                        <tr class="collapse-row">
                            <td colspan="8">
                                <div class="collapse-content">Thông tin chi tiết hoặc thêm thông tin</div>
                            </td>
                           
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
    $('.table').on('click', '.collapse-toggle', function() {
        $(this).children().toggleClass('fa-plus-square').toggleClass('fa-minus-square');
        $(this).toggleClass('active').closest('tr.tr-row').next().find('.collapse-content')
            .slideToggle(
                200);
    })
});
</script>