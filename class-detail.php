<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0 ">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-30">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Email template</li>
            </ol>
        </nav>
        <!-- End breadcrumb -->

        <div class="email-form-template mg-t-30">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="title mg-b-0">Subject</h6>
                                <a href="javascript:;" class="btn btn-primary" data-toggle="modal"
                                    data-target="#addSubject">Add</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-vcenter table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>
                                                Subject name
                                            </th>
                                            <th>Additional</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SPEAKING TEST</td>
                                            <td>False</td>
                                            <td>
                                                <a class="dropdown-item btn-icon" href="#"><i data-feather="edit"></i>
                                                    Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Listening</td>
                                            <td>False</td>
                                            <td>
                                                <a class="dropdown-item btn-icon" href="#"><i data-feather="edit"></i>
                                                    Edit</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-8 mg-t-15 mg-md-t-0">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="title mg-b-0">Curriculum</h6>
                                <a href="javascript:;" class="btn btn-primary" data-toggle="modal"
                                    data-target="#addClass">Add</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-vcenter table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>
                                                Class
                                            </th>
                                            <th>Curriculum</th>
                                            <th>Class hour</th>
                                            <th>Lesson</th>
                                            <th>Visibility</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>TEST SPEAKING 2</td>
                                            <td>SPEAKING TEST</td>
                                            <td>3 class hour</td>
                                            <td>6 lesson</td>
                                            <td>False</td>
                                            <td>
                                                <div class="dropdown dropdown-icon">
                                                    <a href="javascript:;" class="material-icons" id="dropdown-id-1"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">more_vert</a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-id-1">
                                                        <a class="dropdown-item btn-icon" href="#"><i
                                                                data-feather="eye"></i> View detail</a>
                                                        <a class="dropdown-item btn-icon" href="#"><i
                                                                data-feather="book"></i>
                                                            Documents</a>
                                                        <a class="dropdown-item btn-icon" href="#"><i
                                                                data-feather="book-open"></i>
                                                            Excercises</a>
                                                        <a class="dropdown-item btn-icon" href="#"><i
                                                                data-feather="edit"></i>
                                                            Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TEST SPEAKING 2</td>
                                            <td>SPEAKING TEST</td>
                                            <td>3 class hour</td>
                                            <td>6 lesson</td>
                                            <td>False</td>
                                            <td>
                                                <div class="dropdown dropdown-icon">
                                                    <a href="javascript:;" class="material-icons" id="dropdown-id-1"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">more_vert</a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-id-1">
                                                        <a class="dropdown-item btn-icon" href="#"><i
                                                                data-feather="eye"></i> View detail</a>
                                                        <a class="dropdown-item btn-icon" href="#"><i
                                                                data-feather="book"></i>
                                                            Documents</a>
                                                        <a class="dropdown-item btn-icon" href="#"><i
                                                                data-feather="book-open"></i>
                                                            Excercises</a>
                                                        <a class="dropdown-item btn-icon" href="#"><i
                                                                data-feather="edit"></i>
                                                            Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TEST SPEAKING 2</td>
                                            <td>SPEAKING TEST</td>
                                            <td>3 class hour</td>
                                            <td>6 lesson</td>
                                            <td>False</td>
                                            <td>
                                                <div class="dropdown dropdown-icon">
                                                    <a href="javascript:;" class="material-icons" id="dropdown-id-1"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">more_vert</a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-id-1">
                                                        <a class="dropdown-item btn-icon" href="#"><i
                                                                data-feather="eye"></i> View detail</a>
                                                        <a class="dropdown-item btn-icon" href="#"><i
                                                                data-feather="book"></i>
                                                            Documents</a>
                                                        <a class="dropdown-item btn-icon" href="#"><i
                                                                data-feather="book-open"></i>
                                                            Excercises</a>
                                                        <a class="dropdown-item btn-icon" href="#"><i
                                                                data-feather="edit"></i>
                                                            Edit</a>
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
            </div>

        </div>

    </div><!-- container -->
</div><!-- content -->

<div class="modal fade" id="addSubject" tabindex="-1" role="dialog" aria-labelledby="addSubjectTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSubjectTitle">Add subject</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="personal-info">
                    <div class="form-row">
                        <div class="col-sm-12 form-group">
                            <label for="if_fullname" class="">Subject name</label>
                            <input type="text" class="form-control" id="if_fullname" placeholder="Full name">
                        </div>
                        <div class="col-sm-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Additional</label>
                            </div>
                        </div>

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

<div class="modal fade" id="addClass" tabindex="-1" role="dialog" aria-labelledby="addClassTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addClassTitle">Add Curriculum
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="personal-info">
                    <div class="form-row">
                        <div class="col-sm-6 col-md-4 form-group">
                            <label for="" class="">Curriculum name</label>
                            <input type="text" class="form-control" placeholder="Full name">
                        </div>
                        <div class="col-sm-6 col-md-4 form-group">
                            <label class="">Curriculum type</label>
                            <select name="" id="" class="form-control">
                                <option value="">Curriculum type</option>
                                <option value="">3 class hour</option>
                                <option value="">2 class hour</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-md-4 form-group">
                            <label  class="">Number lesson</label>
                            <input type="text" class="form-control"  placeholder="6 ">
                        </div>
                        <div class="col-sm-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">Visible</label>
                            </div>
                        </div>
                        
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

<script>
// $(document).ready(function() {

// });
</script>