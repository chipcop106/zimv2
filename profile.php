<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>

<link rel="stylesheet" href="assets/css/dashforge.profile.css">

<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
    <div class="media d-block d-lg-flex">
          <div class="profile-sidebar pd-lg-r-25 left-sticky">
            <div class="row">
              <div class="col-sm-3 col-md-2 col-lg-12">
                <div class="avatar avatar-xxl avatar-online"><img src="assets/img/teacher.jpg" class="rounded-circle" alt=""></div>
              </div><!-- col -->
              <div class="col-sm-8 col-md-7 col-lg-12 mg-t-20 mg-sm-t-0 mg-lg-t-25">
                <h5 class="mg-b-2 tx-spacing--1">Trương Văn Lam</h5>
                <p class="tx-color-03 mg-b-25">@lam&nam</p>
                <div class="d-flex mg-b-25">
                  <button class="btn btn-xs btn-white flex-fill" data-toggle="modal" data-target="#editProfile">Edit Profile</button>
                  <button class="btn btn-xs btn-primary flex-fill mg-l-10" data-toggle="modal" data-target="#editPassword">Change Password</button>
                </div>
              </div><!-- col -->
              <div class="col-sm-6 col-md-5 col-lg-12 ">
                <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Contact Information</label>
                <ul class="list-unstyled profile-info-list mg-b-10">
                  <li><i data-feather="home"></i> <span class="">115 Trần Phú, Quận 5</span></li>
                  <li><i data-feather="phone"></i> <a href="">(+84) 886 706 289</a></li>
                  <li><i data-feather="mail"></i> <a href="">me@lamnam.me</a></li>
                </ul>
              </div><!-- col -->
              <div class="col-sm-6 col-md-5 col-lg-12 mg-t-20">
                <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Social Channel</label>
                <ul class="list-unstyled profile-info-list mg-b-10">
                  <li><i data-feather="github"></i> <a href="">@lamandnam</a></li>
                  <li><i data-feather="twitter"></i> <a href="">@lamlam</a></li>
                  <li><i data-feather="instagram"></i> <a href="">@lamandnam</a></li>
                  <li><i data-feather="facebook"></i> <a href="">@lamandnam</a></li>
                </ul>
              </div><!-- col -->
            </div><!-- row -->

          </div><!-- profile-sidebar -->
          <div class="media-body mg-t-30 mg-lg-t-0 pd-lg-x-10">
            <!-- <div class="profile-update-option bg-white ht-50 bd d-flex justify-content-end mg-b-20 mg-lg-b-25 rounded">
              <div class="d-flex align-items-center pd-x-20 mg-r-auto">
                <i data-feather="edit-3"></i> <a href="" class="link-03 mg-l-10"><span class="d-none d-sm-inline">Share an</span> Update</a>
              </div>
              <div class="wd-50 bd-l d-flex align-items-center justify-content-center">
                <a href="" class="link-03" data-toggle="tooltip" title="Publish Photo"><i data-feather="image"></i></a>
              </div>
              <div class="wd-50 bd-l d-flex align-items-center justify-content-center">
                <a href="" class="link-03" data-toggle="tooltip" title="Publish Video"><i data-feather="video"></i></a>
              </div>
              <div class="wd-50 bd-l d-flex align-items-center justify-content-center">
                <a href="" class="link-03" data-toggle="tooltip" title="Write an Article"><i data-feather="file-text"></i></a>
              </div>
            </div> -->


                <!-- <div class="comment-wrap">
                  <div class="comment-block">
                    <div class="comment-form-wrap mg-t-15">
                      <div class="comment-item">
                        <div class="comment-avatar">
                          <a href="#" class="avatar">
                            <img src="assets/img/teacher.jpg" alt="avatar">
                          </a>
                        </div>
                        <div class="comment-content">
                            <form action="" class="comment-form">
                                <div class="cmt-area">
                                    <div class="text-area">
                                      <textarea name="" id="" class="form-control" placeholder="Comment here..."></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                      </div>
                    </div>
                    <ul class="comment-lists mg-0">
                      <li class="comment-item-wrap">
                        <div class="comment-item">
                          <div class="comment-avatar">
                            <a href="#" class="avatar">
                              <img src="assets/img/teacher.jpg" alt="avatar">
                            </a>
                          </div>
                          <div class="comment-content">
                              <div class="comment-info">
                                  <a href="#">Trương Văn Lam</a>
                                  <span class="content-cmt">Chúc mọi người năm Kỷ Hợi an lành, gia đình hạnh phúc, an khang thịnh vượng, mọi điều bình an..... Chúc sức khoẻ mọi người <3</span>
                              </div>
                          </div>
                        </div>
                      </li>
                      <li class="comment-item-wrap">
                        <div class="comment-item">
                          <div class="comment-avatar">
                            <a href="#" class="avatar">
                              <img src="assets/img/modal-users.png" alt="avatar">
                            </a>
                          </div>
                          <div class="comment-content">
                              <div class="comment-info">
                                  <a href="#">Đỗ Hoài Phương</a>
                                  <span class="content-cmt">Hihihihi cmt thử nè <3</span>
                              </div>
                          </div>
                        </div>
                      </li>
                      <li class="comment-item-wrap">
                        <div class="comment-item">
                          <div class="comment-avatar">
                            <a href="#" class="avatar">
                              <img src="assets/img/modal-users.png" alt="avatar">
                            </a>
                          </div>
                          <div class="comment-content">
                              <div class="comment-info">
                                  <a href="#">Đỗ Hoài Phương</a>
                                  <span class="content-cmt">Reaching the targets and goals set for my area.
                                    Servicing the needs of my existing customers.
                                    Maintaining the relationships with existing customers for repeat business.
                                    Reporting to top managers.
                                    Keeping up to date with the products.3</span>
                              </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div> 
            -->

            <div class="card mg-b-20 mg-lg-b-25">
              <div class="card-header">
                <h6 class="mg-b-0">NOTIFICATION</h6>
              </div>
              <div class="card-body pd-20 pd-lg-25">
                <div class="media blog">
                  <a href="feed-detail.php">
                  <img src="https://miro.medium.com/max/1024/1*nbracJKz9SJOys3JxraMwg.jpeg" class="wd-200 rounded mg-r-15" alt="">
                  </a>
                  <div class="media-body">
                    <h5><a href="">Why the English-Speaking World is the New Soviet Union ?</a></h5>
                    <p class="meta-time mg-t-0 mg-b-5 tx-color-03">20/04/2019 10:30AM</p>
                    <p class="summary mg-b-0">Our team is expanding again. We are looking for a Product Manager and Software ...</p>
                  </div>
                </div>
                <div class="media blog">
                  <a href="feed-detail.php">
                  <img src="https://miro.medium.com/max/5472/1*O9r2gYaYeQb7EI5KBrkf3Q.jpeg" class="wd-200 rounded mg-r-15" alt="">
                  </a>
                  <div class="media-body">
                    <h5><a href="">Maker for Dummies: A Plain English Explanation of the Dai Stablecoin</a></h5>
                    <p class="meta-time mg-t-0 mg-b-5 tx-color-03">20/04/2019 10:30AM</p>
                    <p class="summary mg-b-0">Our team is expanding again. We are looking for a Product Manager and Software ...</p>
                  </div>
                </div>
                <div class="media blog">
                  <a href="feed-detail.php">
                  <img src="https://miro.medium.com/max/2700/1*1-5hf_o6j3szhVe33L104A.jpeg" class="wd-200 rounded mg-r-15" alt="">
                  </a>
                  <div class="media-body">
                    <h5><a href="">Algorithms in plain English: time complexity and Big-O notation</a></h5>
                    <p class="meta-time mg-t-0 mg-b-5 tx-color-03">20/04/2019 10:30AM</p>
                    <p class="summary mg-b-0">Our team is expanding again. We are looking for a Product Manager and Software ...</p>
                  </div>
                </div>
                <div class="media blog">
                  <a href="feed-detail.php">
                  <img src="https://genknews.genkcdn.vn/zoom/260_162/2019/10/8/photo-1-1570501849269464125616-crop-15705018593691970025254.jpg" class="wd-200 rounded mg-r-15" alt="">
                  </a>
                  <div class="media-body">
                    <h5><a href=""> Phụ kiện biến iPhone X, XS thành iPhone 11 Pro? </a></h5>
                    <p class="meta-time mg-t-0 mg-b-5 tx-color-03">20/04/2019 10:30AM</p>
                    <p class="summary mg-b-0">Our team is expanding again. We are looking for a Product Manager and Software ...</p>
                  </div>
                </div>
                <div class="media blog">
                  <a href="feed-detail.php">
                  <img src="https://miro.medium.com/max/1024/1*nbracJKz9SJOys3JxraMwg.jpeg" class="wd-200 rounded mg-r-15" alt="">
                  </a>
                  <div class="media-body">
                    <h5><a href="">Why the English-Speaking World is the New Soviet Union ?</a></h5>
                    <p class="meta-time mg-t-0 mg-b-5 tx-color-03">20/04/2019 10:30AM</p>
                    <p class="summary mg-b-0">Our team is expanding again. We are looking for a Product Manager and Software ...</p>
                  </div>
                </div>

                <a href="#" class="loadmore d-block text-center">Load more <i data-feather="chevron-down"></i></a>
              </div>
            </div><!-- card -->
          </div><!-- media-body -->
          <div class="profile-sidebar mg-t-40 mg-lg-t-0 pd-lg-l-25">
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg">
                <div class="d-flex align-items-center justify-content-between mg-b-20">
                  <h6 class="tx-13 tx-spacng-1 tx-uppercase tx-semibold mg-b-0">newest blog</h6>
                  <a href="" class="link-03">View all</a>
                </div>
                <ul class="list-unstyled media-list mg-b-0">

                  <li class="block-blog">
                    <div class="media blog">
                      <a href="blog-detail.php">
                      <img src="https://genknews.genkcdn.vn/zoom/260_162/2019/10/8/photo-1-1570501849269464125616-crop-15705018593691970025254.jpg" class="wd-50 rounded mg-r-15" alt="">
                      </a>
                      <div class="media-body">
                       <a href="blog-detail.php"> Phụ kiện biến iPhone X, XS thành iPhone 11 Pro? </a>
                      </div>
                    </div>
                  </li>

                  <li class="block-blog">
                    <div class="media blog">
                      <a href="">
                      <img src="https://genknews.genkcdn.vn/zoom/380_240/2019/10/3/4323342-1570068733641472757369-crop-15700687408771451307615.jpg" class="wd-50 rounded mg-r-15" alt="">
                      </a>
                      <div class="media-body">
                        <a href=""> Hệ điều hành MacOS Catalina được phát hành, iTunes chính thức bị khai tử </a>
                      </div>
                    </div>
                  </li>

                  <li class="block-blog">
                    <div class="media blog">
                    <a href="blog-detail.php">
                    <img src="https://genknews.genkcdn.vn/zoom/250_155/2019/10/8/maxresdefault-1-15705119096021352426536-crop-1570512073919402473101.jpg" class="wd-50 rounded mg-r-15" alt="">
                    </a>
                    <div class="media-body">
                      <a href="blog-detail.php"> Phụ kiện biến iPhone X, XS thành iPhone 11 Pro? </a>
                    </div>
                  </div>
                  </li>
                  <li class="block-blog">
                    <div class="media blog">
                      <a href="blog-detail.php">
                      <img src="https://genknews.genkcdn.vn/zoom/260_162/2019/10/8/photo-1-1570501849269464125616-crop-15705018593691970025254.jpg" class="wd-50 rounded mg-r-15" alt="">
                      </a>
                      <div class="media-body">
                       <a href="blog-detail.php"> Phụ kiện biến iPhone X, XS thành iPhone 11 Pro? </a>
                      </div>
                    </div>
                  </li>

                  <li class="block-blog">
                    <div class="media blog">
                      <a href="blog-detail.php">
                      <img src="https://genknews.genkcdn.vn/zoom/380_240/2019/10/3/4323342-1570068733641472757369-crop-15700687408771451307615.jpg" class="wd-50 rounded mg-r-15" alt="">
                      </a>
                      <div class="media-body">
                        <a href="blog-detail.php"> Hệ điều hành MacOS Catalina được phát hành, iTunes chính thức bị khai tử </a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div><!-- col -->
              <div class="col-sm-6 col-md-5 col-lg mg-t-30 mg-sm-t-0 mg-lg-t-40">
                <div class="d-flex align-items-center justify-content-between mg-b-20">
                  <h6 class="tx-13 tx-spacing-1 tx-uppercase tx-semibold mg-b-0">Recent comments</h6>
                </div>
                <ul class="list-unstyled media-list mg-b-0">
                  <li class="media">
                    <a href=""><div class="avatar avatar-online"><img src="https://via.placeholder.com/350" class="rounded-circle" alt=""></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-2"><a href="" class="link-01  mg-r-5">Dat Codero</a><span class="tx-12 tx-color-03">has commented on post  <a href="blog-detail.php">Hệ điều hành MacOS Catalina được phát hành, iTunes chính thức bị khai tử</a></span></p>
                     
                    </div>
                  </li>
                  <li class="media">
                    <a href=""><div class="avatar avatar-offline"><img src="https://via.placeholder.com/600" class="rounded-circle" alt=""></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-2"><a href="" class="link-01  mg-r-5">Lam .Neter</a><span class="tx-12 tx-color-03">has commented on post  <a href="blog-detail.php">Thầy đồng về Apple dự báo: nhu cầu mạnh mẽ từ iPhone 11 và iPhone SE 2 sẽ giúp doanh số iPhone tăng đến 10% trong quý đầu năm sau  Nổi bật</a></span></p>
                      
                    </div>
                  </li>
                  <li class="media">
                    <a href=""><div class="avatar avatar-offline"><span class="avatar-initial rounded-circle bg-teal">R</span></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-2"><a href="" class="link-01 mg-r-5">Khoa Luu</a> <span class="tx-12 tx-color-03">has commented on post  <a href="blog-detail.php">Tại sao Apple, Microsoft và Google lại sản xuất earbuds trong khi Sony, Samsung, Xiaomi hay Sennheiser đều chọn kiểu dáng in-ear cho True Wireless?</a></span></p>
                     
                    </div>
                  </li>
                  <li class="media">
                    <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-indigo">R</span></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-2"><a href="" class="link-01  mg-r-5">Senior Tran Doan</a> <span class="tx-12 tx-color-03">has commented on post  <a href="blog-detail.php">Google sẽ buộc các nhà sản xuất thiết bị phải ẩn hệ thống điều hướng riêng của họ trong Android 10</a></span></p>
                      
                    </div>
                  </li>
                  <li class="media">
                    <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-gray-600">A</span></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-2"><a href="" class="link-01  mg-r-5">Truong Thuc</a><span class="tx-12 tx-color-03">has commented on post  <a href="blog-detail.php">Smartphone lên ngôi trong xử lý công việc, đây là cách giúp các ông, bà chủ trút bỏ nỗi ám ảnh rò rỉ dữ liệu</a></span></p>
                     
                    </div>
                  </li>
                </ul>
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- profile-sidebar -->
        </div><!-- media -->
    </div><!-- container -->
