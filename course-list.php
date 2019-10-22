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
        <div class="course-horizental mg-t-30">
            <ul class="list-wrap">
                <li class="hd cr-item d-flex justify-content-between align-items-center">
                    <div class="left-info">
                        <span class="mg-r-30 tx-16"><span class="tx-bold tx-gray-900 mg-r-10">746</span class="tx-normal">Course</span>
                    </div>
                    <div class="right-filter">
                        <div class="select-with-label d-flex align-items-center">
                            <span class="label no-wrap"><i data-feather="filter"></i> Sort by:</span>
                            <select class="custom-select">
                                <option value="all" selected>Name from A to Z</option>
                                <option value="all">Name from Z to A</option>
                                <option value="1">Status</option>
                                <option value="2">Start date</option>
                                <option value="2">End day</option>
                            </select>
                        </div>
                    </div>
                </li>
                <li class="cr-item">
                    <div class="media">
                        <img src="assets/img/class.jpg" class="wd-200 rounded mg-r-20" alt="">
                        <div class="media-body">
                            <h5 class="mg-b-15">
															<span class="badge badge-warning">Incoming</span>
															<span class="course-name tx-bold">IELST - Professional</span>  
															<span class="course-teacher tx-16 tx-gray-800 tx-normal">with Văn Lam, Trương Thức, Trương Hồng Ly</span>
														</h5>
                            <p class="summary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis explicabo aperiam, perferendis eveniet ad eius dolores dolorum? Fugit molestias expedita magni provident, dolores aperiam quos velit, sapiente animi recusandae hic.</p>
														<div class="course-information tx-12">
															<span class="mg-r-30">310 Huỳnh Lan Khánh</span>
																<span class="mg-r-30">10:30 - 12:30</span>
																<span class="mg-r-30">Opening: 27/04/2019</span>
																<span class="mg-r-30">End: 27/04/2019</span>
														</div>
                        </div>
                    </div>
								</li>
								<li class="cr-item">
                    <div class="media">
                        <img src="assets/img/class1.jpg" class="wd-200 rounded mg-r-20" alt="">
                        <div class="media-body">
                            <h5 class="mg-b-15">
															<span class="badge badge-success">Opening</span>
															<span class="course-name tx-bold">IELST - Professional</span>  
															<span class="course-teacher tx-16 tx-gray-800 tx-normal">with Văn Lam, Trương Thức, Trương Hồng Ly</span>
														</h5>
                            <p class="summary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis explicabo aperiam, perferendis eveniet ad eius dolores dolorum? Fugit molestias expedita magni provident, dolores aperiam quos velit, sapiente animi recusandae hic.</p>
														<div class="course-information tx-12">
															<span class="mg-r-30">310 Huỳnh Lan Khánh</span>
																<span class="mg-r-30">10:30 - 12:30</span>
																<span class="mg-r-30">Opening: 27/04/2019</span>
																<span class="mg-r-30">End: 27/04/2019</span>
														</div>
                        </div>
                    </div>
								</li>
								<li class="cr-item">
                    <div class="media">
                        <img src="assets/img/class1.jpg" class="wd-200 rounded mg-r-20" alt="">
                        <div class="media-body">
                            <h5 class="mg-b-15">
															<span class="badge badge-danger">Closed</span>
															<span class="course-name tx-bold">IELST - Professional</span>  
															<span class="course-teacher tx-16 tx-gray-800 tx-normal">with Văn Lam, Trương Thức, Trương Hồng Ly</span>
														</h5>
                            <p class="summary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis explicabo aperiam, perferendis eveniet ad eius dolores dolorum? Fugit molestias expedita magni provident, dolores aperiam quos velit, sapiente animi recusandae hic.</p>
														<div class="course-information tx-12">
															<span class="mg-r-30">310 Huỳnh Lan Khánh</span>
																<span class="mg-r-30">10:30 - 12:30</span>
																<span class="mg-r-30">Opening: 27/04/2019</span>
																<span class="mg-r-30">End: 27/04/2019</span>
														</div>
                        </div>
                    </div>
                </li>
            </ul>
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
    </div><!-- container -->
</div><!-- content -->
<?php require_once( 'footer.php' ); ?>