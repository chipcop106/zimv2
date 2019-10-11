<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0 ">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-30">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Branch settings</li>
            </ol>
        </nav>
        <!-- End breadcrumb -->

        <div class="d-xl-flex align-items-center justify-content-between ">
            <div>
                <h4 class="mg-b-0 tx-spacing--1">Branch settings</h4>
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
                            <th>District</th>
                            <th>Branch</th>
                            <th>Address</th>
                            <th>Phone number</th>
                            <th>Visibility</th>
                            <th>Color branch</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="no-wrap">Quan Dong Da</span></td>
                            <td><span class="no-wrap">ZIM - 20L5 Thái Hà</span></td>
                            <td>ZIM Building 2, L20 Ngõ Thái Hà (Số 198 Thái Thịnh) P. Láng Hạ, Quận Đống Đa, Hà Nội
                            </td>
                            <td>0988202950</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Visible</label>
                                </div>
                            </td>
                            <td><span class="badge wd-30 d-inline-block ht-30" style="background:#D84315"></span></td>
                            <td>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:;" class="material-icons" id="dropdown-id-1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more_vert</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown-id-1">
                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="edit"></i> Edit branch</a>
                                        <a class="dropdown-item btn-icon" href="branch-room.php"><i data-feather="layout"></i>
                                            View list room</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="no-wrap">Quan Dong Da</span></td>
                            <td><span class="no-wrap">ZIM - 20L5 Thái Hà</span></td>
                            <td>ZIM Building 2, L20 Ngõ Thái Hà (Số 198 Thái Thịnh) P. Láng Hạ, Quận Đống Đa, Hà Nội
                            </td>
                            <td>0988202950</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                    <label class="custom-control-label" for="customCheck1">Visible</label>
                                </div>
                            </td>
                            <td><span class="badge wd-30 d-inline-block ht-30" style="background:#041925"></span></td>
                            <td>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:;" class="material-icons" id="dropdown-id-1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more_vert</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown-id-1">
                                        <a class="dropdown-item btn-icon" href="#"><i data-feather="edit"></i> Edit branch</a>
                                        <a class="dropdown-item btn-icon" href="branch-room.php"><i data-feather="layout"></i>
                                            View list room</a>
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
<?php require_once( 'footer.php' ); ?>