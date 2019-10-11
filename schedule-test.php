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
                <div class="col-12 col-md-8">
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
                <div class="col-12 col-md-4 mg-t-15 mg-md-t-0">
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
                        <div class="form-row">
                            <div class="col-sm-12 pd-b-0">
                                <a href="#" class="btn btn-primary">Save info</a>
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
       
    });
<script>
