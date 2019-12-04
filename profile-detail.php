<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>

<link rel="stylesheet" href="assets/css/dashforge.profile.css">
<link rel="stylesheet" href="lib/spectrum-colorpicker/spectrum.css">
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="media d-block d-lg-flex">
            <div class="profile-sidebar pd-lg-r-25 left-sticky">
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-lg-12">
                        <div class="avatar avatar-xxl avatar-online"><img src="assets/img/teacher.jpg"
                                class="rounded-circle" alt=""></div>
                    </div><!-- col -->
                    <div class="col-sm-8 col-md-7 col-lg-12 mg-t-20 mg-sm-t-0 mg-lg-t-25">
                        <h5 class="mg-b-2 tx-spacing--1">Trương Văn Lam</h5>
                        <p class="tx-color-03 mg-b-25">@lam&nam</p>
                        <div class="d-flex mg-b-25">
                            <button class="btn btn-xs btn-white flex-fill" data-toggle="modal"
                                data-target="#editProfile">Edit Profile</button>
                            <button class="btn btn-xs btn-primary flex-fill mg-l-10" data-toggle="modal"
                                data-target="#editPassword">Change Password</button>
                        </div>
                    </div><!-- col -->
                    <div class="col-sm-6 col-md-5 col-lg-12 ">
                        <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Contact
                            Information</label>
                        <ul class="list-unstyled profile-info-list mg-b-10">
                            <li><i data-feather="home"></i> <span class="">115 Trần Phú, Quận 5</span></li>
                            <li><i data-feather="phone"></i> <a href="">(+84) 886 706 289</a></li>
                            <li><i data-feather="mail"></i> <a href="">me@lamnam.me</a></li>
                        </ul>
                    </div><!-- col -->
                    <div class="col-sm-6 col-md-5 col-lg-12 mg-t-20">
                        <label
                            class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Course</label>
                        <ul class="list-unstyled profile-info-list course mg-b-10">
                            <li><i data-feather="book"></i> <a href="#">[ZIM – 65 Yên Lãng] - A-IELTS Intermediate,
                                    11/11, 18:30-20:30,</a></li>
                            <li><i data-feather="book"></i> <a href="#">[ZIM - 308 Trần Phú] - A-IELTS Intermediate,
                                    11/11, 09:30-11:30, 14:00-16:00, 18:00-20:00</a></li>
                            <li><i data-feather="book"></i> <a href="#">[ZIM - 308 Trần Phú] - A-IELTS Foundation,
                                    11/11, 08:00-10:00, 10:00-12:00</a></li>
                            <li><i data-feather="book"></i> <a href="#">[ZIM – 35 Võ Oanh] - A-IELTS Intermediate,
                                    08/11, 18:30-20:30</a></li>
                        </ul>
                    </div><!-- col -->
                </div><!-- row -->

            </div><!-- profile-sidebar -->
            <div class="media-body mg-t-30 mg-lg-t-0 pd-lg-x-10">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="testInfo-tab" data-toggle="tab" href="#testInfo" role="tab"
                            aria-controls="testInfo" aria-selected="true">Test Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="course-joined" data-toggle="tab" href="#courseJoined" role="tab"
                            aria-controls="courseJoined" aria-selected="false">Course Joined</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="paymentHistory-tab" data-toggle="tab" href="#paymentHistory" role="tab"
                            aria-controls="paymentHistory" aria-selected="false">Payment history</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="transactionHistory-tab" data-toggle="tab" href="#transactionHistory" role="tab"
                            aria-controls="transactionHistory" aria-selected="false">Change history</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="changeHistory-tab" data-toggle="tab" href="#changeHistory" role="tab"
                            aria-controls="changeHistory" aria-selected="false">Other</a>
                    </li>
                </ul>
                <div class="tab-content bd bd-gray-300 bd-t-0 pd-20" id="student-information">
                    <div class="tab-pane fade show active" id="testInfo" role="tabpanel" aria-labelledby="testInfo-tab">
                        <div class="card">

                            <div class="card-body">
                                <div class="table-responsive pf__schedule-test">
                                    <table class="table table-bordered ">
                                        <tbody>
                                            <tr>
                                                <td class="vertical-align" rowspan="5">
                                                    <strong>27/04/2019</strong><br />Chiều
                                                    13:30</td>
                                                <td class="hd">Người tư vấn</td>
                                                <td class="hd">Listening</td>
                                                <td class="hd">Speaking</td>
                                                <td class="hd">Reading</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select name="" id="" class="form-control select-2">
                                                        <option value="">option1</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                            </tr>
                                            <tr>

                                                <td class="hd">Writing</td>
                                                <td class="hd">Vocab</td>
                                                <td class="hd">Học phí tư vấn</td>
                                                <td class="hd">Giáo viên test</td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                                <td>
                                                    <select name="" id="" class="form-control select-2">
                                                        <option value="">option1</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <div contenteditable="false"><strong>Ghi chú:</strong> bla bla bla
                                                        bla bla
                                                        bla balb ablabalbalbalbal</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive pf__schedule-test">
                                    <table class="table table-bordered ">
                                        <tbody>
                                            <tr>
                                                <td class="vertical-align" rowspan="5">
                                                    <strong>27/04/2019</strong><br />Chiều
                                                    13:30</td>
                                                <td class="hd">Người tư vấn</td>
                                                <td class="hd">Listening</td>
                                                <td class="hd">Speaking</td>
                                                <td class="hd">Reading</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select name="" id="" class="form-control select-2">
                                                        <option value="">option1</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                            </tr>
                                            <tr>

                                                <td class="hd">Writing</td>
                                                <td class="hd">Vocab</td>
                                                <td class="hd">Học phí tư vấn</td>
                                                <td class="hd">Giáo viên test</td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                                <td>
                                                    <select name="" id="" class="form-control select-2">
                                                        <option value="">option1</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <div contenteditable="false"><strong>Ghi chú:</strong> bla bla bla
                                                        bla bla
                                                        bla balb ablabalbalbalbal</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="courseJoined" role="tabpanel" aria-labelledby="course-joined">
                        <div class="card">

                            <div class="card-body">
                                <div class="course-join">
                                    <div class="tb-hd d-flex align-items-center justify-content-between">
                                        <h6><a href="#">[ZIM – 35 Võ Oanh] - A-IELTS Intermediate, 08/11, 18:30-20:30
                                            </a> </h6>
                                        <a href="javascript:;" class="toggle-table"><i
                                                data-feather="chevron-down"></i></a>
                                    </div>
                                    <div class="tab-content">
                                        <div class="table-responsive">
                                            <table class="table table-vcenter ">
                                                <caption class="title">Điểm danh</caption>
                                                <caption>Số buổi vắng <strong class="tx-color-01">5</strong> / 10 buổi
                                                </caption>
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Learning Skill</th>
                                                        <th>Teacher</th>
                                                        <th>Rollup</th>
                                                        <th>Comment</th>
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>27/04/2019</td>
                                                        <td>Khá</td>
                                                        <td>Trương Lam</td>
                                                        <td>Vắng không phép</td>
                                                        <td>Nhà bao việc, thích thì nghỉ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>27/04/2019</td>
                                                        <td>Khá</td>
                                                        <td>Trương Lam</td>
                                                        <td>Vắng không phép</td>
                                                        <td>Nhà bao việc, thích thì nghỉ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>27/04/2019</td>
                                                        <td>Khá</td>
                                                        <td>Trương Lam</td>
                                                        <td>Vắng không phép</td>
                                                        <td>Nhà bao việc, thích thì nghỉ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>27/04/2019</td>
                                                        <td>Khá</td>
                                                        <td>Trương Lam</td>
                                                        <td>Vắng không phép</td>
                                                        <td>Nhà bao việc, thích thì nghỉ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>27/04/2019</td>
                                                        <td>Khá</td>
                                                        <td>Trương Lam</td>
                                                        <td>Vắng không phép</td>
                                                        <td>Nhà bao việc, thích thì nghỉ</td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm collapse-table">
                                                <caption class="title">Bài tập</caption>
                                                <caption>Đã nộp <strong class="tx-color-01">5</strong> / 10 bài
                                                </caption>
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th></th>
                                                        <th>Subject</th>
                                                        <th>Deadline</th>
                                                        <th>Status</th>
                                                        <th>Score</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="tr-row">
                                                        <td><a href="javascript:;" class="collapse-toggle"><i
                                                                    class="fas fa-plus-square"></i></a></td>
                                                        <td>WRITTING</td>
                                                        <td class="no-wrap">27/04/2019</td>
                                                        <td><span class="badge badge-success">Done</span></td>
                                                        <td class="no-wrap"><strong>8.5/10</strong></td>
                                                    </tr>
                                                    <tr class="collapse-row">
                                                        <td colspan="5">
                                                            <div class="collapse-content">Thông tin thêm</div>
                                                        </td>

                                                    </tr>
                                                    <tr class="tr-row">
                                                        <td><a href="javascript:;" class="collapse-toggle"><i
                                                                    class="fas fa-plus-square"></i></a></td>
                                                        <td>WRITTING</td>
                                                        <td class="no-wrap">27/04/2019</td>
                                                        <td><span class="badge badge-success">Done</span></td>
                                                        <td class="no-wrap"><strong>8.5/10</strong></td>
                                                    </tr>
                                                    <tr class="collapse-row">
                                                        <td colspan="5">
                                                            <div class="collapse-content">Thông tin chi tiết hoặc thêm
                                                                thông tin
                                                            </div>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm collapse-table">
                                                <caption class="title">Điểm thi</caption>
                                                <caption>Kết quả: <strong class="tx-color-01">8</strong> / 10 <span
                                                        class="badge badge-success">Pass</span></caption>
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Exam</th>
                                                        <th>Score</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Mid-term exam</td>
                                                        <td>8.5 / 10</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Final-term exam</td>
                                                        <td>10 / 10</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                </div>
                                <div class="course-join">
                                    <div class="tb-hd d-flex align-items-center justify-content-between">
                                        <h6><a href="#">[ZIM – 35 Võ Oanh] - A-IELTS Intermediate, 08/11, 18:30-20:30
                                            </a> </h6>
                                        <a href="javascript:;" class="toggle-table"><i
                                                data-feather="chevron-down"></i></a>
                                    </div>
                                    <div class="tab-content">
                                        <div class="table-responsive">
                                            <table class="table table-vcenter ">
                                                <caption class="title">Điểm danh</caption>
                                                <caption>Số buổi vắng <strong class="tx-color-01">5</strong> / 10 buổi
                                                </caption>
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Learning Skill</th>
                                                        <th>Teacher</th>
                                                        <th>Rollup</th>
                                                        <th>Comment</th>
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>27/04/2019</td>
                                                        <td>Khá</td>
                                                        <td>Trương Lam</td>
                                                        <td>Vắng không phép</td>
                                                        <td>Nhà bao việc, thích thì nghỉ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>27/04/2019</td>
                                                        <td>Khá</td>
                                                        <td>Trương Lam</td>
                                                        <td>Vắng không phép</td>
                                                        <td>Nhà bao việc, thích thì nghỉ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>27/04/2019</td>
                                                        <td>Khá</td>
                                                        <td>Trương Lam</td>
                                                        <td>Vắng không phép</td>
                                                        <td>Nhà bao việc, thích thì nghỉ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>27/04/2019</td>
                                                        <td>Khá</td>
                                                        <td>Trương Lam</td>
                                                        <td>Vắng không phép</td>
                                                        <td>Nhà bao việc, thích thì nghỉ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>27/04/2019</td>
                                                        <td>Khá</td>
                                                        <td>Trương Lam</td>
                                                        <td>Vắng không phép</td>
                                                        <td>Nhà bao việc, thích thì nghỉ</td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm collapse-table">
                                                <caption class="title">Bài tập</caption>
                                                <caption>Đã nộp <strong class="tx-color-01">5</strong> / 10 bài
                                                </caption>
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th></th>
                                                        <th>Subject</th>
                                                        <th>Deadline</th>
                                                        <th>Status</th>
                                                        <th>Score</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="tr-row">
                                                        <td><a href="javascript:;" class="collapse-toggle"><i
                                                                    class="fas fa-plus-square"></i></a></td>
                                                        <td>WRITTING</td>
                                                        <td class="no-wrap">27/04/2019</td>
                                                        <td><span class="badge badge-success">Done</span></td>
                                                        <td class="no-wrap"><strong>8.5/10</strong></td>
                                                    </tr>
                                                    <tr class="collapse-row">
                                                        <td colspan="5">
                                                            <div class="collapse-content">Thông tin thêm</div>
                                                        </td>

                                                    </tr>
                                                    <tr class="tr-row">
                                                        <td><a href="javascript:;" class="collapse-toggle"><i
                                                                    class="fas fa-plus-square"></i></a></td>
                                                        <td>WRITTING</td>
                                                        <td class="no-wrap">27/04/2019</td>
                                                        <td><span class="badge badge-success">Done</span></td>
                                                        <td class="no-wrap"><strong>8.5/10</strong></td>
                                                    </tr>
                                                    <tr class="collapse-row">
                                                        <td colspan="5">
                                                            <div class="collapse-content">Thông tin chi tiết hoặc thêm
                                                                thông tin
                                                            </div>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm collapse-table">
                                                <caption class="title">Điểm thi</caption>
                                                <caption>Kết quả: <strong class="tx-color-01">8</strong> / 10 <span
                                                        class="badge badge-success">Pass</span></caption>
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Exam</th>
                                                        <th>Score</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Mid-term exam</td>
                                                        <td>8.5 / 10</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Final-term exam</td>
                                                        <td>10 / 10</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="paymentHistory" role="tabpanel" aria-labelledby="paymentHistory-tab">
                        <div class="card">

                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <p class="mg-b-0"><span class="wd-100">Học phí còn nợ:</span> <strong class="text-danger">3.000.000
                                            VNĐ</strong></p>
                                </div>
                                <div class="table-history">
                                    <div class="table-responsive">
                                        <table class="table table-bordered ">
                                            <caption class="title">Lịch sử giao dịch</caption>
                                     
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Money</th>
                                                    <th>Message</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>27/04/2019</td>
                                                    <td>19.000.000</td>
                                                    <td>Đặt cọc học phí khoá học Intermediate, 11/11, 18:30-20:30,</td>
                                                </tr>
                                                <tr>
                                                    <td>27/04/2019</td>
                                                    <td>19.000.000</td>
                                                    <td>Đặt cọc học phí khoá học Intermediate, 11/11, 18:30-20:30,</td>
                                                </tr>
                                                <tr>
                                                    <td>27/04/2019</td>
                                                    <td>19.000.000</td>
                                                    <td>Đặt cọc học phí khoá học Intermediate, 11/11, 18:30-20:30,</td>
                                                </tr>
                                                <tr>
                                                    <td>27/04/2019</td>
                                                    <td>19.000.000</td>
                                                    <td>Đặt cọc học phí khoá học Intermediate, 11/11, 18:30-20:30,</td>
                                                </tr>
                                                <tr>
                                                    <td>27/04/2019</td>
                                                    <td>19.000.000</td>
                                                    <td>Đặt cọc học phí khoá học Intermediate, 11/11, 18:30-20:30,</td>
                                                </tr>
                                                <tr>
                                                    <td>27/04/2019</td>
                                                    <td>19.000.000</td>
                                                    <td>Đặt cọc học phí khoá học Intermediate, 11/11, 18:30-20:30,</td>
                                                </tr>
                                                <tr>
                                                    <td>27/04/2019</td>
                                                    <td>19.000.000</td>
                                                    <td>Đặt cọc học phí khoá học Intermediate, 11/11, 18:30-20:30,</td>
                                                </tr>
                                                <tr>
                                                    <td>27/04/2019</td>
                                                    <td>19.000.000</td>
                                                    <td>Đặt cọc học phí khoá học Intermediate, 11/11, 18:30-20:30,</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <nav aria-label="Page navigation" class="mg-t-10">
                                        <ul class="pagination mg-b-0 justify-content-end">
                                            <li class="page-item disabled"><a class="page-link page-link-icon"
                                                    href="#"><i data-feather="chevron-left"></i></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link page-link-icon" href="#"><i
                                                        data-feather="chevron-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="transactionHistory" role="tabpanel" aria-labelledby="transactionHistory-tab">
                        <div class="card">

                            <div class="card-body">
                              
                                <div class="table-history">
                                    <div class="table-responsive">
                                        <table class="table table-bordered ">
                                            <caption class="title">Student history</caption>
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Message</th>
                                                    <th>Action by</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>27/04/2019</td>
                                                    <td>Chuyển lịch học từ khoá A sang khoá B</td>
                                                    <td>TTV Trương Lam Văn</td>
                                                </tr>
                                                <tr>
                                                    <td>27/04/2019</td>
                                                    <td>Đăng ký gia dịch vụ thi thử vào ngày bla bla bla</td>
                                                    <td>TTV Momo </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <nav aria-label="Page navigation" class="mg-t-10">
                                        <ul class="pagination mg-b-0 justify-content-end">
                                            <li class="page-item disabled"><a class="page-link page-link-icon"
                                                    href="#"><i data-feather="chevron-left"></i></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link page-link-icon" href="#"><i
                                                        data-feather="chevron-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="tab-pane fade" id="changeHistory" role="tabpanel" aria-labelledby="changeHistory-tab">
                        <div class="card">

                            <div class="card-body">
                                
                                <div class="table-history">
                                    <div class="table-responsive">
                                        <table class="table table-bordered ">
                                            <caption class="title">Dịch vụ tham gia</caption>
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Services</th>
                                                    <th>Message</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>27/04/2019</td>
                                                    <td>Thi thử</td>
                                                    <td>Tham gia dịch vụ thi thử vào ngày bla bla bla</td>
                                                </tr>
                                                <tr>
                                                    <td>27/04/2019</td>
                                                    <td>Thi thử</td>
                                                    <td>Tham gia dịch vụ thi thử vào ngày bla bla bla</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                  
                                </div>
                                <div class="table-history">
                                    <div class="table-responsive">
                                        <table class="table table-bordered ">
                                            <caption class="title">Khoá hẹn đăng ký</caption>
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Course name</th>
                                                    <th>Branch</th>
                                                    <th>Class</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>IELST Advanced</td>
                                                    <td>192 Yen Lang</td>
                                                    <td>10:30 - 12:30</td>
                                                </tr>
                                                <tr>
                                                    <td>IELST Advanced</td>
                                                    <td>192 Yen Lang</td>
                                                    <td>10:30 - 12:30</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                  
                                </div>


                            </div>
                        </div>
                        
                    </div>
                  
                </div>


            </div><!-- media-body -->

        </div><!-- media -->
    </div><!-- container -->