</div><!-- content -->

<!-- Modal -->
<div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="editTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editTitle">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <fieldset class="form-fieldset">
          <legend>Personal Information</legend>
          <div class="form-group row">
            <label for="full_name" class="col-sm-2 col-form-label">Full name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="full_name" placeholder="Full name" value="Trương Văn Lam">
            </div>
          </div>
          <div class="form-group row">
            <label for="phone_number" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="phone_number" placeholder="Phone number" value="(+84) 886 076 289">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" placeholder="Email address" value="zim.mona@monamedia.zim">
            </div>
          </div>
          <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="address" placeholder="Your address" value="319, C16 Lý Thường Kiệt Quận 11">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-form-label col-sm-2 pt-0">Sex</label>
            <div class="col-sm-10 d-flex align-items-center">
              <div class="custom-control custom-radio">
                <input type="radio" name="sex" class="custom-control-input" checked>
                <label class="custom-control-label">Male</label>
              </div>
              <div class="mg-l-20 custom-control custom-radio">
                <input type="radio" name="sex" class="custom-control-input">
                <label class="custom-control-label">Female</label>
              </div>
            </div>
          </div>

        </fieldset>
        <fieldset class="form-fieldset mg-t-20">
          <legend>Social channel</legend>
          <div class="row">
            <div class="form-group col-12 col-md-6">
              <label class="d-block">Facebook</label>
              <input type="text" class="form-control" placeholder="" value="@lamandnam">
            </div>
            <div class="form-group col-12 col-md-6">
              <label class="d-block">Twitter</label>
              <input type="text" class="form-control" placeholder="" value="@lamandnam">
            </div>
            <div class="form-group col-12 col-md-6">
              <label class="d-block">Instagram</label>
              <input type="text" class="form-control" placeholder="" value="@lamandnam">
            </div>
            <div class="form-group col-12 col-md-6">
              <label class="d-block">Telegram</label>
              <input type="text" class="form-control" placeholder="" value="@lamandnam">
            </div>
          </div>
          
        </fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editPassword" tabindex="-1" role="dialog" aria-labelledby="editPass" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editPass">Change password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="form-group col-12">
              <label class="d-block">Old password</label>
              <input type="password" class="form-control" placeholder="" value="@lamandnam">
            </div>
            <div class="form-group col-12">
              <label class="d-block">New password</label>
              <input type="password" class="form-control" placeholder="" value="@lamandnam">
            </div>
            <div class="form-group col-12">
              <label class="d-block">Re-new password</label>
              <input type="password" class="form-control" placeholder="" value="@lamandnam">
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
    $(document).ready(function(){
      //Auto resize textarea
      $('body').on('keydown','textarea',autosize);
      function autosize(){
      var el = this;
      setTimeout(function(){
          el.style.cssText = 'height:auto; padding:10px';
          el.style.cssText = '-moz-box-sizing:content-box';
          el.style.cssText = 'height:' + el.scrollHeight + 'px';
      },0);
      }
    });
</script>