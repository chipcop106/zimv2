<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <h4 class="mg-b-15 tx-spacing--1">Danh sách thông báo</h4>
        <div class="notification__wrap">
                    <ul class="nav nav-line" id="tab-nav" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">Tất cả thông báo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="course-tab" data-toggle="tab" href="#course" role="tab" aria-controls="course" aria-selected="false">Khoá học</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="feedback-tab" data-toggle="tab" href="#feedback" role="tab" aria-controls="feedback" aria-selected="false">Feedback</a>
                        </li>
                    </ul>
                    <div class="tab-content bd-gray-300 bd-t-0 pd-y-20" id="tab-notification">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Tiêu đề</th>
                                            <th>Nội dung</th>
                                            <th>Khoá học</th>
                                            <th>Chi nhánh</th>
                                            <th>Thời gian</th>
                                            <th>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkbox-all" id="checkbox-all-1">
                                                    <label class="custom-control-label" for="checkbox-all-1">Tất cả</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">Giáo viên Nguyễn Thu Minh vừa thêm bài tập mới SPEAKING - Listening lesson 1</a> </td>
                                            <td>Cập nhật bài tập mới.</td>
                                          
                                            <td class="no-wrap">
                                                <p class="mg-b-0">A-IELTS Intermediate</p>
                                                <span class="place">04/08, 18:30-20:30</span>
                                            </td>
                                            <td>138 Huỳnh Lan Khánh</td>
                                            <td>27/04/2019 10:30</td>
                                            <td class="checkbox-field">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cb-id-1">
                                                    <label class="custom-control-label" for="cb-id-1">Đã xem</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Feedback " Bảo lưu khoá học "</a> </td>
                                            <td>Có feedback mới.</td>
                                            
                                            <td class="no-wrap">
                                                <p class="mg-b-0">A-IELTS Production</p>
                                                <span class="place">04/08, 18:30-20:30</span>
                                            </td>
                                            <td>65 Yên Lãng</td>
                                            <td>27/04/2019 10:30</td>
                                            <td class="checkbox-field">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cb-id-2">
                                                    <label class="custom-control-label" for="cb-id-2">Đã xem</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            
                                             <td><a href="#">Giáo viên Nguyễn Thu Minh vừa thêm bài tập mới SPEAKING - Listening lesson 1</a> </td>
                                            <td>Cập nhật bài tập mới.</td>
                                            <td class="no-wrap">
                                                <p class="mg-b-0">A-IELTS Advanced</p>
                                                <span class="place">04/08, 18:30-20:30</span>
                                            </td>
                                            <td>15 Trần Phú</td>
                                            <td>27/04/2019 10:30</td>
                                            <td class="checkbox-field">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cb-id-3">
                                                    <label class="custom-control-label" for="cb-id-3">Đã xem</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td><a href="#">Giáo viên Nguyễn Thu Minh vừa thêm bài tập mới SPEAKING - Listening lesson 1</a> </td>
                                            <td>Cập nhật bài tập mới.</td>
                                            
                                            <td class="no-wrap">
                                                <p class="mg-b-0">A-IELTS Intermediate</p>
                                                <span class="place">04/08, 18:30-20:30</span>
                                            </td>
                                            <td>138 Huỳnh Lan Khánh</td>
                                            <td>27/04/2019 10:30</td>
                                            <td class="checkbox-field">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cb-id-4">
                                                    <label class="custom-control-label" for="cb-id-4">Đã xem</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Feedback " Bảo lưu khoá học "</a> </td>
                                            <td>Có feedback mới.</td>
                                            
                                            <td class="no-wrap">
                                                <p class="mg-b-0">A-IELTS Production</p>
                                                <span class="place">04/08, 18:30-20:30</span>
                                            </td>
                                            <td>65 Yên Lãng</td>
                                            <td>27/04/2019 10:30</td>
                                            <td class="checkbox-field">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cb-id-5">
                                                    <label class="custom-control-label" for="cb-id-5">Đã xem</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            
                                            <td><a href="#">Giáo viên Nguyễn Thu Minh vừa thêm bài tập mới SPEAKING - Listening lesson 1</a> </td>
                                            <td>Cập nhật bài tập mới.</td>
                                            <td class="no-wrap">
                                                <p class="mg-b-0">A-IELTS Advanced</p>
                                                <span class="place">04/08, 18:30-20:30</span>
                                            </td>
                                            <td>15 Trần Phú</td>
                                            <td>27/04/2019 10:30</td>
                                            <td class="checkbox-field">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cb-id-6">
                                                    <label class="custom-control-label" for="cb-id-6">Đã xem</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                        </div>
                        <div class="tab-pane fade" id="course" role="tabpanel" aria-labelledby="course-tab">
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Tiêu đề</th>
                                            <th>Nội dung</th>
                                            <th>Khoá học</th>
                                            <th>Chi nhánh</th>
                                            <th>Thời gian</th>
                                            <th>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkbox-all" id="checkbox-all-2">
                                                    <label class="custom-control-label" for="checkbox-all-2">Tất cả</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                            <td><a href="#">Giáo viên Nguyễn Thu Minh vừa thêm bài tập mới SPEAKING - Listening lesson 1</a> </td>
                                            <td>Cập nhật bài tập mới.</td>
                                            <td class="no-wrap">
                                                <p class="mg-b-0">A-IELTS Advanced</p>
                                                <span class="place">04/08, 18:30-20:30</span>
                                            </td>
                                            <td>15 Trần Phú</td>
                                            <td>27/04/2019 10:30</td>
                                            <td class="checkbox-field">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cb-id-7">
                                                    <label class="custom-control-label" for="cb-id-7">Đã xem</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Giáo viên Nguyễn Thu Minh vừa thêm bài tập mới SPEAKING - Listening lesson 1</a> </td>
                                            <td>Cập nhật bài tập mới.</td>
                                            
                                            <td class="no-wrap">
                                                <p class="mg-b-0">A-IELTS Intermediate</p>
                                                <span class="place">04/08, 18:30-20:30</span>
                                            </td>
                                            <td>138 Huỳnh Lan Khánh</td>
                                            <td>27/04/2019 10:30</td>
                                            <td class="checkbox-field">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cb-id-8">
                                                    <label class="custom-control-label" for="cb-id-8">Đã xem</label>
                                                </div>
                                            </td>
                                        </tr>
   
                                        <tr>
                                            
                                             <td><a href="#">Giáo viên Nguyễn Thu Minh vừa thêm bài tập mới SPEAKING - Listening lesson 1</a> </td>
                                            <td>Cập nhật bài tập mới.</td>
                                            <td class="no-wrap">
                                                <p class="mg-b-0">A-IELTS Advanced</p>
                                                <span class="place">04/08, 18:30-20:30</span>
                                            </td>
                                            <td>15 Trần Phú</td>
                                            <td>27/04/2019 10:30</td>
                                            <td class="checkbox-field">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cb-id-9">
                                                    <label class="custom-control-label" for="cb-id-9">Đã xem</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                        </div>
                        <div class="tab-pane fade" id="feedback" role="tabpanel" aria-labelledby="feedback-tab">
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Tiêu đề</th>
                                            <th>Nội dung</th>
                                            <th>Khoá học</th>
                                            <th>Chi nhánh</th>
                                            <th>Thời gian</th>
                                            <th>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkbox-all" id="checkbox-all-3">
                                                    <label class="custom-control-label" for="checkbox-all-3">Tất cả</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td><a href="#">Feedback " Bảo lưu khoá học "</a> </td>
                                            <td>Có feedback mới.</td>
                                            
                                            <td class="no-wrap">
                                                <p class="mg-b-0">A-IELTS Intermediate</p>
                                                <span class="place">04/08, 18:30-20:30</span>
                                            </td>
                                            <td>138 Huỳnh Lan Khánh</td>
                                            <td>27/04/2019 10:30</td>
                                            <td class="checkbox-field">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cb-id-10">
                                                    <label class="custom-control-label" for="cb-id-10">Đã xem</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Feedback " Bảo lưu khoá học "</a> </td>
                                            <td>Có feedback mới.</td>
                                           
                                            <td class="no-wrap">
                                                <p class="mg-b-0">A-IELTS Production</p>
                                                <span class="place">04/08, 18:30-20:30</span>
                                            </td>
                                            <td>65 Yên Lãng</td>
                                            <td>27/04/2019 10:30</td>
                                            <td class="checkbox-field">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cb-id-11">
                                                    <label class="custom-control-label" for="cb-id-11">Đã xem</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td><a href="#">Feedback " Bảo lưu khoá học "</a> </td>
                                            <td>Có feedback mới.</td>
                                            <td class="no-wrap">
                                                <p class="mg-b-0">A-IELTS Advanced</p>
                                                <span class="place">04/08, 18:30-20:30</span>
                                            </td>
                                            <td>15 Trần Phú</td>
                                            <td>27/04/2019 10:30</td>
                                            <td class="checkbox-field">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cb-id-12">
                                                    <label class="custom-control-label" for="cb-id-12">Đã xem</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td><a href="#">Feedback " Bảo lưu khoá học "</a> </td>
                                            <td>Có feedback mới.</td>
                                            <td class="no-wrap">
                                                <p class="mg-b-0">A-IELTS Advanced</p>
                                                <span class="place">04/08, 18:30-20:30</span>
                                            </td>
                                            <td>15 Trần Phú</td>
                                            <td>27/04/2019 10:30</td>
                                            <td class="checkbox-field">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cb-id-13">
                                                    <label class="custom-control-label" for="cb-id-13">Đã xem</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td><a href="#">Feedback " Bảo lưu khoá học "</a> </td>
                                            <td>Có feedback mới.</td>
                                            
                                            <td class="no-wrap">
                                                <p class="mg-b-0">A-IELTS Advanced</p>
                                                <span class="place">04/08, 18:30-20:30</span>
                                            </td>
                                            <td>15 Trần Phú</td>
                                            <td>27/04/2019 10:30</td>
                                            <td class="checkbox-field">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cb-id-14">
                                                    <label class="custom-control-label" for="cb-id-14">Đã xem</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                        </div>
                    </div>
                </div>
    </div><!-- container -->
</div><!-- content -->
<?php require_once( 'footer.php' ); ?>
<script>
    $(document).ready(function(){
        $('.checkbox-all').on('change',checkAllCb);
        function checkAllCb(){
            var $table = $(this).closest('.table');
            $table.find('tbody input[type="checkbox"]').prop('checked',$(this).prop('checked'));
        }
    });
</script>