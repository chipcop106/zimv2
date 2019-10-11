<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<link href="lib/fullcalendar/fullcalendar.min.css" rel="stylesheet">
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-xl-3">
                <div class="navigator">
                    <div class="card-body pd-0">
                        <label
                            class="tx-uppercase tx-sans tx-10 tx-medium tx-spacing-1 tx-color-03 mg-b-15">Menu</label>
                        <ul class="list-menu">
                            <li class="menu-item active">
                                <a href="course-detail-schedule.php" class="menu-link"><i
                                        data-feather="user"></i>Student</a>
                            </li>
                            <li class="menu-item">
                                <a href="course-detail-schedule.php" class="menu-link"><i
                                        data-feather="calendar"></i>Schedule</a>
                            </li>
                            <li class="menu-item">
                                <a href="course-detail-docs.php" class="menu-link"><i
                                        data-feather="book"></i>Documents</a>
                            </li>
                            <li class="menu-item">
                                <a href="course-detail-exercise.php" class="menu-link"><i
                                        data-feather="book-open"></i>Excercises</a>
                            </li>
                            <li class="menu-item">
                                <a href="course-detail-notification.php" class="menu-link"><i
                                        data-feather="bell"></i>Notification</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="schedule-coming">
                    <label class="tx-uppercase tx-sans tx-10 tx-medium tx-spacing-1 tx-color-03 mg-b-15">Incoming
                        schedule</label>
                    <div class="schedule-group">
                        <a href="#" class="schedule-item bd-l bd-2 bd-danger">
                            <h6>A-IELST Master Series - 502 </h6>
                            <span>8:00am - 9:00am, 27/04/2019</span>
                        </a><!-- schedule-item -->
                        <a href="#" class="schedule-item bd-l bd-2 bd-success">
                            <h6>A-IELST Beginner - 502</h6>
                            <span>8:00am - 9:00am, 27/04/2019</span>
                        </a><!-- schedule-item -->
                        <a href="#" class="schedule-item bd-l bd-2 bd-primary">
                            <h6>A-IELST Foundation - 502</h6>
                            <span>8:00am - 9:00am, 27/04/2019</span>
                        </a><!-- schedule-item -->
                        <a href="#" class="schedule-item bd-l bd-2 bd-danger">
                            <h6>A-IELST Master - 502</h6>
                            <span>8:00am - 9:00am, 27/04/2019</span>
                        </a><!-- schedule-item -->
                        <a href="#" class="schedule-item bd-l bd-2 bd-success">
                            <h6>A-IELST Master - 502</h6>
                            <span>8:00am - 9:00am, 27/04/2019</span>
                        </a><!-- schedule-item -->
                        <a href="#" class="schedule-item bd-l bd-2 bd-primary">
                            <h6>A-IELST Master - 502 </h6>
                            <span>8:00am - 9:00am, 27/04/2019</span>
                        </a><!-- schedule-item -->
                    </div>
                </div>

            </div>
            <div class="col-12 colsm-12 col-md-12 col-xl-9 mg-t-20 mg-xl-t-0">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="mg-b-0">Today's roll up</h6>
                            <div class=" d-flex align-items-center">
                            <div class="no-wrap mg-r-5">Roll up history:</div>
                            <div class="input-row mg-r-5">
                                <select name="" id="" class="form-control">
                                    <option label="" disabled selected>Select day </option>
                                    <option value="va0">12/04/2019 10:30 - 11:30</option>
                                    <option value="va1">13/04/2019 10:30 - 11:30</option>
                                    <option value="va2">14/04/2019 10:30 - 11:30</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                        <div class="list-student-course">
                            <div class="table-responsive">
                                <table class="table table-vcenter table-hover">
                                    <thead>
                                        <tr>
                                            <th>Student</th>
                                            <th>Roll up</th>
                                            <th>Capacity</th>
                                            <th>Comment</th>
                                            <th>Warning</th>
                                            <th>Action</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trương Văn Lam Trường</td>
                                            <td>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Vắng có phép</option>
                                                    <option value="">Vắng không phép</option>
                                                    <option value="">Về sớm</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Theo dõi đặc biệt</option>
                                                    <option value="" selected>Khá</option>
                                                    <option value="">Giỏi</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control">
                                            </td>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1"></label>
                                                </div>
                                            </td>
                              
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-icon btn-sm">
                                                    <i data-feather="eye"></i> Update
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Trương Văn Lam Trường</td>
                                            <td>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Vắng có phép</option>
                                                    <option value="">Vắng không phép</option>
                                                    <option value="">Về sớm</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Theo dõi đặc biệt</option>
                                                    <option value="">Khá</option>
                                                    <option value="" selected>Giỏi</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control">
                                            </td>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1"></label>
                                                </div>
                                            </td>
                              
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-icon btn-sm">
                                                    <i data-feather="eye"></i> Update
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Trương Văn Lam Trường</td>
                                            <td>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Vắng có phép</option>
                                                    <option value="">Vắng không phép</option>
                                                    <option value="">Về sớm</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Theo dõi đặc biệt</option>
                                                    <option value="">Khá</option>
                                                    <option value="">Giỏi</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control">
                                            </td>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1"></label>
                                                </div>
                                            </td>
                              
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-icon btn-sm">
                                                    <i data-feather="eye"></i> Update
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Trương Văn Lam Trường</td>
                                            <td>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Vắng có phép</option>
                                                    <option value="">Vắng không phép</option>
                                                    <option value="">Về sớm</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Theo dõi đặc biệt</option>
                                                    <option value="">Khá</option>
                                                    <option value="">Giỏi</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control">
                                            </td>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1"></label>
                                                </div>
                                            </td>
                              
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-icon btn-sm">
                                                    <i data-feather="eye"></i> Update
                                                </button>
                                            </td>
                                        </tr>
       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- container -->
</div><!-- content -->
<?php require_once( 'footer.php' ); ?>
<script src="lib/moment/min/moment.min.js"></script>
<script src="lib/fullcalendar/fullcalendar.min.js"></script>

<script>
$(document).ready(function() {

});
</script>