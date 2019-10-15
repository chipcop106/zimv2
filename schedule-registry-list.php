<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-30">
                <li class="breadcrumb-item"><a href="#">Customer</a></li>
                <li class="breadcrumb-item active" aria-current="page">Schedule test</li>
            </ol>
        </nav>
        <!-- End breadcrumb -->
        <div class="d-xl-flex align-items-center justify-content-between ">
            <div>
                <h4 class="mg-b-0 tx-spacing--1">Schedule registry list</h4>
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
        <div class="customer-table mg-t-30">
            <div class="table-responsive">
                <table class="table table-striped table-sm collapse-table table-vcenter mg-b-0">
                    <thead class="thead-light">
                        <tr>
                            <th>Customer</th>
                            <th>Course</th>
                            <th>Deposit</th>
                            <th>Note</th>
                            <th>Date deposit</th>
                            <th>Date schedule</th>
                            <th class="no-wrap">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="no-wrap">Trương Đình Lan Thi</td>
                            <td>[138 Huỳnh Lan Khánh] IELST - Professional 18/04, 18:00 - 20:00</td>
                      
                            <td>10,000,000</td>
                            <td>HP: 16.500.000, KM: 0, Nợ: 6.050.000, Combo 0-5.5.</td>
                            <td>02/09/2018</td>
                            <td>02/09/2018</td>
                            <td>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:;" class="material-icons" id="dropdown-id-2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more_vert</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown-id-2">
                                        <a class="dropdown-item btn-icon" href="#customerDetail" data-toggle="modal" data-target="#customerDetail"><i data-feather="eye"></i> View</a>
                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="dollar-sign"></i>
                                            Refund request</a>
                                     
                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="user-plus"></i>
                                            Convert student</a>
                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="user-x"></i>
                                            Cancel registry</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-wrap">Trương Đình Lan Thi</td>
                            <td>[138 Huỳnh Lan Khánh] IELST - Professional 18/04, 18:00 - 20:00</td>
                      
                            <td>10,000,000</td>
                            <td>HP: 16.500.000, KM: 0, Nợ: 6.050.000, Combo 0-5.5.</td>
                            <td>02/09/2018</td>
                            <td>02/09/2018</td>
                            <td>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:;" class="material-icons" id="dropdown-id-2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more_vert</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown-id-2">
                                        <a class="dropdown-item btn-icon" href="#customerDetail" data-toggle="modal" data-target="#customerDetail"><i data-feather="eye"></i> View</a>
                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="dollar-sign"></i>
                                            Refund request</a>
                                     
                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="user-plus"></i>
                                            Convert student</a>
                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="user-x"></i>
                                            Cancel registry</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-wrap">Trương Đình Lan Thi</td>
                            <td>[138 Huỳnh Lan Khánh] IELST - Professional 18/04, 18:00 - 20:00</td>
                      
                            <td>10,000,000</td>
                            <td>HV không sắp xếp được lịch học nên học song song 2 lớp: Pronunciation lớp GR1009 và Grammar lớp mới</td>
                            <td>02/09/2018</td>
                            <td>02/09/2018</td>
                            <td>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:;" class="material-icons" id="dropdown-id-2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more_vert</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown-id-2">
                                        <a class="dropdown-item btn-icon" href="#customerDetail" data-toggle="modal" data-target="#customerDetail"><i data-feather="eye"></i> View</a>
                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="dollar-sign"></i>
                                            Refund request</a>
                                     
                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="user-plus"></i>
                                            Convert student</a>
                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="user-x"></i>
                                            Cancel registry</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-wrap">Trương Đình Lan Thi</td>
                            <td>[138 Huỳnh Lan Khánh] IELST - Professional 18/04, 18:00 - 20:00</td>
                      
                            <td>10,000,000</td>
                            <td>HP: 16.500.000, KM: 0, Nợ: 2.050.000, Combo 0-5.5 => Hoàn tiền</td>
                            <td>02/09/2018</td>
                            <td>02/09/2018</td>
                            <td>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:;" class="material-icons" id="dropdown-id-2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more_vert</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown-id-2">
                                        <a class="dropdown-item btn-icon" href="#customerDetail" data-toggle="modal" data-target="#customerDetail"><i data-feather="eye"></i> View</a>
                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="dollar-sign"></i>
                                            Refund request</a>
                                     
                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="user-plus"></i>
                                            Convert student</a>
                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="user-x"></i>
                                            Cancel registry</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-wrap">Trương Đình Lan Thi</td>
                            <td>[138 Huỳnh Lan Khánh] IELST - Professional 18/04, 18:00 - 20:00</td>
                      
                            <td>10,000,000</td>
                            <td>HP: 16.500.000, KM: 0, Nợ: 2.050.000, Combo 0-5.5 => Hoàn tiền</td>
                            <td>02/09/2018</td>
                            <td>02/09/2018</td>
                            <td>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:;" class="material-icons" id="dropdown-id-2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more_vert</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown-id-2">
                                        <a class="dropdown-item btn-icon" href="#customerDetail" data-toggle="modal" data-target="#customerDetail"><i data-feather="eye"></i> View</a>
                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="dollar-sign"></i>
                                            Refund request</a>
                                     
                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="user-plus"></i>
                                            Convert student</a>
                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="user-x"></i>
                                            Cancel registry</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                       
                       
                    </tbody>
                </table>
            </div>
        </div>
        <nav aria-label="Page navigation" class="mg-t-30">
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


