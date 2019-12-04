<?php require_once( 'head.php' ); ?>


<link rel="stylesheet" href="assets/css/dashforge.profile.css">
<style>
  footer.footer{
    display:none;
  }
  .content{
    margin-top:0;

  }
  p.note-line {
    margin-bottom: 0;
    padding-left: 10px;
    margin-left: 15px;
    position: relative;
    font-size:12px;
}
.label-print{
 display:none;
}
p.note-line:before {content: '-';position: absolute;right: 100%;}

@media print{
    body { 
	background: white; 
	font-size: 12pt; 
}
    .hide-on-print{
    display:none;
  }
  .label-print{
    display:block;
  }
   @page {
       size:auto ;
      
       } 
       
   .container{
       width: auto; 
	border: 0; 

   }
   .barcode-wrap img {
    border:0;
}
}

</style>
<div class="content content-fixed">
    <div class="container pd-x-10 pd-lg-x-10 pd-xl-x-10">
        <div class="page-invoice-wrap">
            <div class="page-invoice-top">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div class="flex-print">
                        <h4 class="mg-b-0">Phiếu thu #20191111-001</h4>
                    </div>
                    <div class="mg-t-20 mg-sm-t-0">
                        <button class="btn btn-white btn-print hide-on-print"><i data-feather="printer" class="mg-r-5"></i> Print</button>
                        <span class="tx-color-04 label-print tx-bold">ZIM.VN</span>
                    </div>
                </div>
            </div>
            <div class="page-invoice-bottom">
                <div class="row">
                    <div class="col-sm-6 col-6">
                        <label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">Hoá đơn từ</label>
                        <p class="mg-b-0 tx-12 tx-bold">Công ty cổ phần Eduvator</p>
                        <p class="mg-b-0 tx-12">MST: 0107346642</p>
                        <p class="mg-b-0 tx-12">Địa chỉ: Số nhà 65, phố Yên Lãng, Phường Trung Liệt, Quận Đống Đa, Hà Nội</p>
                        <h6 class="tx-15 mg-t-10 mg-b-0">Chi nhánh: ZIM - 12 Huỳnh Lan Khánh</h6>
                        <p class="mg-b-0">Địa chỉ: 12 Huỳnh Lan Khanh, Phường 2, Quận Tân Bình, Tp. HCM</p>
                   

                    </div><!-- col -->
                    <div class="col-sm-6 col-6 tx-right d-md-block">

                        <div class="barcode-wrap">
                            <img src="assets/img/barcode.jpg" alt="barcode">
                            <label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">20191111-001
                            </label>
                        </div>

                    </div><!-- col -->
                    <div class="col-sm-6 col-6 col-lg-8 mg-t-20 mg-sm-t-0 mg-md-t-20">
                        <label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">Hoá đơn đến</label>
                        <h6 class="tx-15 mg-b-10">Trương Văn Lam</h6>
                        <p class="mg-b-0">Địa chỉ: 319 c16 Lý Thường Kiệt, Phường 15, Quận 11, Tp HCM</p>
                        <p class="mg-b-0">Số điện thoại: 0123456789</p>
                        <p class="mg-b-0">CMND: 272581992 <span class="pd-l-20">Nơi cấp: Đà Nẵng<span class="pd-l-20">Ngày cấp: 21/10/2012</span></span></p>
           
                      
                    </div><!-- col -->
                    <div class="col-sm-6 col-6 col-lg-4 mg-t-20">
                        <label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">Thông tin hoá đơn</label>
                        <ul class="list-unstyled lh-7">
                            <li class="d-flex justify-content-between">
                                <span>Hoá đơn số</span>
                                <span>20191111-001</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Ngày thanh toán</span>
                                <span>20/10/2019</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Hình thức thanh toán</span>
                                <span>Tiền mặt</span>
                            </li>
                   
                        </ul>
                    </div><!-- col -->
                </div><!-- row -->

                <div class="table-responsive mg-t-20">
                    <table class="table table-invoice bd-b">
                        <thead>
                            <tr>
                                <th class="wd-20p">Loại</th>
                                <th class="tx-right">Số tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="tx-nowrap">[ZIM - 308 Trần Phú] - A-IELTS Intensive, 16/07, 09:30 - 11:30</td>
                                <td class="tx-right">10,000,000 VNĐ</td>
                            </tr>
                            <tr>
                                <td class="tx-nowrap">TP-2D[ZIM - 308 Trần Phú] - A-IELTS Intensive, 29/07, 19:00-21:00</td>
                                <td class="tx-right">10,000,000 VNĐ</td>
                            </tr>
                            <tr>
                                <td class="tx-nowrap">[Combo: 6885, 6886]</td>
                                <td class="tx-right">10,000,000 VNĐ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row justify-content-between">
                    <div class="col-sm-6 col-6 col-lg-6 order-2 order-sm-0 mg-t-0 mg-sm-t-0">
                        <label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03 mg-b-5">Lưu ý: </label>
                          <p class="note-line">Học viên cần hoàn thiện học phí khóa học trước khi tham gia khóa học.</p>
                          <p class="note-line">Ngày khai giảng dự kiến là ngày sớm nhất lớp học có thể bắt đầu, thời gian khai giảng có thể lùi không quá 2 tuần để đảm bảo tiến độ lớp học.</p>
                          <p class="note-line">Phí đặt cọc để giữ chỗ học viên, phí này sẽ không được hoàn lại trong mọi trường hợp.</p>
                          <p class="note-line">Trước ngày khai giảng, trung tâm sẽ thông báo đầy đủ thông tin chi tiết lịch học và giờ học cho học viên qua điện thoại và tin nhắn, học viên vui lòng kiểm tra và xác nhận thông tin.</p>
  
                    </div><!-- col -->
                    <div class="col-sm-6 col-6 col-lg-4 order-1 order-sm-0">
                        <ul class="list-unstyled lh-7 pd-r-10">
                            <li class="d-flex justify-content-between mg-b-5 mg-t-5">
                                <span>Tổng số tiền</span>
                                <span>30,000,000 VNĐ</span>
                            </li>
                            <li class="d-flex justify-content-between mg-b-5">
                                <span>Đã thu</span>
                                <span>20,000,000 VNĐ</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <strong>Còn lại</strong>
                                <strong>10,000,000 VNĐ</strong>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Ngày hẹn thanh toán</span>
                                <span>21/11/2019</span>
                            </li>
                        </ul>
                    </div><!-- col -->
                </div><!-- row -->
            </div>
            <div class="page-invoice-footer">
              <div class="signature d-flex mg-t-30">
                <div class="col tx-center">
                    <p class="bold mg-b-5">Người nộp tiền</p>
                    <p>(Ký và ghi rõ họ tên)</p>
                    <p class="pd-t-15" style="text-transform: uppercase;">Demo acc</p>
                </div>
                <div class="col tx-center">
                    <p class="bold mg-b-5">Người thu tiền</p>
                    <p>(Ký và ghi rõ họ tên)</p>
                    <p class="pd-t-15" style="text-transform: uppercase;">Demo acc</p>
                </div>
            </div>
            </div>
        </div>
    </div><!-- container -->
</div><!-- content -->
<?php require_once( 'footer.php' ); ?>
<script>
$(document).ready(function() {
  $('.btn-print').on('click',function(){
    window.print();
  })
});
</script>