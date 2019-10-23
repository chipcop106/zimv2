<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>

<link rel="stylesheet" href="assets/css/dashforge.profile.css">

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

                </div><!-- row -->

            </div><!-- profile-sidebar -->
            <div class="config-teacher">
                <div class="teacher-infomation mg-b-15">
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
                                <input type="radio" name="sex" class="custom-control-input" id="sex-male" checked>
                                <label class="custom-control-label" for="sex-male">Male</label>
                            </div>
                            <div class="mg-l-20 custom-control custom-radio">
                                <input type="radio" name="sex" class="custom-control-input" id="sex-female">
                                <label class="custom-control-label" for="sex-female">Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 pt-0">Password</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <div class="row flex-grow-1">
                              <div class="form-group col-12 col-md-4 mg-b-0">
                                  <label class="d-block">Old password</label>
                                  <input type="password" class="form-control" placeholder="" value="@lamandnam">
                              </div>
                              <div class="form-group col-12 col-md-4 mg-b-0">
                                  <label class="d-block">New password</label>
                                  <input type="password" class="form-control" placeholder="" value="@lamandnam">
                              </div>
                              <div class="form-group col-12 col-md-4 mg-b-0">
                                  <label class="d-block">Re-new password</label>
                                  <input type="password" class="form-control" placeholder="" value="@lamandnam">
                              </div>
                          </div>
                        </div>
                    </div>
                    <div class="text-left">
                    <button type="button" class="btn btn-primary">Update</button>
                    </div>
                
                 
                </fieldset>
                </div>
                <div class="list-student-course">
                    <div class="table-responsive">
                        <table id="col-left-fixed" class="table table-bordered centered table-vcenter">
                            <thead>
                                <tr>
                                    <th class="sticky-col">Class name</th>
                                    <th class="teach">Teach</th>
                                    <th>Grammar</th>
                                    <th>Pronunciation</th>
                                    <th>Final test</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="sticky-col  class-name">A-IELTS Get Ready</td>
                                    <td class="teach">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="class-id-1">
                                            <label class="custom-control-label" for="class-id-1"></label>
                                        </div>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table id="col-left-fixed" class="table table-bordered centered table-vcenter">
                            <thead>
                                <tr>
                                    <th class="sticky-col">Class name</th>
                                    <th class="teach">Teach</th>
                                    <th>Writing Task 2</th>
                                    <th>Speaking</th>
                                    <th>Writing Task 1</th>
                                    <th>Listening</th>
                                    <th>Reading</th>
                                    <th>Grammar + Pronunciation</th>
                                    <th>Writing 1-1</th>
                                    <th>Pronunciation</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="sticky-col class-name">A-IELTS 1-1</td>
                                    <td class="teach">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="class-id-2">
                                            <label class="custom-control-label" for="class-id-2"></label>
                                        </div>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>


                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table id="col-left-fixed" class="table table-bordered centered table-vcenter">
                            <thead>
                                <tr>
                                    <th class="sticky-col">Class name</th>
                                    <th class="teach">Teach</th>
                                    <th>Writing Task 2</th>
                                    <th>Speaking</th>
                                    <th>Writing Task 1</th>
                                    <th>Listening</th>
                                    <th>Reading</th>
                                    <th>Grammar + Pronunciation</th>
                                    <th>Writing 1-1</th>
                                    <th>Pronunciation</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="sticky-col class-name">A-IELTS Foundation</td>
                                    <td class="teach">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="class-id-3">
                                            <label class="custom-control-label" for="class-id-3"></label>
                                        </div>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>


                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table id="col-left-fixed" class="table table-bordered centered table-vcenter">
                            <thead>
                                <tr>
                                    <th class="sticky-col">Class name</th>
                                    <th class="teach">Teach</th>
                                    <th>Grammar</th>
                                    <th>Pronunciation</th>
                                    <th>Listening & Reading</th>
                                    <th>Final test</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="sticky-col  class-name">A-IELTS Get Ready</td>
                                    <td class="teach">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="class-id-1">
                                            <label class="custom-control-label" for="class-id-1"></label>
                                        </div>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>
                                    <td class="select-td">
                                        <select class="custom-select">
                                            <option selected>Capacity</option>
                                            <option value="1">Good</option>
                                            <option value="2">Average</option>
                                            <option value="3">Bad</option>
                                        </select>
                                    </td>


                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div><!-- media -->
    </div><!-- container -->
</div><!-- content -->



<?php require_once( 'footer.php' ); ?>


<script>
$(document).ready(function() {
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
});
</script>