<!-- Modal add test info-->
<div class="modal fade" id="customerDetail" tabindex="-1" role="dialog" aria-labelledby="customerDetailTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="customerDetailTitle">Customer detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="personal-info">
                <fieldset class="form-fieldset">
                    <legend>Personal Information</legend>
                    <div class="form-row">
                        <div class="col-sm-6 form-group">
                            <label for="phone_number" class="">Phone</label>
                            <input type="tel" class="form-control" id="phone_number"
                                placeholder="Phone number" value="">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="full_name" class="">Full name</label>
                            <input type="text" class="form-control" id="full_name" placeholder="Full name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 form-group">
                        <label for="email" class="">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email address">
                        </div>
                        <div class="col-sm-6 form-group">
                        <label for="date_of_birth" class="">Date of birth</label>
                        <input type="text" class="form-control datetimepicker date-only" id="date_of_birth"
                                placeholder="Date of birth">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 form-group">
                            <label for="address" class="">Address</label>
                            <input type="tel" class="form-control" id="address" placeholder="Your address">
                        </div>
                        <div class="col-sm-12 form-group">
                            
                            </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 form-group">
                        <label for="cmnd" class="">Identify Card</label>
                        <input type="text" class="form-control" id="cmnd" placeholder="Identity Card">
                        </div>
                        <div class="col-sm-6 form-group">
                        <label for="issued_at" class="">Issued at</label>
                        <input type="text" class="form-control" id="issued_at" placeholder="Issued at">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 form-group">
                        <label for="date_of_issued" class="">Date of issued</label>
                        <input type="text" class="form-control" id="date_of_issued"
                                placeholder="Date of issued">
                        </div>
                        <div class="col-sm-6 form-group">
                        <label for="select_job" class="">Job</label>
                        <select name="job" id="select_job" class="custom-select">
                                <option value="" disabled selected>Select job</option>
                                <option value="student">Student</option>
                                <option value="student">Student</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 form-group">
                        <label for="work_place" class="">Workplace</label>
                        <input type="text" class="form-control" id="work_place"
                                placeholder="Workplace">
                        </div>
                        <div class="col-sm-6 form-group">
                        <label for="home_contact" class="">Home contact</label>
                        <input type="text" class="form-control" id="home_contact"
                                placeholder="Home contact">
                        </div>
                    </div>

                    <div class="form-row">
                      
                        <div class="col-sm-12 form-group">
                            <div class=" d-flex align-items-center">
                                <label class="mg-b-1">Sex</label>
                                <div class="mg-l-20 custom-control custom-radio">
                                    <input type="radio" name="sex" class="custom-control-input" id="sex-male">
                                    <label for="sex-male" class="custom-control-label">Male</label>
                                </div>
                                <div class="mg-l-20 custom-control custom-radio">
                                    <input type="radio" name="sex" class="custom-control-input" id="sex-female">
                                    <label for="sex-female" class="custom-control-label">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"></div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 form-group">
                        <label for="Input" class="">Input</label>
                        <input type="text" class="form-control" id="time-exam"
                                placeholder="Input">
                        </div>
                        <div class="col-sm-6 form-group">
                        <label for="target" class="">Target</label>
                        <input type="text" class="form-control" id="target"
                                placeholder="Target">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 form-group">
                        <label for="exam-time" class="">Exam time</label>
                        <input type="text" class="form-control datetimepicker date-only" id="exam-time"
                        placeholder="dd/mm/yyyy">
                        </div>
                        <div class="col-sm-6 form-group">
                        <label for="learn-target" class="">Learning target</label>
                            <select name="" id="learn-target" class="custom-select">
                                <option value="" disabled seleted>Select target</option>
                                <option value="target1">Target 1</option>
                                <option value="target1">Target 2</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-fieldset mg-t-30">
                    <legend>Registry schedule information</legend>
                    <div class="form-row">
                        <div class="col-sm-6 form-group">
                            <label for="if-place" class="">Place</label>
                            <select name="place" id="if-place" class="custom-select">
                                <option value="" selected disabled>Select place</option>
                                <option value="">Hồ Chí Minh</option>
                                <option value="Hà Nôi">Hà Nội</option>
                            </select>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="if-course" class="">Course</label>
                            <select name="course" id="if-course" class="custom-select">
                                <option value="" selected disabled>Select course</option>
                                <option value="">A IELST - Advanced</option>
                                <option value="">A IELST - Advanced</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 form-group">
                            <label for="if-Branch" class="">Branch</label>
                            <select name="Branch" id="if-Branch" class="custom-select">
                                <option value="" selected disabled>Select Branch</option>
                                <option value="">Yen Lang</option>
                                <option value="Hà Nôi">Huynh Lan Khánh</option>
                            </select>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="if-Time" class="">Time</label>
                            <select name="Time" id="if-Time" class="custom-select">
                                <option value="" selected disabled>Select Time</option>
                                <option value="">18:00 - 19:30</option>
                                <option value="">18:00 - 19:30</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-3 form-group">
                        <label for="if-Date" class="">Date schedule</label>
                        <input type="text" class="form-control datetimepicker date-only" id="if-Date"
                                placeholder="dd/mm/yyyy">
                        </div>
                        <div class="col-sm-9 form-group">
                        <label for="if-Note" class="">Note</label>
                        <input type="text" class="form-control" id="if-note"
                                placeholder="Note schedule">
                        </div>
                    </div>
                   
                </fieldset>
                <fieldset class="form-fieldset mg-t-30">
                    <legend>Additional deposit</legend>
                    <div class="form-row">
                        <div class="col-sm-4 form-group">
                            <label for="if-payment-method" class="">Method payment</label>
                            <select name="payment-method" id="if-payment-method" class="custom-select">
                                <option value="" selected disabled>Select method</option>
                                <option value="">Tiền mặt</option>
                                <option value="">Chuyển khoản</option>
                            </select>
                        </div>
                        <div class="col-sm-4 form-group">
                            <label for="if-Money" class="">Money</label>
                            <input type="tel" class="form-control" id="if-Money"
                                placeholder="0" data-type="currency">
                        </div>
                       
                        <div class="col-sm-4 form-group">
                            <label for="if-branch-bill" class="">Branch receive</label>
                            <select name="branch-bill" id="if-branch-bill" class="custom-select select2">
                                <option value="" selected disabled>Select course</option>
                                <option value="">Yen Lang</option>
                                <option value="">Yen Lang</option>
                            </select>
                        </div>
                       
                    </div>
        
                    <div class="form-row">
                        <div class="form-group">
                        </div>
                        <div class="col-sm-12 form-group">
                        <label for="if-Note" class="">Note</label>
                        <input type="text" class="form-control" id="if-note"
                                placeholder="Note schedule">
                        </div>
                    </div>
                   
                </fieldset>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  <!-- Task detail Info -->
  <div class="detail-fixed col-12 col-md-4" id="customer-detail">
            <div class="bg-overlay"></div>
            <div class="content-detail-wrapper">
                <div class="modal-header">
                    <h5 class="d-flex align-items-center justify-content-between flex-grow-1"><span class="">Customer info</span><a href="javascript:;"
                            class="fl-right close-editmode"><i
                                class="material-icons">close</i></a>
                    </h5>
                </div>
                <div class="modal-content task-detail-wrap">
                    <div class="row" id="test-register">
                    <div class="col-12">
                            <fieldset class="form-fieldset">
                                <legend>Personal Information</legend>
                                <div class="form-row">
                                    <div class="col-sm-6 form-group">
                                        <label for="phone_number" class="">Phone</label>
                                        <input type="tel" class="form-control" id="phone_number"
                                            placeholder="Phone number" value="">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label for="full_name" class="">Full name</label>
                                        <input type="text" class="form-control" id="full_name" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-sm-6 form-group">
                                    <label for="email" class="">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email address">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                    <label for="date_of_birth" class="">Date of birth</label>
                                    <input type="text" class="form-control datetimepicker date-only" id="date_of_birth"
                                            placeholder="Date of birth">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-sm-12 form-group">
                                        <label for="address" class="">Address</label>
                                        <input type="tel" class="form-control" id="address" placeholder="Your address">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-sm-6 form-group">
                                    <label for="cmnd" class="">Identify Card</label>
                                    <input type="text" class="form-control" id="cmnd" placeholder="Identity Card">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                    <label for="issued_at" class="">Issued at</label>
                                    <input type="text" class="form-control" id="issued_at" placeholder="Issued at">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-sm-6 form-group">
                                    <label for="date_of_issued" class="">Date of issued</label>
                                    <input type="text" class="form-control" id="date_of_issued"
                                            placeholder="Date of issued">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                    <label for="select_job" class="">Job</label>
                                    <select name="job" id="select_job" class="form-control">
                                            <option value="" disabled selected>Select job</option>
                                            <option value="student">Student</option>
                                            <option value="student">Student</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-sm-6 form-group">
                                    <label for="work_place" class="">Workplace</label>
                                    <input type="text" class="form-control" id="work_place"
                                            placeholder="Workplace">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                    <label for="home_contact" class="">Home contact</label>
                                    <input type="text" class="form-control" id="home_contact"
                                            placeholder="Home contact">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-sm-12 form-group">
                                        <div class=" d-flex align-items-center">
                                            <label class="mg-b-1">Sex</label>
                                            <div class="mg-l-20 custom-control custom-radio">
                                                <input type="radio" name="sex" class="custom-control-input" checked>
                                                <label class="custom-control-label">Male</label>
                                            </div>
                                            <div class="mg-l-20 custom-control custom-radio">
                                                <input type="radio" name="sex" class="custom-control-input">
                                                <label class="custom-control-label">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                    </div>
                    <div class="col-12 mg-t-15">
                        <fieldset class="form-fieldset">
                            <legend>Schedule Information</legend>
                            <div class="form-row">
                                <div class="col-sm-12 form-group">
                                    <label for="sc_reservator" class="">Reservator</label>
                                    <select name="Reservator" id="sc_Reservator" class="form-control select2">
                                        <option value="" selected disabled>Select people</option>
                                        <option value="">Truong Thuc</option>
                                        <option value="">Truong Thuc</option>
                                        <option value="">Truong Thuc</option>
                                        <option value="">Truong Thuc</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 form-group">
                                    <label for="sc_branch" class="">Branch</label>
                                    <select name="branch" id="sc_branch" class="form-control select2">
                                        <option value="" selected disabled>Select branch</option>
                                        <option value="">65 Yen Lang</option>
                                        <option value="">65 Yen Lang</option>
                                        <option value="">65 Yen Lang</option>
                                        <option value="">65 Yen Lang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 form-group">
                                    <label for="sc_branch" class="">Time</label>
                                    <input type="text" class="form-control datetimepicker">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 form-group">
                                    <label for="sc_branch" class="">Note</label>
                                    <textarea name="" id="" rows="10" placeholder="" class="form-control"></textarea>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>

                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action close-editmode btn btn-dark">Close</a>
                </div>
            </div>

        </div>
        <!-- END: Task detail Info -->
<?php require_once( 'footer.php' ); ?>
<script>
$(document).ready(function() {
    
});
</script>