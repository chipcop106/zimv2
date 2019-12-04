<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<link href="lib/jqvmap/jqvmap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/dashforge.dashboard.css">
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="d-md-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <h4 class="mg-b-0 tx-spacing--1">Thống kê</h4>
            </div>
            <div class="d-md-block">

                <div class="date-filter d-flex justify-content-center mg-t-20 mg-md-t-0 flex-wrap">
                    <div class="input-group">
                        <select class="custom-select">
                            <option value="" disabled>Chọn chi nhánh</option>
                            <option value="all" selected>Tất cả chi nhánh</option>
                            <option value="1">Yên Lãng</option>
                            <option value="2">Huỳnh Lan Khánh</option>
                            <option value="3">Trần Phú</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="row row-xs">
            <div class="col-sm-6 col-lg-3">
                <div class="card card-body">
                    <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Tỉ lệ chuyển đổi</h6>
                    <div class="d-flex d-lg-block d-xl-flex align-items-end">
                        <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">11.32%</h3>
                        <p class="tx-11 tx-color-03 mg-b-0"><span class="tx-medium tx-success">1.2% <i
                                    class="icon ion-md-arrow-up"></i></span> so tháng trước</p>
                    </div>
                    <div class="chart-three">
                        <div id="flotChart3" class="flot-chart ht-30"></div>
                    </div><!-- chart-three -->
                </div>
            </div><!-- col -->
            <div class="col-sm-6 col-lg-3 mg-t-10 mg-sm-t-0">
                <div class="card card-body">
                    <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Học viên mới</h6>
                    <div class="d-flex d-lg-block d-xl-flex align-items-end">
                        <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">3,137</h3>
                        <p class="tx-11 tx-color-03 mg-b-0"><span class="tx-medium tx-danger">0.7% <i
                                    class="icon ion-md-arrow-down"></i></span> so tháng trước</p>
                    </div>
                    <div class="chart-three">
                        <div id="flotChart4" class="flot-chart ht-30"></div>
                    </div><!-- chart-three -->
                </div>
            </div><!-- col -->
            <div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
                <div class="card card-body">
                    <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Lớp học</h6>
                    <div class="d-flex d-lg-block d-xl-flex align-items-end">
                        <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">1,234</h3>
                        <p class="tx-11 tx-color-03 mg-b-0"><span class="tx-medium tx-danger">0.3% <i
                                    class="icon ion-md-arrow-down"></i></span> so tháng trước</p>
                    </div>
                    <div class="chart-three">
                        <div id="flotChart5" class="flot-chart ht-30"></div>
                    </div><!-- chart-three -->
                </div>
            </div><!-- col -->
            <div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
                <div class="card card-body">
                    <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Ca học</h6>
                    <div class="d-flex d-lg-block d-xl-flex align-items-end">
                        <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">1,650</h3>
                        <p class="tx-11 tx-color-03 mg-b-0"><span class="tx-medium tx-success">2.1% <i
                                    class="icon ion-md-arrow-up"></i></span> so tháng trước</p>
                    </div>
                    <div class="chart-three">
                        <div id="flotChart6" class="flot-chart ht-30"></div>
                    </div><!-- chart-three -->
                </div>
            </div><!-- col -->
            <div class="col-lg-8 col-xl-7 mg-t-10">
                <div class="card">
                    <div class="card-header pd-y-20 d-md-flex align-items-center justify-content-between">
                        <h6 class="mg-b-0">Doanh thu</h6>
                        <ul class="list-inline d-flex mg-t-20 mg-sm-t-10 mg-md-t-0 mg-b-0">
                            <li class="list-inline-item d-flex align-items-center filter-time active" data-time="week">
                                <span class="d-block wd-10 ht-10 bg-df-3 rounded mg-r-5"></span>
                                <span class="tx-sans tx-uppercase tx-12 tx-medium tx-color-03">Tuần</span>
                            </li>
                            <li class="list-inline-item d-flex align-items-center mg-l-5 filter-time" data-time="month">
                                <span class="d-block wd-10 ht-10 bg-df-3 rounded mg-r-5"></span>
                                <span class="tx-sans tx-uppercase tx-12 tx-medium tx-color-03">Tháng</span>
                            </li>
                            <li class="list-inline-item d-flex align-items-center mg-l-5 filter-time" data-time="year">
                                <span class="d-block wd-10 ht-10 bg-df-3 rounded mg-r-5"></span>
                                <span class="tx-sans tx-uppercase tx-12 tx-medium tx-color-03">Năm</span>
                            </li>
                        </ul>
                    </div><!-- card-header -->
                    <div class="card-body pos-relative pd-0">
                        <div class="pos-static pd-t-20 pd-l-20 pd-b-20 wd-xl-100p z-index-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="tx-normal tx-rubik tx-spacing--2 mg-b-5 chart-revenue-total">
                                        114,000,000,000 VNĐ </h3>
                                    <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-04 tx-semibold mg-b-10">Tổng
                                        doanh thu</h6>
                                </div><!-- col -->
                                <div class="col-sm-6">
                                    <h3 class="tx-normal tx-rubik tx-spacing--2 mg-b-5"><span
                                            class="tx-medium tx-success">15% <i class="icon ion-md-arrow-up"></i></span>
                                    </h3>
                                    <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-04 tx-semibold mg-b-10">Tăng
                                        trưởng</h6>
                                </div><!-- col -->
                            </div><!-- row -->
                        </div>

                        <div class="revenue-chart pd-r-20 pd-l-20 pd-b-20 ">
                            <canvas id="revenueChart" class="" height="230"></canvas>
                        </div><!-- chart-one -->
                    </div><!-- card-body -->
                </div><!-- card -->
            </div>
            <div class="col-lg-4 col-xl-5 mg-t-10">
                <div class="card">
                    <div class="card-header pd-t-10 pd-b-10 ">
                        <h6 class="mg-b-5">Học viên</h6>
                        <p class="tx-12 tx-color-03 mg-b-0">Số lượng học viên</p>
                    </div><!-- card-header -->
                    <div class="card-body pd-20">
                        <div class="chart-two mg-b-20">
                            <canvas id="flotChart2" class="flot-chart"></canvas>
                        </div><!-- chart-two -->
                        <div class="row">
                            <div class="col-sm">
                                <h4 class="tx-normal tx-rubik tx-spacing--1 mg-b-5">2,000</h4>
                                <p class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-10 tx-primary">Đăng ký</p>
                                <div class="tx-12 tx-color-03">Học viên đã đăng ký</div>
                            </div><!-- col -->
                            <div class="col-sm mg-t-20 mg-sm-t-0">
                                <h4 class="tx-normal tx-rubik tx-spacing--1 mg-b-5">1,520</h4>
                                <p class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-10 tx-teal">Đang theo học</p>
                                <div class="tx-12 tx-color-03">Học viên đang theo học.</div>
                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- card-body -->
                </div><!-- card -->
            </div>
            <div class="col-12 col-md-12 col-xl-4">

                <div class="card card-body mg-t-10">
                    <div class="media d-block d-sm-flex align-items-center">
                        <div class="d-inline-block pos-relative">
                            <span class="peity-donut"
                                data-peity='{ "fill": ["#65e0e0","#e5e9f2"], "height": 110, "width": 110, "innerRadius": 46 }'>70,30</span>

                            <div class="pos-absolute a-0 d-flex flex-column align-items-center justify-content-center">
                                <h3 class="tx-rubik tx-spacing--1 mg-b-0">86%</h3>
                                <span class="tx-9 tx-semibold tx-sans tx-color-03 tx-uppercase">Tiếp tục</span>
                            </div>
                        </div>
                        <div class="media-body mg-t-20 mg-sm-t-0 mg-sm-l-20">
                            <h6 class="mg-b-5">Học viên tiếp tục</h6>
                            <p class="lh-4 tx-12 tx-color-03 mg-b-15">Tỉ lệ học viên học từ 2 khoá ở trung tâm.</p>
                            <h3 class="tx-spacing--1 mg-b-0">86 <small class="tx-13 tx-color-03">/ 100 Học viên</small>
                            </h3>
                        </div><!-- media-body -->
                    </div><!-- media -->
                </div>
                <div class="card card-body mg-t-10">
                    <div class="media d-block d-sm-flex align-items-center">
                        <div class="d-inline-block pos-relative">
                            <span class="peity-donut"
                                data-peity='{ "fill": ["#69b2f8","#e5e9f2"], "height": 110, "width": 110, "innerRadius": 46 }'>69,31</span>

                            <div class="pos-absolute a-0 d-flex flex-column align-items-center justify-content-center">
                                <h3 class="tx-rubik tx-spacing--1 mg-b-0">69%</h3>
                                <span class="tx-9 tx-semibold tx-sans tx-color-03 tx-uppercase">Hoàn thành</span>
                            </div>
                        </div>
                        <div class="media-body mg-t-20 mg-sm-t-0 mg-sm-l-20">
                            <h6 class="mg-b-5">Hoàn thành khoá học</h6>
                            <p class="lh-4 tx-12 tx-color-03 mg-b-15">Tỉ lệ học viên hoàn thành khoá học.</p>
                            <h3 class="tx-spacing--1 mg-b-0">69 <small class="tx-13 tx-color-03">/ 100 Học viên</small>
                            </h3>
                        </div><!-- media-body -->
                    </div><!-- media -->
                </div>
                <div class="card mg-t-10">
                    <div class="card-header pd-t-10 pd-b-10">
                        <h6 class="lh-5 mg-b-5">Đánh giá</h6>
                        <p class="tx-12 tx-color-03 mg-b-0">Thống kê đánh giá các bài chấm của học viên.</p>
                    </div><!-- card-header -->
                    <div class="card-body pd-0">
                        <div class="pd-t-10 pd-b-15 pd-x-20 d-flex align-items-baseline">
                            <h1 class="tx-normal tx-rubik mg-b-0 mg-r-5">4.2</h1>
                            <div class="tx-18">
                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                            </div>
                        </div>
                        <div class="list-group list-group-flush tx-13">
                            <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center">
                                <strong class="tx-12 tx-rubik">5.0</strong>
                                <div class="tx-16 mg-l-10">
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                </div>
                                <div class="mg-l-auto tx-rubik tx-color-02">4,230</div>
                                <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">58%</div>
                            </div>
                            <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center">
                                <strong class="tx-12 tx-rubik">4.0</strong>
                                <div class="tx-16 mg-l-10">
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                </div>
                                <div class="mg-l-auto tx-rubik tx-color-02">1,416</div>
                                <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">24%</div>
                            </div>
                            <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center">
                                <strong class="tx-12 tx-rubik">3.0</strong>
                                <div class="tx-16 mg-l-10">
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                </div>
                                <div class="mg-l-auto tx-rubik tx-color-02">980</div>
                                <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">16%</div>
                            </div>
                            <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center">
                                <strong class="tx-12 tx-rubik">2.0</strong>
                                <div class="tx-16 mg-l-10">
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                </div>
                                <div class="mg-l-auto tx-rubik tx-color-02">401</div>
                                <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">8%</div>
                            </div>
                            <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center bg-transparent">
                                <strong class="tx-12 tx-rubik">1.0</strong>
                                <div class="tx-16 mg-l-10">
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                </div>
                                <div class="mg-l-auto tx-rubik tx-color-02">798</div>
                                <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">12%</div>
                            </div>
                        </div><!-- list-group -->
                    </div><!-- card-body -->
                </div><!-- card -->


                <div class="card mg-t-10 rate-block">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h6 class="mg-b-0">Đánh giá gần đây</h6>

                    </div>
                    <ul class="list-group list-group-flush tx-13">
                        <li class="list-group-item d-flex pd-sm-x-20">
                            <div class="avatar d-none d-sm-block icon-rate"><span
                                    class="avatar-initial rounded-circle bg-teal"><i
                                        class="icon ion-md-checkmark"></i></span></div>
                            <div class="pd-sm-l-10 left-rate">
                                <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài chấm
                                        #3232323</a></p>
                                <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                            </div>
                            <div class="mg-l-auto text-right right-rate">
                                <p class="tx-medium mg-b-0">1.0</p>
                                <small class="tx-12 tx-danger mg-b-0">Very Bad</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex pd-sm-x-20">
                            <div class="avatar d-none d-sm-block icon-rate"><span
                                    class="avatar-initial rounded-circle bg-teal"><i
                                        class="icon ion-md-checkmark"></i></span></div>
                            <div class="pd-sm-l-10 left-rate">
                                <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài chấm
                                        #3232323</a></p>
                                <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                            </div>
                            <div class="mg-l-auto text-right right-rate">
                                <p class="tx-medium mg-b-0">2.0</p>
                                <small class="tx-12 tx-pink mg-b-0">Bad</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex pd-sm-x-20">
                            <div class="avatar d-none d-sm-block icon-rate"><span
                                    class="avatar-initial rounded-circle bg-teal"><i
                                        class="icon ion-md-checkmark"></i></span></div>
                            <div class="pd-sm-l-10 left-rate">
                                <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài chấm
                                        #3232323</a></p>
                                <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                            </div>
                            <div class="mg-l-auto text-right right-rate">
                                <p class="tx-medium mg-b-0">3.0</p>
                                <small class="tx-12 tx-warning mg-b-0">Normal</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex pd-sm-x-20">
                            <div class="avatar d-none d-sm-block icon-rate"><span
                                    class="avatar-initial rounded-circle bg-teal"><i
                                        class="icon ion-md-checkmark"></i></span></div>
                            <div class="pd-sm-l-10 left-rate">
                                <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài chấm [Search by
                                        username, full name or email address]</a></p>
                                <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                            </div>
                            <div class="mg-l-auto text-right right-rate">
                                <p class="tx-medium mg-b-0">4.0</p>
                                <small class="tx-12 tx-success mg-b-0">Good</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex pd-sm-x-20">
                            <div class="avatar d-none d-sm-block icon-rate"><span
                                    class="avatar-initial rounded-circle bg-teal"><i
                                        class="icon ion-md-checkmark"></i></span></div>
                            <div class="pd-sm-l-10 left-rate">
                                <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài chấm
                                        #3232323</a></p>
                                <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                            </div>
                            <div class="mg-l-auto text-right right-rate">
                                <p class="tx-medium mg-b-0">5.0</p>
                                <small class="tx-12 tx-success mg-b-0">Excellent</small>
                            </div>
                        </li>


                    </ul>
                    <div class="card-footer text-center tx-13">
                        <a href="" class="link-03">Xem thêm <i class="icon ion-md-arrow-down mg-l-5"></i></a>
                    </div><!-- card-footer -->
                </div><!-- card -->
                <div class="card mg-t-10">
                    <div class="card-header pd-t-10 pd-b-10">
                        <h6 class="lh-5 mg-b-5">Đánh giá TVV</h6>
                        <p class="tx-12 tx-color-03 mg-b-0">Thống kê đánh giá TVV của học viên.</p>
                    </div><!-- card-header -->
                    <div class="card-body pd-0">
                        <div class="pd-t-10 pd-b-15 pd-x-20 d-flex align-items-baseline">
                            <h1 class="tx-normal tx-rubik mg-b-0 mg-r-5">4.2</h1>
                            <div class="tx-18">
                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                            </div>
                        </div>
                        <div class="list-group list-group-flush tx-13">
                            <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center">
                                <strong class="tx-12 tx-rubik">5.0</strong>
                                <div class="tx-16 mg-l-10">
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                </div>
                                <div class="mg-l-auto tx-rubik tx-color-02">4,230</div>
                                <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">58%</div>
                            </div>
                            <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center">
                                <strong class="tx-12 tx-rubik">4.0</strong>
                                <div class="tx-16 mg-l-10">
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                </div>
                                <div class="mg-l-auto tx-rubik tx-color-02">1,416</div>
                                <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">24%</div>
                            </div>
                            <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center">
                                <strong class="tx-12 tx-rubik">3.0</strong>
                                <div class="tx-16 mg-l-10">
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                </div>
                                <div class="mg-l-auto tx-rubik tx-color-02">980</div>
                                <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">16%</div>
                            </div>
                            <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center">
                                <strong class="tx-12 tx-rubik">2.0</strong>
                                <div class="tx-16 mg-l-10">
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                </div>
                                <div class="mg-l-auto tx-rubik tx-color-02">401</div>
                                <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">8%</div>
                            </div>
                            <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center bg-transparent">
                                <strong class="tx-12 tx-rubik">1.0</strong>
                                <div class="tx-16 mg-l-10">
                                    <i class="icon ion-md-star lh-0 tx-orange"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                    <i class="icon ion-md-star lh-0 tx-gray-300"></i>
                                </div>
                                <div class="mg-l-auto tx-rubik tx-color-02">798</div>
                                <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">12%</div>
                            </div>
                        </div><!-- list-group -->
                    </div><!-- card-body -->
                </div><!-- card -->


                <div class="card mg-t-10 rate-block">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h6 class="mg-b-0">Đánh giá TVV gần đây</h6>

                    </div>
                    <ul class="list-group list-group-flush tx-13">
                        <li class="list-group-item d-flex pd-sm-x-20">
                            <div class="avatar d-none d-sm-block icon-rate"><span
                                    class="avatar-initial rounded-circle bg-teal"><i
                                        class="icon ion-md-checkmark"></i></span></div>
                            <div class="pd-sm-l-10 left-rate">
                                <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài chấm
                                        #3232323</a></p>
                                <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                            </div>
                            <div class="mg-l-auto text-right right-rate">
                                <p class="tx-medium mg-b-0">1.0</p>
                                <small class="tx-12 tx-danger mg-b-0">Very Bad</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex pd-sm-x-20">
                            <div class="avatar d-none d-sm-block icon-rate"><span
                                    class="avatar-initial rounded-circle bg-teal"><i
                                        class="icon ion-md-checkmark"></i></span></div>
                            <div class="pd-sm-l-10 left-rate">
                                <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài chấm
                                        #3232323</a></p>
                                <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                            </div>
                            <div class="mg-l-auto text-right right-rate">
                                <p class="tx-medium mg-b-0">2.0</p>
                                <small class="tx-12 tx-pink mg-b-0">Bad</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex pd-sm-x-20">
                            <div class="avatar d-none d-sm-block icon-rate"><span
                                    class="avatar-initial rounded-circle bg-teal"><i
                                        class="icon ion-md-checkmark"></i></span></div>
                            <div class="pd-sm-l-10 left-rate">
                                <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài chấm
                                        #3232323</a></p>
                                <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                            </div>
                            <div class="mg-l-auto text-right right-rate">
                                <p class="tx-medium mg-b-0">3.0</p>
                                <small class="tx-12 tx-warning mg-b-0">Normal</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex pd-sm-x-20">
                            <div class="avatar d-none d-sm-block icon-rate"><span
                                    class="avatar-initial rounded-circle bg-teal"><i
                                        class="icon ion-md-checkmark"></i></span></div>
                            <div class="pd-sm-l-10 left-rate">
                                <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài chấm [Search by
                                        username, full name or email address]</a></p>
                                <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                            </div>
                            <div class="mg-l-auto text-right right-rate">
                                <p class="tx-medium mg-b-0">4.0</p>
                                <small class="tx-12 tx-success mg-b-0">Good</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex pd-sm-x-20">
                            <div class="avatar d-none d-sm-block icon-rate"><span
                                    class="avatar-initial rounded-circle bg-teal"><i
                                        class="icon ion-md-checkmark"></i></span></div>
                            <div class="pd-sm-l-10 left-rate">
                                <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài chấm
                                        #3232323</a></p>
                                <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                            </div>
                            <div class="mg-l-auto text-right right-rate">
                                <p class="tx-medium mg-b-0">5.0</p>
                                <small class="tx-12 tx-success mg-b-0">Excellent</small>
                            </div>
                        </li>


                    </ul>
                    <div class="card-footer text-center tx-13">
                        <a href="" class="link-03">Xem thêm <i class="icon ion-md-arrow-down mg-l-5"></i></a>
                    </div><!-- card-footer -->
                </div><!-- card -->
            </div>
            <div class="col-12 col-md-12 col-xl-8 d-flex flex-wrap">
                <div class="card col-12 mg-t-10 pd-0">
                    <div class="card-header pd-t-20 pd-b-20 d-lg-flex align-items-center justify-content-between">
                        <div class="d-md-flex mg-t-20 mg-sm-t-0 mg-lg-t-0 mg-sm-t-20">
                            <div class="btn-group pd-md-r-15 mg-b-15 mg-md-b-0 d-flex">
                                <button class="btn btn-white btn-xs active">Tuần</button>
                                <button class="btn btn-white btn-xs">Tháng</button>
                                <button class="btn btn-white btn-xs ">Quý</button>
                                <button class="btn btn-white btn-xs">Năm</button>
                            </div>
                            <div class="date-filter d-flex flex-wrap justify-content-center">
                                <div class="input-group col-sm-5 col-6">
                                    <input type="text" class="form-control datetimepicker date-only"
                                        placeholder="Từ ngày">
                                </div>
                                <div class="input-group col-sm-5 col-6">
                                    <input type="text" class="form-control datetimepicker date-only"
                                        placeholder="Đến ngày">
                                </div>
                                <div class="input-group col-sm-2 col-12 mg-t-15 mg-sm-t-0">
                                    <button type="button" class="btn btn-primary btn-block">Lọc</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- card-header -->

                    <div class="card-body d-flex">
                        <div class="col-md-12 pd-0 pd-md-r-10">
                            <div class="table-ranking-teacher">
                                <div class="table-responsive tableFixHead">
                                    <table class="table ranking ">
                                        <thead>
                                            <tr>
                                                <th colspan="2">BXH Giáo viên</th>
                                                <th>Z-point</th>
                                                <th>Level 1</th>
                                                <th>Level 2</th>
                                                <th>Level 3</th>
                                                <th>Level 4</th>
                                                <th>Level 5</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="assets/img/1st.png"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="assets/img/2nd.png"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="assets/img/3rd.png"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="table-ranking-teacher mg-t-20">
                                <div class="table-responsive tableFixHead">
                                    <table class="table ranking ">
                                        <thead>
                                            <tr>
                                                <th colspan="2">BXH Tư vấn viên</th>
                                                <th>Z-point</th>
                                                <th>Level 1</th>
                                                <th>Level 2</th>
                                                <th>Level 3</th>
                                                <th>Level 4</th>
                                                <th>Level 5</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="assets/img/1st.png"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="assets/img/2nd.png"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="assets/img/3rd.png"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="table-ranking-teacher mg-t-20">
                                <div class="table-responsive tableFixHead">
                                    <table class="table ranking ">
                                        <thead>
                                            <tr>
                                                <th colspan="2">BXH Thời gian dạy</th>
                                                <th>Giờ dạy</th>
                                                <th>Tổng giờ</th>
                                                <th>Ngày vào làm</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="assets/img/1st.png"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="assets/img/2nd.png"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>

                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="assets/img/3rd.png"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>

                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar"><img src="https://via.placeholder.com/600"
                                                            class="rounded-circle" alt=""></div>
                                                </td>
                                                <td>
                                                    <div class="media-body">
                                                        <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                        <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get Ready</p>
                                                        <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-16">
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 tx-orange"></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                                <i class="icon ion-md-star lh-0 "></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- media-body -->
                                                </td>
                                                <td>30</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- card -->

            </div>

            <div class="col-lg-12 col-xl-12 mg-t-10">
                <div class="card mg-b-10">
                    <div class="card-header pd-t-20 pd-b-20 d-md-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="mg-b-5">Danh sách saler</h6>
                            <p class="tx-13 tx-color-03 mg-b-0">Thông tin saler, doanh thu theo chiến dịch</p>
                        </div>
                        <div class="d-md-flex mg-t-20 mg-md-t-0 flex-grow-1 justify-content-end">
                          
                            <div class="d-flex flex-wrap justify-content-end">
                                
                                <div class=" search-saler flex-grow-1">
                                    <input type="text"  class="form-control" id="search-saler"
                                        placeholder="Tìm kiếm saler...">
                                        <a href="javascript:;" class="search-saler-btn"><i data-feather="search"></i></a>
                                        
                                </div>
                              
                            </div>
                        </div>
                    </div>

                    <div class="chart-on-table card-body ">
                        <div class="table-responsive">
                            <table class="table table-collapse table-chart" id="sale-viewer">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Họ tên</th>
                                        <th>Tổng doanh thu</th>
                                        <th>Số hoá đơn</th>
                                        <th>Số khách hàng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="row-info" data-id="1">
                                        <td class="collapse-col">
                                            <a href="javascript:;" class="toggle-collapse"><i
                                                    class="fa fa-plus-square" aria-hidden="true"></i></a>
                                        </td>
                                        <td>Khổng Tú Quỳnh</td>
                                        <td>30,000,000</td>
                                        <td>32</td>
                                        <td>38</td>
                                    </tr>
                                    <tr class="collapse-row">
                                        <td colspan="5">
                                            <div class="content-table">
                                                <div class="chart-type">
                                                    <div class="select-type">
                                                        
                                                       
                                                        <div
                                                            class=" d-flex flex-wrap justify-content-center">
                                                            <div class="input-group col-sm-5 col-6">
                                                                <input type="text"
                                                                    class="form-control datetimepicker date-only"
                                                                    placeholder="Từ ngày">
                                                            </div>
                                                            <div class="input-group col-sm-5 col-6">
                                                                <input type="text"
                                                                    class="form-control datetimepicker date-only"
                                                                    placeholder="Đến ngày">
                                                            </div>
                                                            <div class="input-group col-sm-2 col-12 mg-t-15 mg-sm-t-0">
                                                                <button type="button"
                                                                    class="btn btn-primary  view-chart">Xem</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chart-wrap">
                                                    <canvas class="chart-element" id="chart-id-1"
                                                        data-chart-id="1"></canvas>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr class="row-info" data-id="2">
                                        <td class="collapse-col">
                                            <a href="javascript:;" class="toggle-collapse"><i class="fa fa-plus-square"
                                                    aria-hidden="true"></i></a>
                                        </td>
                                        <td>Trương Văn Nam</td>
                                        <td>30,000,000</td>
                                        <td>32</td>
                                        <td>38</td>
                                    </tr>
                                    <tr class="collapse-row">
                                        <td colspan="5">
                                            <div class="content-table">
                                                <div class="chart-type">
                                                    <div class="select-type">
                                                        
                                                        <div
                                                            class="d-flex flex-wrap justify-content-center">
                                                            <div class="input-group col-sm-5 col-6">
                                                                <input type="text"
                                                                    class="form-control datetimepicker date-only"
                                                                    placeholder="Từ ngày">
                                                            </div>
                                                            <div class="input-group col-sm-5 col-6">
                                                                <input type="text"
                                                                    class="form-control datetimepicker date-only"
                                                                    placeholder="Đến ngày">
                                                            </div>
                                                            <div class="input-group col-sm-2 col-12 mg-t-15 mg-sm-t-0">
                                                                <button type="button"
                                                                    class="btn btn-primary  view-chart">Xem</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chart-wrap">
                                                    <canvas class="chart-element" id="chart-id-2"
                                                        data-chart-id="2"></canvas>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr class="row-info" data-id="3">
                                        <td class="collapse-col">
                                            <a href="javascript:;" class="toggle-collapse"><i class="fa fa-plus-square"
                                                    aria-hidden="true"></i></a>
                                        </td>
                                        <td>Hoàng Thức</td>
                                        <td>30,000,000</td>
                                        <td>32</td>
                                        <td>38</td>
                                    </tr>
                                    <tr class="collapse-row">
                                        <td colspan="5">
                                            <div class="content-table">
                                                <div class="chart-type">
                                                    <div class="select-type">
                                                        
                                                        <div
                                                            class=" d-flex flex-wrap justify-content-center">
                                                            <div class="input-group col-sm-5 col-6">
                                                                <input type="text"
                                                                    class="form-control datetimepicker date-only"
                                                                    placeholder="Từ ngày">
                                                            </div>
                                                            <div class="input-group col-sm-5 col-6">
                                                                <input type="text"
                                                                    class="form-control datetimepicker date-only"
                                                                    placeholder="Đến ngày">
                                                            </div>
                                                            <div class="input-group col-sm-2 col-12 mg-t-15 mg-sm-t-0">
                                                                <button type="button"
                                                                    class="btn btn-primary  view-chart">Xem</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chart-wrap">
                                                    <canvas class="chart-element" id="chart-id-3"
                                                        data-chart-id="3"></canvas>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- content -->
