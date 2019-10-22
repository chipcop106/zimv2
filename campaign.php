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
                <h4 class="mg-b-0">Campaign lists</h4>
               
            </div>
            <div class="d-xl-block">
                <div class="d-flex justify-content-xl-center mg-t-20 mg-xl-t-0 flex-wrap row mg-x-0">
                    
                    <a href="#newCampaign" data-toggle="modal" data-target="#newCampaign"
                        class="btn btn-primary mg-xl-l-5 mg-r-5"><i></i>New campaign</a>
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
                        ><i
                            data-feather="search"></i></a>
                </div>
            </div>

        </div>

        <div class="post-manager mg-t-30">
            <div class="table-responsive">
                <table class="table table-striped fixed">
                    <thead class="thead-light">
                        <tr>
                            <th>Campaign</th>
                            <th class="text-center">Campaign status</th>
                            <th>Commission</th>
                            <th>Bonus</th>
                            <th>Salary</th>
                            <th>Total salary</th>
                            <th class="text-center">Payment status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="campaign-name"><span>21/08/2019 - 21/09/2019</span></td>
                            <td class="campaign-status col-fix-10 text-center tx-danger"><span class="">Finished</span></td>
                            <td class="campaign-commission col-fix-10">00 (400,000 * 0)</td>
                            <td class="campaign-bonus col-fix-10">2,300,000</td>
                            <td class="campaign-salary col-fix-10">1,000,000</td>
                            <td class="campaign-total col-fix-10">3,300,000</td>
                            <td class="campaign-payment col-fix-10 text-center"><span class="badge badge-danger">Unpaid</span></td>
                            <td><a href="campaign-detail.php"><i data-feather="eye">View</i></a></td>
                        </tr>
                        <tr>
                            <td class="campaign-name"><span>21/08/2019 - 21/09/2019</span></td>
                            <td class="campaign-status col-fix-10 text-center tx-success"><span class="">Opening</span></td>
                            <td class="campaign-commission col-fix-10">00 (400,000 * 0)</td>
                            <td class="campaign-bonus col-fix-10">2,300,000</td>
                            <td class="campaign-salary col-fix-10">1,000,000</td>
                            <td class="campaign-total col-fix-10">3,300,000</td>
                            <td class="campaign-payment col-fix-10 text-center"><span class="badge badge-success">Paid</span></td>
                            <td><a href="campaign-detail.php"><i data-feather="eye">View</i></a></td>
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
                <div class="form-row mg-t1">
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