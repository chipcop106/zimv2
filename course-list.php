<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1 mg-b-0">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="#">Khoá học</a></li>
            <li class="breadcrumb-item active" aria-current="page">Danh sách khoá học</li>
        </ol>
        </nav>
        <!-- End breadcrumb -->

        <div class="d-xl-flex align-items-center justify-content-between ">
            <div>
            <h4 class="mg-b-0 tx-spacing--1">Danh sách khoá học</h4>
            </div>
            <div class="d-xl-block">
                <div class="d-flex justify-content-xl-center mg-t-20 mg-xl-t-0 flex-wrap">
                    <a href="course-empty-room-check.php" class="btn btn-primary mg-xl-l-5 mg-r-5 transparent"><i></i>Xem lịch phòng</a>
                    <a href="teacher-schedule-check.php" class="btn btn-primary mg-l-5 mg-r-5 transparent"><i></i>Xem lịch giáo viên</a>
                    <div class="search-form mg-l-5 mg-r-5">
                        <input type="search" class="form-control" placeholder="Search">
                        <button class="btn" type="button"><i data-feather="search"></i></button>
                    </div>
                    <div class="sort-by mg-l-5 mg-r-5">
                        <select class="custom-select">
                            <option value="" disabled selected>Sắp xếp theo</option>
                            <option value="2">Số tiền</option>
                            <option value="all">Tên khoá từ A-Z</option>
                            <option value="all">Tên khoá từ Z-A</option>
                            <option value="1">Trạng thái</option>
                            <option value="2">Ngày bắt đầu</option>
                            <option value="2">Ngày kết thúc</option>
                        </select>
                    </div>
                    <a href="#filterCollapse" class="btn btn-primary mg-l-5 mg-r-5 mg-sm-r-0 transparent" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="filterCollapse"><i data-feather="filter"></i></a>
                </div>
            </div>
            
        </div>

        <div class="collapse mg-t-10" id="filterCollapse">
            <div class="card">
                <div class="card-body">
                    <div class=" d-flex flex-wrap">
                        <div class="form-group col-md-4 col-6 col-xl-3">
                            <label class="form-control-label">Chi nhánh:</label>
                            <select class="custom-select">
                                <option value="all" selected>Tất cả</option>
                                <option value="1">Yên Lãng</option>
                                <option value="2">Huỳnh Lan Khánh</option>
                                <option value="3">Trần Phú</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-6 col-xl-3">
                        <label class="form-control-label">Lớp học: </label>
                            <select class="custom-select">
                                <option value="all" selected>Tất cả</option>
                                <option value="1">Yên Lãng</option>
                                <option value="2">Huỳnh Lan Khánh</option>
                                <option value="3">Trần Phú</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-md-4 col-6 col-xl-3">
                        <label class="form-control-label">Trạng thái: </label>
                            <select class="custom-select">
                                <option value="all" selected>Tất cả</option>
                                <option value="1">Đang mở</option>
                                <option value="2">Sắp mở</option>
                                <option value="2">Kết thúc</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-6 col-xl-3">
                        <label class="form-control-label">Học vụ quản lý: </label>
                            <select class="custom-select">
                                <option value="all" selected>Tất cả</option>
                                <option value="1">Hoàng Lan</option>
                                <option value="2">Liên Minh</option>
                                <option value="3">Trần Phú</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-6 col-xl-3">
                        <label class="form-control-label">Ngày mở: </label>
                            <input type="text" class="form-control datetimepicker date-only" placeholder="Ngày mở">
                        </div>
                        <div class="form-group col-md-4 col-6 col-xl-3">
                        <label class="form-control-label">Ngày kết thúc: </label>
                            <input type="text" class="form-control datetimepicker date-only" placeholder="Ngày kết thúc">
                        </div>
                        <div class="form-group col-md-4 col-6 col-xl-3">
                        <label class="form-control-label">Giá tiền từ: </label>
                            <input type="text" class="form-control" placeholder="Giá tiền từ">
                        </div>
                        <div class="form-group col-md-4 col-6 col-xl-3">
                        <label class="form-control-label">Giá tiền đến: </label>
                            <input type="text" class="form-control" placeholder="Giá tiền đến">
                        </div>
                        <div class="form-group col-12 mg-b-0">
                            <button type="button" class="btn btn-primary">Lọc kết quả</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-xs d-flex flex-wrap course-list-wrap mg-t-20">
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card pos-relative card-shadow course-item">
                    <div class="course-image">
                        <img src="assets/img/class.jpg" alt="image">
                    </div>
                    <div class="d-flex justify-content-betwween top-info">
                        <div class="teacher-list-icon d-inline-flex flex-wrap">
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                        </div>
                        <div class="marker marker-ribbon marker-primary">308 Trần Phú</div>
                    </div>
                    
                    <div class="card-body pd-t-10">
                        <div class="course-name ">
                            <div class="course-info d-flex justify-content-between align-items-start">
                                <a href="course-detail-schedule.php" class="tx-18">A-IELTS Foundation</a>
                                <span class="d-inline-flex align-items-center txt-color"><i data-feather="user"></i>32</span>
                               
                            </div>
                        </div>
                        <div class="course-info-block d-flex mg-t-5 row">
                            <div class="col-12">
                                <div class="block">
                                    <p><span class="lb">Khai giảng:</span>27/04/2019</p>
                                </div>
                                <div class="block">
                                    <p><span class="lb">Kết thúc:</span>27/04/2019</p>
                                </div>
                                <div class="block">
                                    <p><span class="lb">Trạng thái:</span><span class="tx-warning">Sắp mở</span></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card pos-relative card-shadow course-item">
                    <div class="course-image">
                        <img src="assets/img/class1.jpg" alt="image">
                    </div>
                    <div class="d-flex justify-content-betwween top-info">
                        <div class="teacher-list-icon d-inline-flex flex-wrap">
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                        </div>
                        <div class="marker marker-ribbon marker-primary">308 Huỳnh Lan Khánh</div>
                    </div>
                    
                    <div class="card-body pd-t-10">
                        <div class="course-name ">
                            <div class="course-info d-flex justify-content-between align-items-start">
                                <a href="course-detail-schedule.php" class="tx-18">A-IELTS Master</a>
                                <span class="d-inline-flex align-items-center txt-color"><i data-feather="user"></i>32</span>
                               
                            </div>
                        </div>
                        <div class="course-info-block d-flex mg-t-5 row">
                            <div class="col-12">
                                <div class="block">
                                    <p><span class="lb">Khai giảng:</span>27/04/2019</p>
                                </div>
                                <div class="block">
                                    <p><span class="lb">Kết thúc:</span>27/04/2019</p>
                                </div>
                                <div class="block">
                                    <p><span class="lb">Trạng thái:</span><span class="tx-warning">Sắp mở</span></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card pos-relative card-shadow course-item">
                    <div class="course-image">
                        <img src="assets/img/class.jpg" alt="image">
                    </div>
                    <div class="d-flex justify-content-betwween top-info">
                        <div class="teacher-list-icon d-inline-flex flex-wrap">
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                        </div>
                        <div class="marker marker-ribbon marker-primary">308 Trần Phú</div>
                    </div>
                    
                    <div class="card-body pd-t-10">
                        <div class="course-name ">
                            <div class="course-info d-flex justify-content-between align-items-start">
                                <a href="course-detail-schedule.php" class="tx-18">A-IELTS Foundation</a>
                                <span class="d-inline-flex align-items-center txt-color"><i data-feather="user"></i>32</span>
                               
                            </div>
                        </div>
                        <div class="course-info-block d-flex mg-t-5 row">
                            <div class="col-12">
                                <div class="block">
                                    <p><span class="lb">Khai giảng:</span>27/04/2019</p>
                                </div>
                                <div class="block">
                                    <p><span class="lb">Kết thúc:</span>27/04/2019</p>
                                </div>
                                <div class="block">
                                    <p><span class="lb">Trạng thái:</span><span class="tx-danger">Đã kết thúc</span></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card pos-relative card-shadow course-item">
                    <div class="course-image">
                        <img src="assets/img/class.jpg" alt="image">
                    </div>
                    <div class="d-flex justify-content-betwween top-info">
                        <div class="teacher-list-icon d-inline-flex flex-wrap">
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                        </div>
                        <div class="marker marker-ribbon marker-primary">308 Trần Phú</div>
                    </div>
                    
                    <div class="card-body pd-t-10">
                        <div class="course-name ">
                            <div class="course-info d-flex justify-content-between align-items-start">
                                <a href="course-detail-schedule.php" class="tx-18">A-IELTS Foundation</a>
                                <span class="d-inline-flex align-items-center txt-color"><i data-feather="user"></i>32</span>
                               
                            </div>
                        </div>
                        <div class="course-info-block d-flex mg-t-5 row">
                            <div class="col-12">
                                <div class="block">
                                    <p><span class="lb">Khai giảng:</span>27/04/2019</p>
                                </div>
                                <div class="block">
                                    <p><span class="lb">Kết thúc:</span>27/04/2019</p>
                                </div>
                                <div class="block">
                                    <p><span class="lb">Trạng thái:</span><span class="tx-success">Đang hoạt động</span></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card pos-relative card-shadow course-item">
                    <div class="course-image">
                        <img src="assets/img/class.jpg" alt="image">
                    </div>
                    <div class="d-flex justify-content-betwween top-info">
                        <div class="teacher-list-icon d-inline-flex flex-wrap">
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                        </div>
                        <div class="marker marker-ribbon marker-primary">308 Trần Phú</div>
                    </div>
                    
                    <div class="card-body pd-t-10">
                        <div class="course-name ">
                            <div class="course-info d-flex justify-content-between align-items-start">
                                <a href="course-detail-schedule.php" class="tx-18">A-IELTS Foundation</a>
                                <span class="d-inline-flex align-items-center txt-color"><i data-feather="user"></i>32</span>
                               
                            </div>
                        </div>
                        <div class="course-info-block d-flex mg-t-5 row">
                            <div class="col-12">
                                <div class="block">
                                    <p><span class="lb">Khai giảng:</span>27/04/2019</p>
                                </div>
                                <div class="block">
                                    <p><span class="lb">Kết thúc:</span>27/04/2019</p>
                                </div>
                                <div class="block">
                                    <p><span class="lb">Trạng thái:</span><span class="tx-success">Đang hoạt động</span></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card pos-relative card-shadow course-item">
                    <div class="course-image">
                        <img src="assets/img/class.jpg" alt="image">
                    </div>
                    <div class="d-flex justify-content-betwween top-info">
                        <div class="teacher-list-icon d-inline-flex flex-wrap">
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                        </div>
                        <div class="marker marker-ribbon marker-primary">308 Trần Phú</div>
                    </div>
                    
                    <div class="card-body pd-t-10">
                        <div class="course-name ">
                            <div class="course-info d-flex justify-content-between align-items-start">
                                <a href="course-detail-schedule.php" class="tx-18">A-IELTS Foundation</a>
                                <span class="d-inline-flex align-items-center txt-color"><i data-feather="user"></i>32</span>
                               
                            </div>
                        </div>
                        <div class="course-info-block d-flex mg-t-5 row">
                            <div class="col-12">
                                <div class="block">
                                    <p><span class="lb">Khai giảng:</span>27/04/2019</p>
                                </div>
                                <div class="block">
                                    <p><span class="lb">Kết thúc:</span>27/04/2019</p>
                                </div>
                                <div class="block">
                                    <p><span class="lb">Trạng thái:</span><span class="tx-warning">Sắp mở</span></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card pos-relative card-shadow course-item">
                    <div class="course-image">
                        <img src="assets/img/class.jpg" alt="image">
                    </div>
                    <div class="d-flex justify-content-betwween top-info">
                        <div class="teacher-list-icon d-inline-flex flex-wrap">
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                        </div>
                        <div class="marker marker-ribbon marker-primary">308 Trần Phú</div>
                    </div>
                    
                    <div class="card-body pd-t-10">
                        <div class="course-name ">
                            <div class="course-info d-flex justify-content-between align-items-start">
                                <a href="course-detail-schedule.php" class="tx-18">A-IELTS Foundation</a>
                                <span class="d-inline-flex align-items-center txt-color"><i data-feather="user"></i>32</span>
                               
                            </div>
                        </div>
                        <div class="course-info-block d-flex mg-t-5 row">
                            <div class="col-12">
                                <div class="block">
                                    <p><span class="lb">Khai giảng:</span>27/04/2019</p>
                                </div>
                                <div class="block">
                                    <p><span class="lb">Kết thúc:</span>27/04/2019</p>
                                </div>
                                <div class="block">
                                    <p><span class="lb">Trạng thái:</span><span class="tx-warning">Sắp mở</span></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card pos-relative card-shadow course-item">
                    <div class="course-image">
                        <img src="assets/img/class.jpg" alt="image">
                    </div>
                    <div class="d-flex justify-content-betwween top-info">
                        <div class="teacher-list-icon d-inline-flex flex-wrap">
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                        </div>
                        <div class="marker marker-ribbon marker-primary">308 Trần Phú</div>
                    </div>
                    
                    <div class="card-body pd-t-10">
                        <div class="course-name ">
                            <div class="course-info d-flex justify-content-between align-items-start">
                                <a href="course-detail-schedule.php" class="tx-18">A-IELTS Foundation</a>
                                <span class="d-inline-flex align-items-center txt-color"><i data-feather="user"></i>32</span>
                               
                            </div>
                        </div>
                        <div class="course-info-block d-flex mg-t-5 row">
                            <div class="col-12">
                                <div class="block">
                                    <p><span class="lb">Khai giảng:</span>27/04/2019</p>
                                </div>
                                <div class="block">
                                    <p><span class="lb">Kết thúc:</span>27/04/2019</p>
                                </div>
                                <div class="block">
                                    <p><span class="lb">Trạng thái:</span><span class="tx-warning">Sắp mở</span></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card pos-relative card-shadow course-item">
                    <div class="course-image">
                        <img src="assets/img/class.jpg" alt="image">
                    </div>
                    <div class="d-flex justify-content-betwween top-info">
                        <div class="teacher-list-icon d-inline-flex flex-wrap">
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="avatar mg-x-3">
                                <img src="assets/img/teacher.jpg" alt="" class="rounded-circle">
                            </div>
                        </div>
                        <div class="marker marker-ribbon marker-primary">308 Trần Phú</div>
                    </div>
                    
                    <div class="card-body pd-t-10">
                        <div class="course-name ">
                            <div class="course-info d-flex justify-content-between align-items-start">
                                <a href="course-detail-schedule.php" class="tx-18">A-IELTS Foundation</a>
                                <span class="d-inline-flex align-items-center txt-color"><i data-feather="user"></i>32</span>
                               
                            </div>
                        </div>
                        <div class="course-info-block d-flex mg-t-5 row">
                            <div class="col-12">
                                <div class="block">
                                    <p><span class="lb">Khai giảng:</span>27/04/2019</p>
                                </div>
                                <div class="block">
                                    <p><span class="lb">Kết thúc:</span>27/04/2019</p>
                                </div>
                                <div class="block">
                                    <p><span class="lb">Trạng thái:</span><span class="tx-warning">Sắp mở</span></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <nav aria-label="Page navigation" class="mg-t-10">
            <ul class="pagination mg-b-0 justify-content-end">
                <li class="page-item disabled"><a class="page-link page-link-icon" href="#"><i data-feather="chevron-left"></i></a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link page-link-icon" href="#"><i data-feather="chevron-right"></i></a></li>
            </ul>
        </nav>
    </div><!-- container -->
</div><!-- content -->
<?php require_once( 'footer.php' ); ?>