<?php require_once( 'footer.php' ); ?>
<script src="lib/jquery.flot/jquery.flot.js"></script>
<script src="lib/jquery.flot/jquery.flot.stack.js"></script>
<script src="lib/jquery.flot/jquery.flot.resize.js"></script>
<script src="lib/chart.js/Chart.bundle.min.js"></script>
<script src="lib/peity/jquery.peity.min.js"></script>
<script src="lib/jqvmap/jquery.vmap.min.js"></script>
<script src="lib/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="assets/js/dashforge.sampledata.js"></script>

<script>
/*
 * Card Advanced - Card
 */
// Màu cơ sở
var color = {
    'thaiha': '#D84315',
    'yenlang': '#FFC107',
    'vooanh': '#4CAF50',
    'huynhlankhanh': '#2196F3',
    'tranphu': '#E91E63'
}

function getDaysInMonth(month, year) {
    var date = new Date(Date.UTC(year, month, 1));
    var days = [];
    while (date.getMonth() === month) {
        var d = new Date(date);
        days.push(d.getDate() + '/' + d.getMonth());
        date.setDate(date.getDate() + 1);
    }
    return days;
}
// Chart.defaults.global.defaultFontFamily = 'Roboto';
var filterTime = document.querySelectorAll('.filter-time');
var totalRevenue = document.getElementsByClassName('chart-revenue-total');

