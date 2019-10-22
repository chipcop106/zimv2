<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-0">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Post manager</li>
            </ol>
        </nav>
        <!-- End breadcrumb -->

        <div class="d-xl-flex align-items-center justify-content-between mg-t-30">
            <div>
                <div class="checkbox-action d-inline-block">
                    <select class="custom-select">
                        <option value="" disabled selected>Select action</option>
                        <option value="2">Show post</option>
                        <option value="2">Hide post</option>
                        <option value="all">Delete post</option>
                        <option value="2">Display on local</option>
                        <option value="2">Display on public</option>
                    </select>
                </div>
               
            </div>
            <div class="d-xl-block">
                <div class="d-flex justify-content-xl-center mg-t-20 mg-xl-t-0 flex-wrap">
                    <a href="new-post.php"
                        class="btn btn-primary mg-xl-l-5 mg-r-5"><i></i>New post</a>
                   
                    <div class="search-form mg-l-5 mg-r-5">
                        <input type="search" class="form-control" placeholder="Search">
                        <button class="btn" type="button"><i data-feather="search"></i></button>
                    </div>
                    <div class="sort-by mg-l-5 mg-r-5">
                        <select class="custom-select">
                            <option value="" disabled selected>Sắp xếp theo</option>
                            <option value="2">Số tiền</option>
                            <option value="all">Tên khoá từ A-Z</option>
                            <option value="all">Tên khoá từ Z-A</option>
                            <option value="1">Trạng thái</option>
                            <option value="2">Ngày bắt đầu</option>
                            <option value="2">Ngày kết thúc</option>
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
                            <label class="form-control-label">Chi nhánh:</label>
                            <select class="custom-select">
                                <option value="all" selected>Tất cả</option>
                                <option value="1">Yên Lãng</option>
                                <option value="2">Huỳnh Lan Khánh</option>
                                <option value="3">Trần Phú</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-6 col-xl-3">
                            <label class="form-control-label">Lớp học: </label>
                            <select class="custom-select">
                                <option value="all" selected>Tất cả</option>
                                <option value="1">Yên Lãng</option>
                                <option value="2">Huỳnh Lan Khánh</option>
                                <option value="3">Trần Phú</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4 col-6 col-xl-3">
                            <label class="form-control-label">Trạng thái: </label>
                            <select class="custom-select">
                                <option value="all" selected>Tất cả</option>
                                <option value="1">Đang mở</option>
                                <option value="2">Sắp mở</option>
                                <option value="2">Kết thúc</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-6 col-xl-3">
                            <label class="form-control-label">Học vụ quản lý: </label>
                            <select class="custom-select">
                                <option value="all" selected>Tất cả</option>
                                <option value="1">Hoàng Lan</option>
                                <option value="2">Liên Minh</option>
                                <option value="3">Trần Phú</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-6 col-xl-3">
                            <label class="form-control-label">Ngày mở: </label>
                            <input type="text" class="form-control datetimepicker date-only" placeholder="Ngày mở">
                        </div>
                        <div class="form-group col-md-4 col-6 col-xl-3">
                            <label class="form-control-label">Ngày kết thúc: </label>
                            <input type="text" class="form-control datetimepicker date-only"
                                placeholder="Ngày kết thúc">
                        </div>
                        <div class="form-group col-md-4 col-6 col-xl-3">
                            <label class="form-control-label">Giá tiền từ: </label>
                            <input type="text" class="form-control" placeholder="Giá tiền từ">
                        </div>
                        <div class="form-group col-md-4 col-6 col-xl-3">
                            <label class="form-control-label">Giá tiền đến: </label>
                            <input type="text" class="form-control" placeholder="Giá tiền đến">
                        </div>
                        <div class="form-group col-12 mg-b-0">
                            <button type="button" class="btn btn-primary">Lọc kết quả</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="post-manager mg-t-10">
            <div class="table-responsive">
                <table class="table table-striped fixed">
                    <thead class="thead-light">
                        <tr>
                            <th>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input checkbox-all" id="post-id-0">
                                    <label class="custom-control-label" for="post-id-0"></label>
                                </div>
                            </th>
                            <th>Banner</th>
                            <th>Title</th>
                            <th>Author</th>
                        
                            <th>Date</th>
                            <th>Visibility</th>
                            <th>Display on</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="check-column">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="post-id-1">
                                    <label class="custom-control-label" for="post-id-1"></label>
                                </div>
                            </td>
                            <td class="banner">
                                <span class="img-post"><img src="assets/img/placehold.jpg" alt="banner" class="wd-100"></span>
                            </td>
                            <td class="title-post">
                                <strong><a href="#">Simply beautiful open source icons</a></strong>
                                <div class="row-actions">
                                    <span class="edit"><a href="#" class="edit-post">Edit</a> | </span>
                                    <span class="remove"><a href="#" class="tx-danger delete-post">Delete</a></span>
                                </div>
                            </td>
                            <td class="author">
                                <a href="#">Trương Văn Lam</a>
                            </td>
                            <td class="date"> Publish at <br /> <abbr title="2018/09/13 2:48:34 AM">13/09/2018</abbr>
                            </td>
                            <td class="visibility">Show</td>
                            <td class="display">Local</td>
                        </tr>
                        <tr>
                            <td class="check-column">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="post-id-2">
                                    <label class="custom-control-label" for="post-id-2"></label>
                                </div>
                            </td>
                            <td class="banner">
                                <span class="img-post"><img src="assets/img/placehold.jpg" alt="banner" class="wd-100"></span>
                            </td>
                            <td class="title-post">
                                <strong><a href="#">Simply beautiful open source icons</a></strong>
                                <div class="row-actions">
                                    <span class="edit"><a href="#" class="edit-post">Edit</a> | </span>
                                    <span class="remove"><a href="#" class="tx-danger delete-post">Delete</a></span>
                                </div>
                            </td>
                            <td class="author">
                                <a href="#">Trương Văn Lam</a>
                            </td>
                            <td class="date"> Publish at <br /> <abbr title="2018/09/13 2:48:34 AM">13/09/2018</abbr>
                            </td>
                            <td class="visibility">Show</td>
                            <td class="display">Local</td>
                        </tr>
                        <tr>
                            <td class="check-column">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="post-id-3">
                                    <label class="custom-control-label" for="post-id-3"></label>
                                </div>
                            </td>
                            <td class="banner">
                                <span class="img-post"><img src="assets/img/placehold.jpg" alt="banner" class="wd-100"></span>
                            </td>
                            <td class="title-post">
                                <strong><a href="#">For even more customization and cross browser consistency, use our completely custom checkbox element to replace the browser defaults.</a></strong>
                                <div class="row-actions">
                                    <span class="edit"><a href="#" class="edit-post">Edit</a> | </span>
                                    <span class="remove"><a href="#" class="tx-danger delete-post">Delete</a></span>
                                </div>
                            </td>
                            <td class="author">
                                <a href="#">Trương Văn Lam</a>
                            </td>
                            <td class="date"> Publish at <br /> <abbr title="2018/09/13 2:48:34 AM">13/09/2018</abbr>
                            </td>
                            <td class="visibility">Hidden</td>
                            <td class="display">Public</td>
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
<script>
    $(document).ready(function(){
        $('.checkbox-all').on('change',checkAllCb);
        function checkAllCb(){
            var $table = $(this).closest('.table');
            $table.find('tbody input[type="checkbox"]').prop('checked',$(this).prop('checked'));
        }
    });
</script>