</div><!-- content -->

<!-- Modal -->
<div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="editTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTitle">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <fieldset class="form-fieldset">
                    <legend>Personal Information</legend>
                    <div class="form-group row">
                        <label for="full_name" class="col-sm-2 col-form-label">Full name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="full_name" placeholder="Full name"
                                value="Trương Văn Lam">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone_number" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="phone_number" placeholder="Phone number"
                                value="(+84) 886 076 289">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Email address"
                                value="zim.mona@monamedia.zim">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="address" placeholder="Your address"
                                value="319, C16 Lý Thường Kiệt Quận 11">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 pt-0">Sex</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" name="sex" class="custom-control-input" checked>
                                <label class="custom-control-label">Male</label>
                            </div>
                            <div class="mg-l-20 custom-control custom-radio">
                                <input type="radio" name="sex" class="custom-control-input">
                                <label class="custom-control-label">Female</label>
                            </div>
                        </div>
                    </div>

                </fieldset>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editPassword" tabindex="-1" role="dialog" aria-labelledby="editPass" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPass">Change password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-12">
                        <label class="d-block">Old password</label>
                        <input type="password" class="form-control" placeholder="" value="@lamandnam">
                    </div>
                    <div class="form-group col-12">
                        <label class="d-block">New password</label>
                        <input type="password" class="form-control" placeholder="" value="@lamandnam">
                    </div>
                    <div class="form-group col-12">
                        <label class="d-block">Re-new password</label>
                        <input type="password" class="form-control" placeholder="" value="@lamandnam">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<?php require_once( 'footer.php' ); ?>
<script src="assets/js/infinite-scroll.pkgd.min.js"></script>

<script>
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();

    //Auto resize textarea
    $('body').on('keydown', 'textarea', autosize);

    function autosize() {
        var el = this;
        setTimeout(function() {
            el.style.cssText = 'height:auto; padding:10px';
            el.style.cssText = '-moz-box-sizing:content-box';
            el.style.cssText = 'height:' + el.scrollHeight + 'px';
        }, 0);
    }

    $('.table').on('click', '.collapse-toggle', function() {
        $(this).children().toggleClass('fa-plus-square').toggleClass('fa-minus-square');
        $(this).toggleClass('active').closest('tr.tr-row').next().find('.collapse-content')
            .slideToggle(
                200);
    })
    $('body').on('click', '.toggle-table', function() {
        $(this).toggleClass('active');
        $(this).closest('.tb-hd').next().slideToggle();

    })
});
</script>