//Trending line chart
var revenueLineChartCTX = $("#revenueChart");
var revenueLineChart;


var weekRevenueDataset = [{
    label: "Doanh thu",
    data: [8733293, 9336293, 8557310, 8752592, 2135633, 7471178, 6961955],
    backgroundColor: 'rgb(105,178,248,.25)',
    borderColor: 'rgb(105,178,248,.8)',
    fill: true,
    lineTension: 0.1,
    pointHoverBorderColor: 'rgb(105,178,248,1)',
    pointBackgroundColor: '#fff',
    pointBorderColor: '#0168fa'
}];

//var monthRevenueDataset = @Html.Raw(ViewBag.datamonth);

var monthRevenueDataset = [{
    label: "Doanh thu",
    data: [4023712, 7002037, 6720802, 7355786, 6788766, 7169305, 2665626, 5536176, 6901654, 2328586, 5284641,
        6214662, 7657952, 8451341, 7504499, 4373241, 7659185, 2994734, 5521773, 5696381, 9508417, 6094465,
        8483373, 6567850, 2326744, 2470435, 8346597, 4783175, 4512745, 3376172, 5674121
    ],
    backgroundColor: 'rgb(105,178,248,.25)',
    borderColor: 'rgb(105,178,248,.8)',
    fill: true,
    lineTension: 0.1,
    pointHoverBorderColor: 'rgb(105,178,248,1)',
    pointBackgroundColor: '#fff',
    pointBorderColor: '#0168fa'
}];

