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
        <div class="row mg-b-30">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mg-b-0">Template lists</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-vcenter table-bordered table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>
                                                Title
                                            </th>
                                            <th>Note</th>
                                            <th>Source</th>
                                            <th>Saler</th>
                                            <th>Recieve</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Đăng ký nhận tài liệu trên mona.media</td>
                                            <td>này ghi chú cho biết nó có gì thôi. Dùng đăng với chạy qc fanpage</td>
                                            <td>Mona Tkw</td>
                                            <td>Huong tram</td>
                                            <td><span class="badge badge-info">Manager</span></td>
                                            <td>
                                                <div class="dropdown dropdown-icon">
                                                    <a href="javascript:;" class="material-icons" id="dropdown-id-3"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more_vert</a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-id-3">
                                              
                                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="eye"></i> View</a>
                                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="copy"></i>
                                                            Iframe</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Đăng ký nhận tài liệu trên mona.media</td>
                                            <td>này ghi chú cho biết nó có gì thôi. Dùng đăng với chạy qc fanpage</td>
                                            <td>Mona Tkw</td>
                                            <td>Huong tram</td>
                                            <td><span class="badge badge-info">Manager</span></td>
                                            <td>
                                                <div class="dropdown dropdown-icon">
                                                    <a href="javascript:;" class="material-icons" id="dropdown-id-3"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more_vert</a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-id-3">
                                              
                                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="eye"></i> View</a>
                                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="copy"></i>
                                                            Iframe</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Đăng ký nhận tài liệu trên mona.media</td>
                                            <td>này ghi chú cho biết nó có gì thôi. Dùng đăng với chạy qc fanpage</td>
                                            <td>Mona Tkw</td>
                                            <td>Huong tram</td>
                                            <td><span class="badge badge-info">Manager</span></td>
                                            <td>
                                                <div class="dropdown dropdown-icon">
                                                    <a href="javascript:;" class="material-icons" id="dropdown-id-3"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more_vert</a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-id-3">
                                              
                                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="eye"></i> View</a>
                                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="copy"></i>
                                                            Iframe</a>
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
            <div class="row">
                <div class="col-12 col-md-8">
                    <fieldset class="form-fieldset">
                        <legend>Email template</legend>
                        <div class="form-row">
                            <div class="col-sm-12 form-group">
                                <input type="text" placeholder="Email title" class="form-control">
                            </div>
                        </div>
                        <div id="editor-container"></div>
                    </fieldset>

                </div>
                <div class="col-12 col-md-4 mg-t-15 mg-md-t-0">
                    <fieldset class="form-fieldset">
                        <legend>Form information</legend>
                        <div class="form-row">
                            <div class="col-sm-12 form-group">
                                <label class="">Title</label>
                                <input type="text" class="form-control" placeholder="Form title">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 form-group">
                                <label for="role-receive" class="">Role receive email</label>
                                <select name="Reservator" id="role-receive" class="form-control select2">
                                    <option value="" selected disabled>Select role</option>
                                    <option value="">Administrator</option>
                                    <option value="">Manager</option>
                                    <option value="">Cashie</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 form-group">
                                <label for="sc_supporter" class="">Supporter</label>
                                <select name="supporter" id="sc_supporter" class="form-control select2">
                                    <option value="" selected disabled>Select supporter</option>
                                    <option value="">Truong Thuc</option>
                                    <option value="">Truong Thuc</option>
                                    <option value="">Truong Thuc</option>
                                    <option value="">Truong Thuc</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 form-group">
                                <label for="sc_source" class="">Source</label>
                                <select name="source" id="sc_source" class="form-control select2">
                                    <option value="" selected disabled>Select source</option>
                                    <option value="">Truong Thuc</option>
                                    <option value="">Truong Thuc</option>
                                    <option value="">Truong Thuc</option>
                                    <option value="">Truong Thuc</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-12 form-group">
                                <label for="sc_branch" class="">Note</label>
                                <textarea name="" id="" rows="5" placeholder="" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 pd-b-0">
                                <a href="#" class="btn btn-secondary mg-r-5">Discard</a>
                                <a href="#" class="btn btn-primary">Save changes</a>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
           
        </div>

    </div><!-- container -->
</div><!-- content -->
<?php require_once( 'footer.php' ); ?>
<script src="lib/tinymce/tinymce.min.js"></script>
<script>
$(document).ready(function() {
    tinymce.init({
        selector: '#editor-container',
        menubar: false,
        height: 470
    });

});
</script>