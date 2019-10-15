<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0 ">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-30">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Schedule test</li>
            </ol>
        </nav>
        <!-- End breadcrumb -->

        <div class="schedule-test-form mg-t-30">
            <div class="row" id="test-register">
                <div class="col-12 col-md-6">
                        <fieldset class="form-fieldset">
                            <legend>Personal Information</legend>
                            <div class="form-row">
                                <div class="col-sm-6 form-group">
                                    <label for="phone_number" class="">Phone</label>
                                    <input type="tel" class="form-control" id="phone_number"
                                        placeholder="Phone number" value="">
                                    <a href="javascript:;" class="search-number"><i data-feather="search"></i></a>
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
                                            <input type="radio" name="sex" class="custom-control-input" id="sex-male">
                                            <label for="sex-male" class="custom-control-label">Male</label>
                                        </div>
                                        <div class="mg-l-20 custom-control custom-radio">
                                            <input type="radio" name="sex" class="custom-control-input" id="sex-female">
                                            <label for="sex-female" class="custom-control-label">Female</label>
                                        </div>
                                    </div>
                                </div>
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
                </div>
                <div class="col-12 col-md-6 mg-t-15 mg-md-t-0">
                    <fieldset class="form-fieldset">
                        <legend>Form Information</legend>
                        <div class="form-row">
                            <div class="col-sm-12 form-group">
                                <label for="sc_reservator" class="">Form type</label>
                                <select name="Reservator" id="form-type" class="form-control">
                                    <option value=""  disabled>Select form type</option>
                                    <option value="#reg-course" selected>Đăng ký học</option>
                                    <option value="#reg-schedule">Hẹn đăng ký</option>
                                    <option value="#reg-service">Mua dịch vụ</option>
                                </select>
                            </div>
                        </div>
                        <div id="reg-course" class="form-template show">
                            <div class="form-row">
                                <div class="col-sm-6 form-group">
                                    <label class="">Branch</label>
                                    <select name="branch" class="custom-select">
                                        <option value="" selected disabled>Select branch</option>
                                        <option value="">65 Yen Lang</option>
                                        <option value="">65 Yen Lang</option>
                                        <option value="">65 Yen Lang</option>
                                        <option value="">65 Yen Lang</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="">Course</label>
                                    <select name="course" class="custom-select select2">
                                        <option value="" selected disabled>Select course</option>
                                        <option value="">IELST advance</option>
                                        <option value="">IELST professional</option>
                                        <option value="">IELST immedietly</option>
                                        <option value="">IELST beginner</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 form-group">
                                    <label class="">Time</label>
                                    <select name="open-time" class="custom-select select2">
                                        <option value="" selected disabled>Open day</option>
                                        <option value="">17/04 10:30 - 12:30</option>
                                        <option value="">17/04 08:00 - 10:00</option>
                                        <option value="">17/04 06:00 - 08:00</option>
                                        <option value="">10/06 11:30 - 13:30</option>
                       
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="">Price</label>
                                    <input type="text" class="form-control" value="3,000,000" disabled>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 form-group">
                                    <label for="promotion_code" class="">Promotion code</label>
                                    <input type="tel" class="form-control" id="promotion_code"
                                        placeholder="Promotion code" value="">
                                    <a href="javascript:;" class="search-number"><i data-feather="search"></i></a>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="">Discount</label>
                                    <input type="text" class="form-control" value="1,000,000" disabled>
                                </div>
                            </div>
                            <div class="checkout-form mg-b-20">
                                <fieldset class="form-fieldset">
                                <legend>Checkout</legend>
                                    <div class="form-row">
                                        <div class="form-group col-sm-6">
                                            <label>Payment method</label>
                                            <select name="" id="" class="custom-select">
                                                <option value="" selected disabled>Select method</option>
                                                <option value="">Tiền mặt</option>
                                                <option value="">Chuyển khoản</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="d-block">Money</label>
                                            <input type="text" class="form-control" placeholder="0" data-type="currency">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-6">
                                            <label>Amount remaining</label>
                                            <input type="text" class="form-control" placeholder="0" data-type="currency">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="d-block">Date</label>
                                            <input type="text" class="form-control datetimepicker date-only" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            
                        </div>
                        <div id="reg-schedule" class="form-template">
                            <div class="form-row">
                                <div class="col-sm-6 form-group">
                                    <label class="">Branch</label>
                                    <select name="branch" class="custom-select">
                                        <option value="" selected disabled>Select branch</option>
                                        <option value="">65 Yen Lang</option>
                                        <option value="">65 Yen Lang</option>
                                        <option value="">65 Yen Lang</option>
                                        <option value="">65 Yen Lang</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="">Course</label>
                                    <select name="course" class="custom-select select2">
                                        <option value="" selected disabled>Select course</option>
                                        <option value="">IELST advance</option>
                                        <option value="">IELST professional</option>
                                        <option value="">IELST immedietly</option>
                                        <option value="">IELST beginner</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 form-group">
                                    <label class="">Time</label>
                                    <select name="open-time" class="custom-select select2">
                                        <option value="" selected disabled>Open day</option>
                                        <option value="">17/04 10:30 - 12:30</option>
                                        <option value="">17/04 08:00 - 10:00</option>
                                        <option value="">17/04 06:00 - 08:00</option>
                                        <option value="">10/06 11:30 - 13:30</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="">Payment method</label>
                                    <select name="method" class="custom-select select2">
                                        <option value="" selected disabled>Select method</option>
                                        <option value="">Tiền mặt</option>
                                        <option value="">Chuyển khoản</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 form-group">
                                    <label class="">Amount paid</label>
                                    <input type="tel" class="form-control"
                                        placeholder="0" value="">
                                   
                                </div>
                                <div class="col-sm-6 form-group">
                                <label class="">Branch receive</label>
                                        <select name="branch" class="custom-select">
                                            <option value="" selected disabled>Select branch</option>
                                            <option value="">65 Yen Lang</option>
                                            <option value="">65 Yen Lang</option>
                                            <option value="">65 Yen Lang</option>
                                            <option value="">65 Yen Lang</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 form-group">
                                <label class="">Schedule</label>
                                        <input type="text" class="form-control datetimepicker date-only" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 form-group">
                                    <label class="">Note invoice</label>
                                    <input type="text" class="form-control" placeholder="Note">

                                </div>
                                <div class="col-sm-12 form-group">
                                    <label class="">Note schedule</label>
                                    <input type="text" class="form-control" placeholder="Note">
                                </div>
                            </div>
                        </div>
                        <div id="reg-service" class="form-template">
                            <div class="form-row">
                                <div class="col-sm-6 form-group">
                                    <label class="">Service</label>
                                    <select name="course" class="custom-select select2">
                                        <option value="" selected disabled>Select course</option>
                                        <option value="">IELST advance</option>
                                        <option value="">IELST professional</option>
                                        <option value="">IELST immedietly</option>
                                        <option value="">IELST beginner</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="">Examinations</label>
                                    <select name="course" class="custom-select select2">
                                        <option value="" selected disabled>Select exam</option>
                                        <option value="">Tháng 04/2019</option>
                                        <option value="">Tháng 08/2019</option>
                                        <option value="">Tháng 12/2019</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 form-group">
                                    <label class="">Provider</label>
                                    <select name="course" class="custom-select select2">
                                        <option value="" selected disabled>Select provider</option>
                                        <option value="">British council</option>
                                        <option value="">IDP</option>
                                        <option value="">ZIM school</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="">Date reserve</label>
                                    <input type="text" class="datetimepicker date-only form-control" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 form-group">
                                    <label class="">Payment method</label>
                                    <select name="method" class="custom-select select2">
                                        <option value="" selected disabled>Select method</option>
                                        <option value="">Tiền mặt</option>
                                        <option value="">Chuyển khoản</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="">Price</label>
                                    <input type="text" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 form-group">
                                    <label class="">Branch receive</label>
                                    <select name="course" class="custom-select select2">
                                        <option value="" selected disabled>Select Branch</option>
                                        <option value="">65 Yen Lang</option>
                                        <option value="">123 Huynh Lan Khanh</option>
                                        <option value="">45 Tran Phu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 form-group">
                                    <label class="">Note</label>
                                    <input type="text" class="form-control" placeholder="Note...">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 pd-b-0">
                                <a href="#" class="btn btn-primary">Confirm</a>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

    </div><!-- container -->
</div><!-- content -->
<?php require_once( 'footer.php' ); ?>
<script>
    $(document).ready(function(){
        $('#form-type').on('change',function(){
            let value = $(this).val();
            var $target = $(value).addClass('show');
            $('.form-template').not($target).removeClass('show');
        });
    });
</script>