// var yearRevenueDataset =@Html.Raw(ViewBag.datayear);
var yearRevenueDataset = [{
    label: "Doanh thu",
    data: [2000000000, 3500000000, 277000000, 7100000000, 2000000000, 3500000000, 2770000000, 7100000000,
        2000000000, 3500000000, 2770000000, 710000000
    ],
    backgroundColor: 'rgb(105,178,248,.25)',
    borderColor: 'rgb(105,178,248,.8)',
    fill: true,
    lineTension: 0.1,
    pointHoverBorderColor: 'rgb(105,178,248,1)',
    pointBackgroundColor: '#fff',
    pointBorderColor: '#0168fa'
}, ]

var revenueLineChartOptions = {

    responsive: true,
    maintainAspectRatio: false,
    layout: {
        padding: {
            top: 10,
            right: 10,

        }
    },
    legend: {
        display: false,
        labels: {
            fontColor: '#fff',
            padding: 20

        },
        // onClick: function (e, legendItem) {
        //     //   console.log(legendItem);
        //     var index = legendItem.datasetIndex;
        //     var ci = this.chart;
        //     var alreadyHidden = (ci.getDatasetMeta(index).hidden === null) ? false : ci.getDatasetMeta(index).hidden;

        //     totalRevenue[0].innerText = updateTotalRevenue(ci.data.datasets[index].data);
        //     ci.data.datasets.forEach(function (e, i) {
        //         var meta = ci.getDatasetMeta(i);

        //         if (i !== index) {
        //             if (!alreadyHidden) {
        //                 meta.hidden = meta.hidden === null ? !meta.hidden : null;


        //             } else if (meta.hidden === null) {
        //                 meta.hidden = true;

        //             }
        //         } else if (i === index) {

        //             meta.hidden = null;

        //         }
        //     });

        //     ci.update();
        // }

    },
    hover: {
        mode: "label"
    },
    scales: {
        xAxes: [{
            beginAtZero: true,
            display: true,

            gridLines: {
                display: false
            },
            ticks: {
                beginAtZero: true,
                fontColor: "#000",
            }
        }],
        yAxes: [{
            display: true,
            beginAtZero: true,
            fontColor: "#000",
            gridLines: {
                display: true,
                color: "#fff"
            },
            ticks: {
                beginAtZero: true,
                fontColor: "#000",
                callback: function(value, index, values) {
                    if (parseInt(value) >= 1000000 && parseInt(value) < 1000000000) {
                        return (value / 1000000).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") +
                            ' Triệu';
                    } else if ((parseInt(value) >= 1000000000)) {
                        return (value / 1000000000).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") +
                            ' Tỉ';
                    }
                    return value;
                }
            }
        }]
    },
    tooltips: {
        titleFontSize: 0,
        mode: 'index',
        intersect: false,
        callbacks: {
            label: function(tooltipItem, data) {
                if (parseInt(tooltipItem.yLabel) >= 1000) {
                    return tooltipItem.xLabel + ': ' + tooltipItem.yLabel.toString().replace(
                        /\B(?=(\d{3})+(?!\d))/g, ",") + ' VNĐ';
                } else {
                    return tooltipItem.xLabel + ': ' + tooltipItem.yLabel + ' VNĐ';
                }

            }
        }
    }
};

