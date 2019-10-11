<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>

<link rel="stylesheet" href="assets/css/dashforge.mail.css">

<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
            
    <div class="mail-wrapper">
      <div class="mail-sidebar">
        <div class="mail-sidebar-body">
          <div class="pd-20">
            <button id="mailComposeBtn" class="btn btn-primary btn-block tx-uppercase tx-10 tx-medium tx-sans tx-spacing-4">Gửi yêu cầu</button>
          </div>
          <div class="pd-b-10 pd-x-10">
            <nav class="nav nav-sidebar tx-13">
              <a href="" class="nav-link active"><i data-feather="inbox"></i> <span>Tất cả</span> <span class="badge">20</span></a>
              <a href="" class="nav-link"><i data-feather="clock"></i> <span>Gần đây</span> <span class="badge">3</span></a>
              <a href="" class="nav-link"><i data-feather="star"></i> <span>Quan trọng</span> <span class="badge">10</span></a>
              <a href="" class="nav-link"><i data-feather="monitor"></i> <span>Đang trả lời</span> <span class="badge">8</span></a>
              <a href="" class="nav-link"><i data-feather="lock"></i> <span>Đã xong</span> <span class="badge">15</span></a>
            </nav>
          </div>
          <div class="pd-10">
            <label class="tx-sans tx-uppercase tx-medium tx-10 tx-spacing-1 tx-color-03 pd-l-10">Chi nhánh</label>
            <nav class="nav nav-sidebar tx-13">
              <a href="" class="nav-link"><i data-feather="home"></i> <span>65 Yên Lãng</span></a>
              <a href="" class="nav-link"><i data-feather="home"></i> <span>138 Huỳnh Duy Khánh</span></a>
              <a href="" class="nav-link"><i data-feather="home"></i> <span>15 Trần Phú</span></a>
              <a href="" class="nav-link"><i data-feather="home"></i> <span>123 Lý Thường Kiệt</span></a>
              <a href="" class="nav-link"><i data-feather="home"></i> <span>12 Trần Hưng Đạo</span></a>
            </nav>
          </div>

          <div class="pd-y-15 pd-x-10">
            <label class="tx-sans tx-uppercase tx-medium tx-10 tx-spacing-1 tx-color-03 pd-l-10">Người yêu cầu</label>
            <nav class="nav nav-sidebar tx-13">
              <a href="" class="nav-link"><i data-feather="user"></i> <span>Giáo viên</span></a>
              <a href="" class="nav-link"><i data-feather="users"></i> <span>Học viên</span></a>
            </nav>
          </div>
        </div><!-- mail-sidebar-body -->
      </div><!-- mail-sidebar -->

      <div class="mail-group">
        <div class="mail-group-header">
          <i data-feather="search"></i>
          <div class="search-form">
            <input type="search" class="form-control" placeholder="Tìm kiếm..">
          </div><!-- search-form -->
        </div><!-- mail-group-header -->
        <div class="mail-group-body">
          <div class="pd-y-15 pd-x-20 d-flex justify-content-between align-items-center">
            <h6 class="tx-uppercase tx-semibold mg-b-0">Danh sách yêu cầu</h6>
            <div class="dropdown tx-13">
              <span class="tx-color-03">Sort:</span> <a href="" class="dropdown-link link-02">Date</a>
            </div><!-- dropdown -->
          </div>
          <label class="mail-group-label">Hôm nay</label>
          <ul class="list-unstyled media-list mg-b-0">
            <li class="media">
              <div class="avatar"><span class="avatar-initial rounded-circle bg-indigo">d</span></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Vũ Văn Lam</span>
                  <span class="tx-11">1:20pm</span>
                </div>
                <h6 class="tx-13">Bảo lưu thông tin học</h6>
                <p class="tx-12 tx-color-03 mg-b-0">Dear anh chị,Em tên Đỗ Thị Thu Phương học viên lớp inter 0207...</p>
              </div><!-- media-body -->
            </li>
            <li class="media">
              <div class="avatar"><img src="https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Đỗ Thị Thu Phương</span>
                  <span class="tx-11">11:40am</span>
                </div>
                <h6 class="tx-13">Đăng ký chuyển khoá học</h6>
                 <p class="tx-12 tx-color-03 mg-b-0">Dear anh chị,Em tên Đỗ Thị Thu Phương học viên lớp inter 0207...</p>
              </div><!-- media-body -->
            </li>
            <li class="media">
              <div class="avatar"><span class="avatar-initial rounded-circle bg-gray-800">r</span></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Nguyễn Hồng Ánh</span>
                  <span class="tx-11">10:54am</span>
                </div>
                <h6 class="tx-13">Cập nhật lại lịch học mới</h6>
                 <p class="tx-12 tx-color-03 mg-b-0">Dear anh chị,Em tên Đỗ Thị Thu Phương học viên lớp inter 0207...</p>
              </div><!-- media-body -->
            </li>
            <li class="media">
              <div class="avatar"><span class="avatar-initial rounded-circle bg-pink">s</span></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Lương Minh Tùng</span>
                  <span class="tx-11">09:50am</span>
                </div>
                <h6 class="tx-13">Xin cập nhật lịch học</h6>
                 <p class="tx-12 tx-color-03 mg-b-0">Dear anh chị,Em tên Đỗ Thị Thu Phương học viên lớp inter 0207...</p>
              </div><!-- media-body -->
            </li>
          </ul>
          <label class="mail-group-label">Hôm qua</label>
          <ul class="list-unstyled media-list mg-b-0">
            <li class="media">
              <div class="avatar"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Trương Tam Phong</span>
                  <span class="tx-11">8:20pm</span>
                </div>
                <h6 class="tx-13">Đăng ký chuyển buổi học</h6>
                <p class="tx-12 tx-color-03 mg-b-0">Dear anh chị,Em tên Đỗ Thị Thu Phương học viên lớp inter 0207..</p>
              </div><!-- media-body -->
            </li>
            <li class="media unread">
              <div class="avatar"><span class="avatar-initial rounded-circle bg-teal">i</span></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Đặng Tiến Hoàng</span>
                  <span class="tx-11">06:42pm</span>
                </div>
                <h6 class="tx-13">Đăng ký chuyển buổi học</h6>
                 <p class="tx-12 tx-color-03 mg-b-0">Dear anh chị,Em tên Đỗ Thị Thu Phương học viên lớp inter 0207...</p>
              </div><!-- media-body -->
            </li>
          </ul>
          <label class="mail-group-label">20/04/2019</label>
          <ul class="list-unstyled media-list mg-b-0">
            <li class="media">
              <div class="avatar"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Lương Hoàng Trung</span>
                  <span class="tx-11">4:18pm</span>
                </div>
                <h6 class="tx-13">Đăng ký chuyển buổi học</h6>
                <p class="tx-12 tx-color-03 mg-b-0">Dear anh chị,Em tên Đỗ Thị Thu Phương học viên lớp inter 0207..</p>
              </div><!-- media-body -->
            </li>
            <li class="media">
              <div class="avatar"><span class="avatar-initial rounded-circle bg-primary">a</span></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Adrian Monino</span>
                  <span class="tx-11">06:42pm</span>
                </div>
                <h6 class="tx-13">Đăng ký chuyển buổi học</h6>
                 <p class="tx-12 tx-color-03 mg-b-0">Dear anh chị,Em tên Đỗ Thị Thu Phương học viên lớp inter 0207...</p>
              </div><!-- media-body -->
            </li>
          </ul>
          <label class="mail-group-label">18/01/2019</label>
          <ul class="list-unstyled media-list mg-b-0">
            <li class="media">
              <div class="avatar"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Dương Bảo Long</span>
                  <span class="tx-11">7:26pm</span>
                </div>
                <h6 class="tx-13">Đăng ký chuyển buổi học</h6>
                <p class="tx-12 tx-color-03 mg-b-0">Dear anh chị,Em tên Đỗ Thị Thu Phương học viên lớp inter 0207..</p>
              </div><!-- media-body -->
            </li>
            <li class="media">
              <div class="avatar"><span class="avatar-initial rounded-circle bg-primary">a</span></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Vũ Văn Long</span>
                  <span class="tx-11">06:42pm</span>
                </div>
                <h6 class="tx-13">Đăng ký chuyển buổi học</h6>
                 <p class="tx-12 tx-color-03 mg-b-0">Dear anh chị,Em tên Đỗ Thị Thu Phương học viên lớp inter 0207...</p>
              </div><!-- media-body -->
            </li>
            <li class="media">
              <div class="avatar"><img src="https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Trương Huỳnh Lan</span>
                  <span class="tx-11">12:01pm</span>
                </div>
                <h6 class="tx-13">Đăng ký chuyển buổi học</h6>
                <p class="tx-12 tx-color-03 mg-b-0">Dear anh chị,Em tên Đỗ Thị Thu Phương học viên lớp inter 0207..</p>
              </div><!-- media-body -->
            </li>
            <li class="media">
              <div class="avatar"><span class="avatar-initial rounded-circle bg-purple">r</span></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Phạm Ngọc Thạch</span>
                  <span class="tx-11">10:13am</span>
                </div>
                <h6 class="tx-13">Đăng ký chuyển buổi học</h6>
                 <p class="tx-12 tx-color-03 mg-b-0">Dear anh chị,Em tên Đỗ Thị Thu Phương học viên lớp inter 0207...</p>
              </div><!-- media-body -->
            </li>
          </ul>
          <div class="pd-t-1 pd-b-5">
            <a href="" class="btn btn-xs btn-block btn-light bd-0 tx-uppercase tx-10 tx-spacing-1 tx-medium mn-ht-0 btn-loadmore">Load more</a>
          </div>
        </div><!-- mail-group-body -->
      </div><!-- mail-group -->

      <div class="mail-content">
        <div class="mail-content-header d-none">
          <a href="" id="mailContentClose" class="link-02 d-none d-lg-block d-xl-none mg-r-20"><i data-feather="arrow-left"></i></a>
          <div class="media">
            <div class="avatar avatar-sm"><img src="https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
            <div class="media-body mg-l-10">
              <h6 class="mg-b-2 tx-13">Đỗ Thị Thu Phương</h6>
              <span class="d-block tx-11 tx-color-03">20/04/2019 10:30</span>
            </div><!-- media-body -->
          </div><!-- media -->
          <nav class="nav nav-icon-only mg-l-auto">
            <a href="javascript:;" data-toggle="tooltip" title="Đánh dấu quan trọng" class="nav-link d-none d-sm-block icon-action"><i data-feather="star"></i></a>
            <a href="javascript:;" data-toggle="tooltip" title="Đóng yêu cầu" class="nav-link d-none d-sm-block icon-action"><i data-feather="lock"></i></a>
          </nav>
        </div><!-- mail-content-header -->
        <div class="mail-content-body d-none">
          <div class="pd-20 pd-lg-25 report-content">
            <h5 class="mg-b-20">Đăng ký chuyển khoá học</h5>

            <h6 class="tx-semibold mg-b-0">A-IELTS Get Ready</h6>
            <span class="tx-color-03">10/4 , 16:00 - 18:00</span>
            <p class="tx-color-03">65 Yên Lãng</p>

            <p>Dear, anh chị !</p>
            <p>Em tên Đỗ Thị Thu Phương học viên lớp inter 0207 nay có mong muốn được bảo lưu khoá học do bận đi làm không sắp xếp được thời gian đi học và làm bài trên lớp.</p>
            <p>Anh/chị xem xét và làm thủ tục bảo lưu giúp em ạ.</p>
            <p>
              <span>Em cảm ơn!,</span><br>
            </p>
          </div>
          <div class="report-reply">
            <div class="pd-20 pd-lg-25 reply-block">
                <div class="media reply-header">
                    <div class="avatar avatar-sm"><img src="assets/img/teacher.jpg" class="rounded-circle" alt=""></div>
                    <div class="media-body mg-l-10">
                        <h6 class="mg-b-2 tx-13">Trương Thanh Lam <span class="status-rep collapse-reply"><span class="txt"></span> reply<i data-feather="chevron-down"></i></span></h6>
                        <span class="d-block tx-11 tx-color-03">21/04/2019 10:30</span>
                    </div><!-- media-body -->
                </div><!-- media -->
                <div class="reply-content pd-t-20 collapse">
                    <p>Dear, Đỗ Thị Thu Phương !</p>
                    <p>Đối với thủ tục bảo lưu khoá học, Phương vui lòng đến trung tâm anh ngữ ZIM và mang theo hợp đồng cam kết đầu ra ZIM hoặc phiếu thu học phí đã gửi cho em, sau đó trung tâm sẽ tiến hành các thủ tục bảo lưu khoá học giúp Phương nhé! </p>
                    <p>Nếu có bất kỳ thắc mắc gì thêm, em vui lòng gửi phản hồi lại, chị sẽ hỗ trợ em sớm nhất có thể nhé.</p>
                    <p>
                    <span></span><br>
                    <strong>ZIM Support Team,</strong>
                    </p>
                </div>
        
            </div>
            <div class="pd-20 pd-lg-25 reply-block">
                <div class="media reply-header">
                    <div class="avatar avatar-sm"><img src="https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
                    <div class="media-body mg-l-10">
                        <h6 class="mg-b-2 tx-13">Đỗ Thị Thu Phương <span class="status-rep collapse-reply"><span class="txt"></span> reply<i data-feather="chevron-down"></i></span></h6>
                        <span class="d-block tx-11 tx-color-03">22/04/2019 10:30</span>
                    </div><!-- media-body -->
                </div><!-- media -->
                <div class="reply-content pd-t-20 collapse">
                    <p>Dear, chị</p>
                    <p>Em tên Đỗ Thị Thu Phương học viên lớp inter 0207 nay có mong muốn được bảo lưu khoá học do bận đi làm không sắp xếp được thời gian đi học và làm bài trên lớp.</p>
                    <p>Anh/chị xem xét và làm thủ tục bảo lưu giúp em ạ.</p>
                    <p>
                    <span>Em cảm ơn!</span>
                    </p>
                </div>
        
            </div>
            <div class="pd-20 pd-lg-25  reply-block">
                <div class="media reply-header">
                    <div class="avatar avatar-sm"><img src="assets/img/teacher.jpg" class="rounded-circle" alt=""></div>
                    <div class="media-body mg-l-10">
                    <h6 class="mg-b-2 tx-13">Trương Thanh Lam <span class="status-rep collapse-reply show"><span class="txt"></span> reply<i data-feather="chevron-down"></i></span></h6>
                    <span class="d-block tx-11 tx-color-03">Today, 11:40 am</span>
                    </div><!-- media-body -->
                </div><!-- media -->
                <div class="reply-content pd-t-20">
                    <p>Dear, Đỗ Thị Thu Phương !</p>
                    <p>Như chị đã gửi thông tin phản hồi với em, em vui lòng qua trung tâm và mang kèm hợp đồng cam kết đầu ra hoặc phiếu thu học phí, anh/chị sẽ hỗ trợ em làm thủ tục bảo lưu Phương nhé!</p>
                    <p>Cảm ơn em.</p>
                    <p>
                    <span></span><br>
                    <strong>ZIM Support Team,</strong>
                    </p>
                </div>
         
            </div>
          </div>
        
          <div class="pd-20 pd-lg-25 pd-t-0-f">
            <div id="editor-container" class="tx-13 tx-lg-14 ht-100">
             
            </div>
            <div class="d-flex align-items-center justify-content-between mg-t-10">
              <div id="toolbar-container" class="bd-0-f pd-0-f">
                <span class="ql-formats">
                  <button class="ql-bold"></button>
                  <button class="ql-italic"></button>
                  <button class="ql-underline"></button>
                </span>
                <span class="ql-formats">
                  <button class="ql-link"></button>
                  <button class="ql-image"></button>
                </span>
              </div>
              <button class="btn btn-primary">Reply</button>
            </div>
          </div>
          <div class="pd-t-0 pd-l-20 pd-r-20 pd-lg-x-25 rate-block">
            <div class="star-rating d-flex align-items-center">
                <span class="tx-18">Đánh giá tư vấn viên:  </span>
                <div class="feedback">
                  <div class="rating">
                      <input type="radio" name="rating" id="rating-5">
                      <label for="rating-5"></label>
                      <input type="radio" name="rating" id="rating-4">
                      <label for="rating-4"></label>
                      <input type="radio" name="rating" id="rating-3">
                      <label for="rating-3"></label>
                      <input type="radio" name="rating" id="rating-2">
                      <label for="rating-2"></label>
                      <input type="radio" name="rating" id="rating-1">
                      <label for="rating-1"></label>
                      <div class="emoji-wrapper">
                          <div class="emoji">
                              <svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                  <path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534"/>
                                  <ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff"/>
                                  <ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347"/>
                                  <ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63"/>
                                  <ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff"/>
                                  <ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347"/>
                                  <ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63"/>
                                  <path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347"/>
                              </svg>
                              <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                  <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                  <path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347"/>
                                  <path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534"/>
                                  <path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff"/>
                                  <path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347"/>
                                  <path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff"/>
                                  <path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534"/>
                                  <path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff"/>
                                  <path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347"/>
                                  <path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff"/>
                              </svg>
                              <svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                  <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                  <path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347"/>
                                  <path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff"/>
                                  <circle cx="340" cy="260.4" r="36.2" fill="#3e4347"/>
                                  <g fill="#fff">
                                      <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10"/>
                                      <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z"/>
                                  </g>
                                  <circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347"/>
                                  <ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff"/>
                              </svg>
                              <svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                  <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347"/>
                                  <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                  <g fill="#fff">
                                  <path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z"/>
                                  <ellipse cx="356.4" cy="205.3" rx="81.1" ry="81"/>
                                  </g>
                                  <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
                                  <g fill="#fff">
                                  <ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1"/>
                                  <ellipse cx="155.6" cy="205.3" rx="81.1" ry="81"/>
                                  </g>
                                  <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
                                  <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff"/>
                              </svg>
                              <svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                  <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                  <path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
                                  <path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f"/>
                                  <path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
                                  <path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
                                  <path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f"/>
                                  <path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
                                  <path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347"/>
                                  <path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b"/>
                              </svg>
                              <svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <g fill="#ffd93b">
                                      <circle cx="256" cy="256" r="256"/>
                                      <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z"/>
                                  </g>
                                  <path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4"/>
                                  <path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea"/>
                                  <path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88"/>
                                  <g fill="#38c0dc">
                                      <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z"/>
                                  </g>
                                  <g fill="#d23f77">
                                      <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z"/>
                                  </g>
                                  <path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347"/>
                                  <path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b"/>
                                  <path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2"/>
                              </svg>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="rate-confirm d-flex align-items-center hide">
                    <a href="javascript:;" class="btn btn-primary mg-r-10">Xác nhận</a>
                    <a href="javascript:;" class="btn btn-danger  cancel">Huỷ</a>
                  </div>
              </div>
             
            </div>
        </div><!-- mail-content-body -->
      </div><!-- mail-content -->
    </div><!-- mail-wrapper -->

    <div id="mailCompose" class="mail-compose">
      <div class="mail-compose-dialog">
        <div class="mail-compose-header">
          <h6 class="mail-compose-title tx-white">Gửi yêu cầu</h6>
          <nav class="nav nav-icon-only">
            <a id="mailComposeMinimize" href="" class="nav-link nav-link-minimize d-none d-lg-block">
              <i data-feather="minus"></i>
              <i data-feather="square"></i>
            </a>
            <a id="mailComposeShrink" href="" class="nav-link nav-link-shrink d-none d-lg-block">
              <i data-feather="minimize-2"></i>
              <i data-feather="maximize-2"></i>
            </a>
            <a id="mailComposeClose" href="" class="nav-link nav-link-close"><i data-feather="x"></i></a>
          </nav>
        </div><!-- mail-compose-header -->
        <div class="mail-compose-body">
          <div class="form-row align-items-center">
            <div class="col-sm">Loại yêu cầu:</div>
            <div class="col-sm-10">
                <select name="" id="" class="form-control">
                    <option value="">Khác</option>
                    <option value="">Lịch học</option>
                    <option value="">Tài liệu</option>
                </select>
              <!-- <input type="text" class="form-control bd-0 pd-x-0" placeholder="Enter recipient's email address"> -->
            </div>
          </div>
          <hr class="mg-y-10">
          <div class="form-row align-items-center">
            <div class="col-sm">Tiêu đề:</div>
            <div class="col-sm-10">
              <input type="text" class="form-control bd-0 pd-x-0" placeholder="Nhập tiêu đề...">
            </div>
          </div>
          <div id="editor-container2" class="ht-150 mg-t-15"></div>
          <div class="d-sm-flex align-items-center justify-content-between mg-t-25">
            <div id="toolbar-container2" class="bd-0-f pd-0-f">
              <span class="ql-formats">
                <button class="ql-bold"></button>
                <button class="ql-italic"></button>
                <button class="ql-underline"></button>
              </span>
              <span class="ql-formats">
                <button class="ql-link"></button>
                <button class="ql-image"></button>
              </span>
            </div>
            <div class="tx-13 mg-t-15 mg-sm-t-0">
              <button class="btn btn-white mg-r-5">Lưu nháp</button>
              <button class="btn btn-primary">Gửi yêu cầu</button>
            </div>
          </div>
        </div><!-- mail-compose-body -->
      </div><!-- mail-compose-dialog -->
    </div><!-- mail-compose -->
    </div><!-- container -->
</div><!-- content -->
<?php require_once( 'footer.php' ); ?>
<script src="lib/quill/quill.min.js"></script>
<script src="assets/js/dashforge.mail.js"></script>

<script>
    $(document).ready(function(){
        // $('.checkbox-all').on('change',checkAllCb);
        // function checkAllCb(){
        //     var $table = $(this).closest('.table');
        //     $table.find('tbody input[type="checkbox"]').prop('checked',$(this).prop('checked'));
        // }
        $('.report-reply').on('click','.collapse-reply',function(){
            $(this).closest('.reply-block').find('.reply-content').slideToggle();
            $(this).toggleClass('show');
        });
        $('.icon-action').on('click',function(){
            $(this).toggleClass('active');
        });
        $('.star-rating').on('change','input[name="rating"]',function(){
          $('.rate-confirm').removeClass('hide');
        });
        $('.star-rating').on('click','.cancel',function(){
          $('.rate-confirm').addClass('hide');
            $('.star-rating').find('input[name="rating"]').prop('checked',false);
        });
    });
</script>