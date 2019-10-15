<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0 ">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1 mg-b-30">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Customer services</li>
        </ol>
        </nav>
        <!-- End breadcrumb -->

        <div class="d-xl-flex align-items-center justify-content-between ">
            <div>
            <h4 class="mg-b-0 tx-spacing--1">Customers services</h4>
            </div>
            <div class="d-xl-block">
                <div class="d-flex justify-content-xl-center mg-t-20 mg-xl-t-0 flex-wrap">
                    <div class="search-form mg-l-5 mg-r-5">
                        <input type="search" class="form-control" placeholder="Search">
                        <button class="btn" type="button"><i data-feather="search"></i></button>
                    </div>
                    <div class="sort-by mg-l-5 mg-r-5">
                        <select class="custom-select">
                            <option value="" disabled selected>Sắp xếp theo</option>
                            <option value="all">Name</option>
                            <option value="all">Phone</option>
                            <option value="1">Email</option>
                            <option value="2">Status</option>
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
           <div class="responsive-table">
               <table class="table table-striped table-vcenter">
                   <thead class="thead-light">
                       <tr>
                           <th>Customer</th>
                           <th>Services</th>
                           <th>Price</th>
                           <th>Payment method</th>
                           <th>Note</th>
                           <th>Date reserve</th>
                           <th>Date exam</th>
                           <th>Provider</th>
                           <th>Actions</th>
                       </tr>
                   </thead>
                   <tbody>
                       <tr>
                            <td>Truong Van Lam</td>
                           <td>Đăng ký thi IELTS tại BC hoặc IDP</td>
                           <td>3,000,000</td>
                           <td>chuyển khoản</td>
                           <td>ghi chú ở đây</td>
                           <td>27/0/2019</td>
                           <td>27/04/2019</td>
                           <td>British Council</td>
                           <td>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:;" class="material-icons" id="dropdown-id-2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more_vert</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown-id-2">
                                        <a class="dropdown-item btn-icon" href="#customerDetail" data-toggle="modal"
                                            data-target="#customerDetail"><i data-feather="eye"></i> View</a>
                                        <a class="dropdown-item btn-icon" href="#refundRequest" data-toggle="modal"
                                            data-target="#refundRequest"><i data-feather="dollar-sign"></i>
                                            Refund request</a>
                                        <a class="dropdown-item btn-icon" href="#" data-toggle="modal" data-target="#addScore"><i data-feather="edit"></i>
                                            Add score</a>
                                    </div>
                                </div>
                           </td>
                       </tr>
                      
                   </tbody>
               </table>
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

<!-- Modal customer info-->
<div class="modal fade" id="customerDetail" tabindex="-1" role="dialog" aria-labelledby="customerDetailTitle"
    aria-hidden="true">
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
                                <input type="tel" class="form-control" id="phone_number" placeholder="Phone number"
                                    value="">
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
                                <input type="text" class="form-control" id="work_place" placeholder="Workplace">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="home_contact" class="">Home contact</label>
                                <input type="text" class="form-control" id="home_contact" placeholder="Home contact">
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
                                <input type="text" class="form-control" id="time-exam" placeholder="Input">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="target" class="">Target</label>
                                <input type="text" class="form-control" id="target" placeholder="Target">
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
                                <input type="text" class="form-control" id="if-note" placeholder="Note schedule">
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
                                <input type="tel" class="form-control" id="if-Money" placeholder="0"
                                    data-type="currency">
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
                                <input type="text" class="form-control" id="if-note" placeholder="Note schedule">
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
<!-- Modal refund info-->
<div class="modal fade" id="refundRequest" tabindex="-1" role="dialog" aria-labelledby="refundRequestTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="refundRequestTitle">Refund request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-sm-4 form-group">
                        <label for="if-payment-method" class="">Name</label>
                        <input type="text" class="form-control" placeholder="" value="Trương Văn Lam" disabled>
                    </div>
                    <div class="col-sm-4 form-group">
                        <label for="if-deposited" class="">Deposited</label>
                        <input type="tel" class="form-control" id="if-deposited" placeholder="0" data-type="currency"
                            value="10,000,000" disabled>
                    </div>

                    <div class="col-sm-4 form-group">
                        <label for="if-Refund" class="">Refund</label>
                        <input type="tel" class="form-control" id="if-Refund" placeholder="0" data-type="currency">
                    </div>

                </div>

                <div class="form-row">
                    <div class="col-sm-3 form-group">
                        <label for="brand-refund">Brand refund</label>
                        <select name="refund-brand" id="brand-refund" class="custom-select select2">
                            <option value="" selected disabled>Select branch</option>
                            <option value="1">Yen Lang</option>
                        </select>
                    </div>
                    <div class="col-sm-9 form-group">
                        <label for="if-Note" class="">Note</label>
                        <input type="text" class="form-control" id="if-note" placeholder="Note schedule">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal add score -->
<div class="modal fade" id="addScore" tabindex="-1" role="dialog" aria-labelledby="addScoreTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addScoreTitle">Cancel student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-sm-6 form-group">
                        <label for="brand-refund">Examination</label>
                        <select name="refund-brand" id="brand-refund" class="custom-select select2">
                            <option value="" selected disabled>Select examination</option>
                            <option value="1">20/01/2019</option>
                            <option value="1">20/01/2019</option>
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="if-date-exam" class="">Date exam</label>
                        <input type="text" class="form-control datetimepicker date-only" id="if-date-exam" placeholder="dd/mm/yyyy">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-3 form-group">
                        <label>LISTENING</label>
                        <input type="text" class="form-control" placeholder="0">
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>SPEAKING</label>
                        <input type="text" class="form-control" placeholder="0">
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>READING</label>
                        <input type="text" class="form-control" placeholder="0">
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>WRITTING</label>
                        <input type="text" class="form-control" placeholder="0">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-3 form-group">
                        <label>TASK 1</label>
                        <input type="text" class="form-control" placeholder="0">
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>TASK 2</label>
                        <input type="text" class="form-control" placeholder="0">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>OVERALL</label>
                        <input type="text" class="form-control" placeholder="0">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php require_once( 'footer.php' ); ?>