var revenueLineChartData = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: yearRevenueDataset
};
var revenueLineChartConfig = {
    type: "line",
    options: revenueLineChartOptions,
    data: revenueLineChartData
};
//     //Update total Revenue from data[0]  -- Month and year
//     function updateTotalRevenue(data) {
//         const reducer = (accumulator, currentValue) => accumulator + currentValue;
//         var totalData = data.reduce(reducer).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
//         return totalData + ' VNĐ';
//     };

function updateTotalRevenueAll(listData) {
    var total = 0;
    // console.log(listData);
    listData.forEach(dataset => {
        // console.log(data);
        var reducer = (acc, cur) => acc + cur;
        var totalData = dataset.data.reduce(reducer);
        total += totalData;
    });
    return total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' VNĐ';
}

//Update dataset by toggle checkbox
function changeDataset(time) {
    //   console.log(revenueLineChart.options.legend);
    switch (time) {
        case 'week': {
            revenueLineChartData.datasets = weekRevenueDataset;
            revenueLineChartData.labels = ["Mon", "Tue", "Wed", "Thus", "Pri", "Sat", "Sun"];
            revenueLineChart.update();
            break;
        }
        case 'month': {
            revenueLineChartData.datasets = monthRevenueDataset;
            revenueLineChartData.labels = getDaysInMonth((new Date()).getMonth() + 1, (new Date()).getFullYear());
            revenueLineChart.update();
            break;
        }
        case 'year': {
            revenueLineChartData.datasets = yearRevenueDataset;
            revenueLineChartData.labels = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                "Dec"
            ];
            revenueLineChart.update();
            break;
        }
    }
    //    console.log(revenueLineChartData.datasets);
    totalRevenue[0].innerText = updateTotalRevenueAll(revenueLineChartData.datasets);
}





