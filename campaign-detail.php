<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-0">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Campaign</li>
            </ol>
        </nav>
        <!-- End breadcrumb -->

        <div class="d-xl-flex align-items-center justify-content-between mg-t-30">
            <div>
                <h4 class="mg-b-0">Campaign 2 - 8/2019</h4>
               
            </div>
            <div class="d-xl-block">
                <div class="d-flex justify-content-xl-center mg-t-20 mg-xl-t-0 flex-wrap row mg-x-0">
                    <div class="sort-by mg-l-5 mg-r-5">
                        <select class="custom-select">
                            <option value="" selected>Sort by</option>
                            <option value="2">Campaign status</option>
                            <option value="1">Payment status</option>
                            <option value="all">Tên khoá từ A-Z</option>
                            <option value="all">Tên khoá từ Z-A</option>
                            <option value="2">Ngày bắt đầu</option>
                            <option value="2">Ngày kết thúc</option>
                        </select>
                    </div>
                    <div class=" mg-l-5 mg-r-5">
                        <input type="text" class="form-control datetimepicker date-only from-date" placeholder="Start date">
                    </div>
                    <div class="sort-by mg-l-5 mg-r-5">
                        <input type="text" class="form-control datetimepicker date-only to-date" placeholder="End date">
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
        <div class="post-manager mg-t-30">
            <div class="table-responsive">
                <table class="table table-striped fixed">
                    <thead class="thead-light">
                        <tr>
                            <th>Student</th>
                            <th>Course</th>
                            <th>Branch</th>
                            <th>Money</th>
                            <th>Money remaining</th>
                            <th>Supporter</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="campaign-name col-fix-10"><span>Trương Văn Lam</span></td>
                            <td class="campaign-status"><span class="">A-IELTS Master, 07/08, 18:30-20:30</span></td>
                            <td class="campaign-commission col-fix-10">ZIM - 65 Yên Lãng</td>
                            <td class="campaign-bonus col-fix-10">22,300,000</td>
                            <td class="campaign-salary col-fix-10">11,000,000</td>
                            <td class="campaign-total col-fix-10">TVV</td>
                            <td class="campaign-payment col-fix-10 text-center">30/01/2019</td>
                         
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

<!-- Modal cancel -->
<div class="modal fade" id="newCampaign" tabindex="-1" role="dialog" aria-labelledby="newCampaignTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newCampaignTitle">New campaign</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-sm-6 form-group">
                        <input type="text" class="form-control datetimepicker from-date" placeholder="From date">
                    </div>
                    <div class="col-sm-6 form-group">
                        <input type="text" class="form-control datetimepicker to-date" placeholder="To date">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-12 form-group">
                        <input type="text" class="form-control" placeholder="Note">
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
<script>
    $(document).ready(function(){
        $('.checkbox-all').on('change',checkAllCb);
        function checkAllCb(){
            var $table = $(this).closest('.table');
            $table.find('tbody input[type="checkbox"]').prop('checked',$(this).prop('checked'));
        }
    });
</script>