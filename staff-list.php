<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0 ">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-30">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Customer list</li>
            </ol>
        </nav>
        <!-- End breadcrumb -->

        <div class="d-xl-flex align-items-center justify-content-between ">
            <div>
                <a href="javascript:;" class="btn btn-primary" data-toggle="modal" data-target="#addStaff">Add</a>
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
                <table class="table table-striped table-vcenter">
                    <thead class="thead-light">
                        <tr>
                            <th>Location</th>
                            <th>Full name</th>
                            <th>Phone number</th>
                            <th>Email</th>
                            <th>Source</th>
                            <th>Supporter</th>
                            <th>Status</th>
                            <th>Join date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ha Noi</td>
                            <td>Truong Van Lam</td>
                            <td>0988493434</td>
                            <td>vanlam@gmail.com</td>
                            <td>https://ielts-share.com</td>
                            <td>Hoang Thuong</td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td>27/04/2019</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-icon btn-sm">
                                    <i data-feather="eye"></i> View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Ha Noi</td>
                            <td>Truong Van Lam</td>
                            <td>0988493434</td>
                            <td>vanlam@gmail.com</td>
                            <td>https://ielts-share.com</td>
                            <td>Hoang Thuong</td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td>27/04/2019</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-icon btn-sm">
                                    <i data-feather="eye"></i> View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Ha Noi</td>
                            <td>Truong Van Lam</td>
                            <td>0988493434</td>
                            <td>vanlam@gmail.com</td>
                            <td>https://ielts-share.com</td>
                            <td>Hoang Thuong</td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td>27/04/2019</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-icon btn-sm">
                                    <i data-feather="eye"></i> View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Ha Noi</td>
                            <td>Truong Van Lam</td>
                            <td>0988493434</td>
                            <td>vanlam@gmail.com</td>
                            <td>https://ielts-share.com</td>
                            <td>Hoang Thuong</td>
                            <td><span class="badge badge-secondary">Decative</span></td>
                            <td>27/04/2019</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-icon btn-sm">
                                    <i data-feather="eye"></i> View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Ha Noi</td>
                            <td>Truong Van Lam</td>
                            <td>0988493434</td>
                            <td>vanlam@gmail.com</td>
                            <td>https://ielts-share.com</td>
                            <td>Hoang Thuong</td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td>27/04/2019</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-icon btn-sm">
                                    <i data-feather="eye"></i> View
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <nav aria-label="Page navigation" class="mg-t-10">
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
<div class="modal fade" id="addStaff" tabindex="-1" role="dialog" aria-labelledby="addStaffTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addStaffTitle">Add staff</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="personal-info">
                    <fieldset class="form-fieldset">
                        <legend>Information</legend>
                        <div class="form-row">
                            <div class="col-sm-6 form-group">
                                <label for="if_fullname" class="">Name</label>
                                <input type="text" class="form-control" id="if_fullname" placeholder="Full name">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="if-phone_number" class="">Phone</label>
                                <input type="tel" class="form-control" id="if-phone_number" placeholder="Phone number"
                                    value="">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-sm-6 form-group">
                                <label for="email" class="">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email address">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="if-address" class="">Address</label>
                                <input type="text" class="form-control" id="if-address" placeholder="Your address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6 form-group">
                                <label for="role" class="">Role</label>
                                <select name="" id="role" class="form-control">
                                    <option value="" selected disabled>Select role</option>
                                    <option value="">Super Admin</option>
                                    <option value="">Supporter</option>
                                    <option value="">Teacher</option>
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="if-branch" class="">Branch</label>
                                <select name="" id="if-branch" class="form-control">
                                    <option value="" selected disabled>Select branch</option>
                                    <option value="">65 Yen Lang</option>
                                    <option value="">35 Tran Phu</option>
                                    <option value="">138 Huynh Lan Khanh</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
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