/* Student Bar chart */

var studentChart = document.getElementById('flotChart2').getContext('2d');
new Chart(studentChart, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            data: [150, 110, 90, 115, 125, 160, 160, 140, 100, 110, 120, 120],
            backgroundColor: '#66a4fb'
        }, {
            data: [180, 140, 120, 135, 155, 170, 180, 150, 140, 150, 130, 130],
            backgroundColor: '#65e0e0'
        }]
    },
    options: {
        maintainAspectRatio: false,
        legend: {
            display: false,
            labels: {
                display: false
            }
        },
        scales: {
            xAxes: [{
                display: false,
                barPercentage: 0.5
            }],
            yAxes: [{
                gridLines: {
                    color: '#ebeef3'
                },
                ticks: {
                    fontColor: '#8392a5',
                    fontSize: 10,
                    min: 80,
                    max: 200
                }
            }]
        }
    }
});
$.plot('#flotChart3', [{
    data: df4,
    color: '#9db2c6'
}], {
    series: {
        shadowSize: 0,
        lines: {
            show: true,
            lineWidth: 2,
            fill: true,
            fillColor: {
                colors: [{
                    opacity: 0
                }, {
                    opacity: .5
                }]
            }
        }
    },
    grid: {
        borderWidth: 0,
        labelMargin: 0
    },
    yaxis: {
        show: false,
        min: 0,
        max: 60
    },
    xaxis: {
        show: false
    }
});

$.plot('#flotChart4', [{
    data: df5,
    color: '#9db2c6'
}], {
    series: {
        shadowSize: 0,
        lines: {
            show: true,
            lineWidth: 2,
            fill: true,
            fillColor: {
                colors: [{
                    opacity: 0
                }, {
                    opacity: .5
                }]
            }
        }
    },
    grid: {
        borderWidth: 0,
        labelMargin: 0
    },
    yaxis: {
        show: false,
        min: 0,
        max: 80
    },
    xaxis: {
        show: false
    }
});

$.plot('#flotChart5', [{
    data: df6,
    color: '#9db2c6'
}], {
    series: {
        shadowSize: 0,
        lines: {
            show: true,
            lineWidth: 2,
            fill: true,
            fillColor: {
                colors: [{
                    opacity: 0
                }, {
                    opacity: .5
                }]
            }
        }
    },
    grid: {
        borderWidth: 0,
        labelMargin: 0
    },
    yaxis: {
        show: false,
        min: 0,
        max: 80
    },
    xaxis: {
        show: false
    }
});

$.plot('#flotChart6', [{
    data: df4,
    color: '#9db2c6'
}], {
    series: {
        shadowSize: 0,
        lines: {
            show: true,
            lineWidth: 2,
            fill: true,
            fillColor: {
                colors: [{
                    opacity: 0
                }, {
                    opacity: .5
                }]
            }
        }
    },
    grid: {
        borderWidth: 0,
        labelMargin: 0
    },
    yaxis: {
        show: false,
        min: 0,
        max: 60
    },
    xaxis: {
        show: false
    }
});


window.onload = function() {
    revenueLineChart = new Chart(revenueLineChartCTX, revenueLineChartConfig);
    // monthlyRevenueChart = new Chart(monthlyRevenueChartCTX, monthlyRevenueChartConfig);
    //var doughnutStudentChart = new Chart(doughnutStudentChartCTX, doughnutStudentChartConfig);
    // StudentTypeChart = new Chart(StudentTypeChartCTX, StudentTypeChartConfig);
    // var rateConvertChart = new Chart(rateConvertChartCTX, rateConvertChartConfig);
    // yearSwap.addEventListener('change', changeDataset);
    changeDataset('week');
    // var totalTypeChart = new Chart(totalTypeChartCTX, totalTypeChartConfig);

    var filterItem = $('.filter-time').on('click', function() {
        $(this).addClass('active');
        filterItem.not($(this)).removeClass('active');
        changeDataset($(this).data('time'));
    });
};

$(document).ready(function() {
    // Donut chart
    $('.peity-donut').peity('donut');
});
</script>
<script>
//Script Chart User
$(document).ready(function() {
 
    //demo data chart
    function getRandom(length){
        const arr = [];
        for(let i = 0; i<= length;i++){
            arr[i] = Math.floor(Math.random() * 10000) * 1000;
        }
        return arr;
    }

    var dataDemo = {
        labels: [],
        datasets:[{
            label: "Doanh thu",
            data: [],
            backgroundColor: 'rgba(0,136,204, 0.35)',
            borderColor: 'rgba(0,136,204, 0.83)',
            fill: true,
            lineTension: .2,
            pointBorderColor: "#fff",
            pointBackgroundColor: "#3e3e3e",
            pointBorderColor: '#fff',
            borderWidth: 2,
            pointBorderWidth: 2,
            pointHoverBorderWidth: 4,
        }]
    }

    function initChart(rowid, data) {
        var ctx = document.getElementById('chart-id-' + rowid);
        var chartOptions = {
            title: {
                text: 'Thống kê doanh thu',
                display: true,
            },
            plugins: {
                datalabels: {
                    clip: false,
                    color: "#000",
                    clamp: false,
                    anchor: "end",
                    align: "top",
                    offset: 1,
                    formatter: (value, ctx) => {
                        return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                    },
                    fontSize: 14
                }
            },

            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            hover: {
                mode: "label"
            },
            scales: {
                xAxes: [{
                    display: true,
                   
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        fontColor: "#000",
                        beginAtZero:false,
                        //  max: Math.max(...data.datasets[0].data) * 1.2,

                    }
                }],
                yAxes: [{
                    display: true,
                    fontColor: "#000",
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        beginAtZero: false,
                        fontColor: "#000",
                        padding: 15,
                        //   max: Math.max(...data.datasets[0].data) * 1.2,
                        callback: function(value, index, values) {
                            if (parseInt(value) >= 1000000 && parseInt(value) < 1000000000) {
                                return (value / 1000000).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g,
                                    ",") + ' Triệu';
                            } else if ((parseInt(value) >= 1000000000)) {
                                return (value / 1000000000).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ",") + ' Tỉ';
                            }
                            return value;
                        }
                    }
                }]
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            }
        };

     
        var chart = new Chart(ctx, {
            type: 'line',
            data: dataDemo,
            options: chartOptions
        });
    }
    
    function updateChartType(rowid, data) {
    
                var chartId = 'chart-id-' + rowid;
                Chart.helpers.each(Chart.instances, function(instance) {
                   
                    var chartJs = instance.chart;
                    if(chartJs.canvas.id === chartId){
                        console.log(chartJs.config.data);
                        chartJs.config.data = data;
                        chartJs.update();
                        return false;
                    }

                });
               
            };

    $('.chart-on-table').on('click', '.view-chart', function() {
        var dataAjax = {
        labels: ["11/2 - 12/3", "23/4 - 30/4", "15/5 - 25/5", "30/6 - 12/6", "11/7 - 20/7", "15/8 - 20/8", "11/9 - 27/9"],
        datasets:[{
            label: "Doanh thu",
            data: getRandom(7),
            backgroundColor: 'rgba(0,136,204, 0.35)',
            borderColor: 'rgba(0,136,204, 0.83)',
            fill: true,
            lineTension: .2,
            pointBorderColor: "#fff",
            pointBackgroundColor: "#3e3e3e",
            pointBorderColor: '#fff',
            borderWidth: 2,
            pointBorderWidth: 2,
            pointHoverBorderWidth: 4,
        }]
    }
        var rowid = $(this).closest('.collapse-row').find('.chart-element').attr('data-chart-id');
        updateChartType(rowid,dataAjax);
    });
    $('.chart-on-table').on('click', '.toggle-collapse', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $collapse = $this.closest('.row-info').next();
        $this.toggleClass('active');
        $collapse.toggleClass('expanded');
        $collapse.find('content-table').toggle();
    });

    $('.chart-element').each(function(index,chart){
        initChart($(chart).attr('data-chart-id'),dataDemo);
    });
    function nonAccentVietnamese(str) {
    str = str.toLowerCase();
//     We can also use this instead of from line 11 to line 17
    str = str.replace(/\u00E0|\u00E1|\u1EA1|\u1EA3|\u00E3|\u00E2|\u1EA7|\u1EA5|\u1EAD|\u1EA9|\u1EAB|\u0103|\u1EB1|\u1EAF|\u1EB7|\u1EB3|\u1EB5/g, "a");
    str = str.replace(/\u00E8|\u00E9|\u1EB9|\u1EBB|\u1EBD|\u00EA|\u1EC1|\u1EBF|\u1EC7|\u1EC3|\u1EC5/g, "e");
    str = str.replace(/\u00EC|\u00ED|\u1ECB|\u1EC9|\u0129/g, "i");
    str = str.replace(/\u00F2|\u00F3|\u1ECD|\u1ECF|\u00F5|\u00F4|\u1ED3|\u1ED1|\u1ED9|\u1ED5|\u1ED7|\u01A1|\u1EDD|\u1EDB|\u1EE3|\u1EDF|\u1EE1/g, "o");
    str = str.replace(/\u00F9|\u00FA|\u1EE5|\u1EE7|\u0169|\u01B0|\u1EEB|\u1EE9|\u1EF1|\u1EED|\u1EEF/g, "u");
    str = str.replace(/\u1EF3|\u00FD|\u1EF5|\u1EF7|\u1EF9/g, "y");
    str = str.replace(/\u0111/g, "d");
    // str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
    // str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
    // str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
    // str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
    // str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
    // str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
    // str = str.replace(/đ/g, "d");
    // Some system encode vietnamese combining accent as individual utf-8 characters
    str = str.replace(/\u0300|\u0301|\u0303|\u0309|\u0323/g, ""); // Huyền sắc hỏi ngã nặng 
    str = str.replace(/\u02C6|\u0306|\u031B/g, ""); // Â, Ê, Ă, Ơ, Ư
    return str;
}
    function searchName(inputEle,tableId) {
      //  debugger;
        var input, filter, table, tr, td, i, txtValue;
        input = inputEle;
        filter = nonAccentVietnamese(input.value).toUpperCase();
        table = document.getElementById(tableId);
        console.log(table);
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
            txtValue = nonAccentVietnamese(td.textContent) || nonAccentVietnamese(td.innerText);
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                tr[i+1].style.display = "";
            } else {
                tr[i].style.display = "none";
                tr[i+1].style.display ="none";
            }
            }       
        }
    }
    $('#search-saler').on('keyup',function(){
        searchName($('#search-saler').get(0),'sale-viewer');
    });
});
</script>