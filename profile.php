<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>

<link rel="stylesheet" href="assets/css/dashforge.profile.css">
<link rel="stylesheet" href="lib/spectrum-colorpicker/spectrum.css">
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="media d-block d-lg-flex">
            <div class="profile-sidebar pd-lg-r-25 left-sticky">
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-lg-12">
                        <div class="avatar avatar-xxl avatar-online"><img src="assets/img/teacher.jpg"
                                class="rounded-circle" alt=""></div>
                    </div><!-- col -->
                    <div class="col-sm-8 col-md-7 col-lg-12 mg-t-20 mg-sm-t-0 mg-lg-t-25">
                        <h5 class="mg-b-2 tx-spacing--1">Trương Văn Lam</h5>
                        <p class="tx-color-03 mg-b-25">@lam&nam</p>
                        <div class="d-flex mg-b-25">
                            <button class="btn btn-xs btn-white flex-fill" data-toggle="modal"
                                data-target="#editProfile">Edit Profile</button>
                            <button class="btn btn-xs btn-primary flex-fill mg-l-10" data-toggle="modal"
                                data-target="#editPassword">Change Password</button>
                        </div>
                    </div><!-- col -->
                    <div class="col-sm-6 col-md-5 col-lg-12 ">
                        <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Contact
                            Information</label>
                        <ul class="list-unstyled profile-info-list mg-b-10">
                            <li><i data-feather="home"></i> <span class="">115 Trần Phú, Quận 5</span></li>
                            <li><i data-feather="phone"></i> <a href="">(+84) 886 706 289</a></li>
                            <li><i data-feather="mail"></i> <a href="">me@lamnam.me</a></li>
                        </ul>
                    </div><!-- col -->
                    <div class="col-sm-6 col-md-5 col-lg-12 mg-t-20">
                        <label
                            class="tx-sans tx-10  tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Group</label>
                        <ul class="list-unstyled profile-info-list course mg-b-10">
                            <li> <a href="#" class="tx-primary" data-toggle="tooltip" title="Click to create new group">
                                    <i data-feather="plus-circle"></i>Create new group</a>
                            </li>
                            <li><i data-feather="flag"></i> <a href="#">Hội độc thân vui tính</a></li>
                            <li><i data-feather="flag"></i> <a href="#">Hội nhà giàu thích giả nghèo</a></li>
                            <li><i data-feather="flag"></i> <a href="#">Hội nghèo thích đú</a></li>
                        </ul>
                    </div><!-- col -->
                </div><!-- row -->

            </div><!-- profile-sidebar -->
            <div class="media-body mg-t-30 mg-lg-t-0 pd-lg-x-10">
                <div class="page-group-info">
                    <div class="banner-page">
                        <img src="assets/img/class.jpg" alt="image">
                        <div class="banner-overlay"></div>
                        <div class="box-info">
                            <h2 class="group-title">Hội độc thân vui tính với những tâm hồn mỏng manh Mona Media</h2>
                            <p class="member-count"><span>36</span> members</p>
                        </div>
                    </div>
                    <div class="member-list">

                        <div class="block">
                            <p class="text-color-1  title">Total posts</p>
                            <p class="number">02 posts</p>
                        </div>
                        <div class="block">
                            <p class="text-color-1  title">Total comments</p>
                            <p class="number">32 comments</p>
                        </div>
                        <div class="block member">
                            <p class="text-color-1  title">Group's member <a href="#" class=" mg-l-10 add-member"
                            data-toggle="modal"
                                    data-target="#viewListMember"><i data-feather="plus" height="18"
                                        width="18"></i> Member</a></p>
                            <div class="members d-flex align-items-center">
                                <a href="#" class="avatar" data-toggle="tooltip" title="Trương Văn Lam"><img
                                        src="assets/img/teacher.jpg" alt="avatar"></a>
                                <a href="#" class="avatar" data-toggle="tooltip" title="Trương Văn Lam"><img
                                        src="assets/img/teacher.jpg" alt="avatar"></a>
                                <a href="#" class="avatar" data-toggle="tooltip" title="Trương Văn Lam"><img
                                        src="assets/img/teacher.jpg" alt="avatar"></a>
                                <a href="#" class="avatar" data-toggle="tooltip" title="Trương Văn Lam"><img
                                        src="assets/img/teacher.jpg" alt="avatar"></a>
                                <a href="javascript:;" class="view-more" data-toggle="modal"
                                    data-target="#viewListMember"><span class="more-num">+32</span> other</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="search-post mg-b-10 d-flex align-items-center bd">
                    <div class="share-status bd-r-1">
                         <a href="javascript:;" class="link-03 mg-sm-l-10 write-status">
                         <i data-feather="edit-3"></i><span class="d-none d-sm-inline">Write status</span> </a>
                    </div>
                    <div class="search-form flex-grow-1">
                        <input type="search" class="form-control bd-0" placeholder="Search">
                        <button class="btn" type="button"><i data-feather="search"></i></button>
                    </div>
                </div>
                <div class="mg-b-10 create-new-status">
                    <div class="card">
                        <div class="card-body pd-15">
                            <div class="status-wrap">
                                <textarea name="" cols="" rows="" placeholder="Write something new..."
                                    class="form-control bd-0 outline-none shadow-none"></textarea>
                                <div class="image-demo">
                                    <div class="list-preview"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bd-0 pd-t-0 pd-x-15">
                            <div class="background-demo">
                                <div class="d-flex align-items-center ">
                                    <a href="javascript:;" class="demo-bg" data-color="rgb(246, 217, 112)"
                                        data-image="assets/img/bg-status2.jpg">
                                        <img src="assets/img/bg-status2.jpg" alt="">
                                    </a>
                                    <a href="javascript:;" class="demo-bg" data-color="#fff"
                                        data-image="assets/img/bg-status3.jpg">
                                        <img src="assets/img/bg-status3.jpg" alt="">
                                    </a>
                                    <a href="javascript:;" class="demo-bg" data-color="#fff"
                                        data-image="assets/img/bg-status1.jpg">
                                        <img src="assets/img/bg-status1.jpg" alt="">
                                    </a>
                                    <a href="javascript:;" class="demo-bg" data-color="#fff"
                                        data-image="assets/img/bg-status4.jpg">
                                        <img src="assets/img/bg-status4.jpg" alt="">
                                    </a>
                                </div>
                            </div>


                            <div class="d-flex align-content-center justify-content-between">
                                <div class="d-flex align-items-center action-icons">
                                    <a href="javascript:;" class="d-inline-block pd-5 upload-image"
                                        data-toggle="tooltip" title="Upload image"><i data-feather="image"></i>
                                        Image</a>
                                    <span class="seperate"> | </span>
                                    <a href="javascript:;" class="d-inline-block pd-5 select-background"
                                        data-toggle="tooltip" title="Background Gradient"><i data-feather="circle"></i>
                                        Background</a>
                                    <input type="file" class="img-upload d-none" accept="image/*" multiple>
                                </div>
                                <a href="javascript:;" class="btn btn-primary">Đăng</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mg-b-20 mg-lg-b-25 blog__post">
                    <div class="card-body pd-20 pd-lg-25">

                        <div class="media blog status-post image d-block">
                            <div class="media-header d-flex align-items-center justify-content-between">
                                <div class="author">
                                    <a href="#" class="avatar"><img src="assets/img/teacher.jpg" alt="avatar"></a>
                                    <div class="author-info">
                                        <a href="#" class="username"><span
                                                class="hasVerifiedBadge">Administrtor</span></a>
                                        <div class="date-comment-view">
                                            <span class="date"><span class="DateTime" title="11:20 ngày 2/10/19">
                                                    02/10/2019</span></span>

                                        </div>
                                    </div>
                                </div>
                                <div class="action-blog ">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i
                                            data-feather="more-vertical"></i></a>
                                    <ul class="action-lists dropdown-menu ">
                                        <li class="action-link dropdown-item"><a href="javascript:;"
                                                class="act-link delete-post">Xoá bài viết</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>Hôm nay ra đường lụm được 500k cảm thấy thật hào hứng cùng với
                                    Trương Văn Lam hihihihi</h5>
                                <div id="postid-1" class="carousel slide " data-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/img/bg-status4.jpg" class="d-block w-100" alt="image">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/img/bg-status3.jpg" class="d-block w-100" alt="image">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/img/bg-status2.jpg" class="d-block w-100" alt="image">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/img/bg-status1.jpg" class="d-block w-100" alt="image">
                                        </div>
                                    </div>

                                </div>
                                <ul class="carousel-navigator">
                                    <li data-target="#postid-1" data-slide-to="0" class="active"><span> <img
                                                src="assets/img/bg-status4.jpg" alt="image"></span></li>
                                    <li data-target="#postid-1" data-slide-to="1"> <img src="assets/img/bg-status3.jpg"
                                            alt="image"></li>
                                    <li data-target="#postid-1" data-slide-to="2"> <img src="assets/img/bg-status2.jpg"
                                            alt="image"></li>
                                    <li data-target="#postid-1" data-slide-to="3"> <img src="assets/img/bg-status1.jpg"
                                            alt="image"></li>
                                </ul>
                            </div>
                            <div class="media-footer">
                                <div class="comment-wrap">
                                    <div class="d-flex justify-content-between align-items-center pd-5 bd-b">
                                        <nav class="nav nav-with-icon tx-14 ">

                                            <a href="javascript:;" class="nav-link comment-toggle"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-message-square">
                                                    <path
                                                        d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                    </path>
                                                </svg> Comment</a>

                                        </nav>
                                        <a href="javascript:;" class="nav-link count-comment pd-r-15 comment-toggle">6
                                            Comments</a>
                                    </div>
                                    <div class="comment-block">
                                        <a href="javascript:;" class="ajax-loadold">Xem bình luận cũ hơn...</a>
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
                                                            <span class="content-cmt">Chúc mọi người năm Kỷ Hợi an lành,
                                                                gia đình hạnh phúc, an khang thịnh vượng, mọi điều bình
                                                                an..... Chúc sức khoẻ mọi người <3</span> </div> </div>
                                                                    </div> </li> <li class="comment-item-wrap">
                                                                    <div class="comment-item">
                                                                        <div class="comment-avatar">
                                                                            <a href="#" class="avatar">
                                                                                <img src="assets/img/modal-users.png"
                                                                                    alt="avatar">
                                                                            </a>
                                                                        </div>
                                                                        <div class="comment-content">
                                                                            <div class="comment-info">
                                                                                <a href="#">Đỗ Hoài Phương</a>
                                                                                <span class="content-cmt">Hihihihi cmt
                                                                                    thử nè <3</span> </div> </div>
                                                                                        </div> </li> <li
                                                                                        class="comment-item-wrap">
                                                                                        <div class="comment-item">
                                                                                            <div class="comment-avatar">
                                                                                                <a href="#"
                                                                                                    class="avatar">
                                                                                                    <img src="assets/img/modal-users.png"
                                                                                                        alt="avatar">
                                                                                                </a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="comment-content">
                                                                                                <div
                                                                                                    class="comment-info">
                                                                                                    <a href="#">Đỗ Hoài
                                                                                                        Phương</a>
                                                                                                    <span
                                                                                                        class="content-cmt">Reaching
                                                                                                        the targets and
                                                                                                        goals set for my
                                                                                                        area.
                                                                                                        Servicing the
                                                                                                        needs of my
                                                                                                        existing
                                                                                                        customers.
                                                                                                        Maintaining the
                                                                                                        relationships
                                                                                                        with existing
                                                                                                        customers for
                                                                                                        repeat business.
                                                                                                        Reporting to top
                                                                                                        managers.
                                                                                                        Keeping up to
                                                                                                        date with the
                                                                                                        products.3</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                            </li>
                                        </ul>
                                        <div class="comment-form-wrap">
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
                                                                <textarea name="" class="form-control"
                                                                    placeholder="Comment here..."></textarea>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media blog status-post  gradient d-block">
                            <div class="media-header d-flex align-items-center justify-content-between">
                                <div class="author">
                                    <a href="#" class="avatar"><img src="assets/img/teacher.jpg" alt="avatar"></a>
                                    <div class="author-info">
                                        <a href="#" class="username"><span
                                                class="hasVerifiedBadge">Administrtor</span></a>
                                        <div class="date-comment-view">
                                            <span class="date"><span class="DateTime" title="11:20 ngày 2/10/19">
                                                    02/10/2019</span></span>

                                        </div>
                                    </div>
                                </div>
                                <div class="action-blog ">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i
                                            data-feather="more-vertical"></i></a>
                                    <ul class="action-lists dropdown-menu ">
                                        <li class="action-link dropdown-item"><a href="javascript:;"
                                                class="act-link delete-post">Xoá bài viết</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media-body" style="background-image:url('assets/img/bg-status4.jpg');">
                                <h5 style="color:#fff;">Hôm nay ra đường lụm được 500k cảm thấy thật hào hứng cùng với
                                    Trương Văn Lam hihihihi</h5>
                            </div>
                            <div class="media-footer">
                                <div class="comment-wrap">
                                    <div class="d-flex justify-content-between align-items-center pd-5 bd-b">
                                        <nav class="nav nav-with-icon tx-14 ">

                                            <a href="javascript:;" class="nav-link comment-toggle"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-message-square">
                                                    <path
                                                        d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                    </path>
                                                </svg> Comment</a>

                                        </nav>
                                        <a href="javascript:;" class="nav-link count-comment pd-r-15 comment-toggle">6
                                            Comments</a>
                                    </div>
                                    <div class="comment-block">

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
                                                            <span class="content-cmt">Chúc mọi người năm Kỷ Hợi an lành,
                                                                gia đình hạnh phúc, an khang thịnh vượng, mọi điều bình
                                                                an..... Chúc sức khoẻ mọi người <3</span> </div> </div>
                                                                    </div> </li> <li class="comment-item-wrap">
                                                                    <div class="comment-item">
                                                                        <div class="comment-avatar">
                                                                            <a href="#" class="avatar">
                                                                                <img src="assets/img/modal-users.png"
                                                                                    alt="avatar">
                                                                            </a>
                                                                        </div>
                                                                        <div class="comment-content">
                                                                            <div class="comment-info">
                                                                                <a href="#">Đỗ Hoài Phương</a>
                                                                                <span class="content-cmt">Hihihihi cmt
                                                                                    thử nè <3</span> </div> </div>
                                                                                        </div> </li> <li
                                                                                        class="comment-item-wrap">
                                                                                        <div class="comment-item">
                                                                                            <div class="comment-avatar">
                                                                                                <a href="#"
                                                                                                    class="avatar">
                                                                                                    <img src="assets/img/modal-users.png"
                                                                                                        alt="avatar">
                                                                                                </a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="comment-content">
                                                                                                <div
                                                                                                    class="comment-info">
                                                                                                    <a href="#">Đỗ Hoài
                                                                                                        Phương</a>
                                                                                                    <span
                                                                                                        class="content-cmt">Reaching
                                                                                                        the targets and
                                                                                                        goals set for my
                                                                                                        area.
                                                                                                        Servicing the
                                                                                                        needs of my
                                                                                                        existing
                                                                                                        customers.
                                                                                                        Maintaining the
                                                                                                        relationships
                                                                                                        with existing
                                                                                                        customers for
                                                                                                        repeat business.
                                                                                                        Reporting to top
                                                                                                        managers.
                                                                                                        Keeping up to
                                                                                                        date with the
                                                                                                        products.3</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                            </li>
                                        </ul>
                                        <div class="comment-form-wrap">
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
                                                                <textarea name="" class="form-control"
                                                                    placeholder="Comment here..."></textarea>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media blog status-post image d-block">
                            <div class="media-header d-flex align-items-center justify-content-between">
                                <div class="author">
                                    <a href="#" class="avatar"><img src="assets/img/teacher.jpg" alt="avatar"></a>
                                    <div class="author-info">
                                        <a href="#" class="username"><span
                                                class="hasVerifiedBadge">Administrtor</span></a>
                                        <div class="date-comment-view">
                                            <span class="date"><span class="DateTime" title="11:20 ngày 2/10/19">
                                                    02/10/2019</span></span>

                                        </div>
                                    </div>
                                </div>
                                <div class="action-blog ">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i
                                            data-feather="more-vertical"></i></a>
                                    <ul class="action-lists dropdown-menu ">
                                        <li class="action-link dropdown-item"><a href="javascript:;"
                                                class="act-link delete-post">Xoá bài viết</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>Hôm nay ra đường lụm được 500k cảm thấy thật hào hứng cùng với
                                    Trương Văn Lam hihihihi</h5>
                                <div id="postid-2" class="carousel slide " data-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/img/bg-status4.jpg" class="d-block w-100" alt="image">
                                        </div>

                                    </div>


                                </div>
                                <ul class="carousel-navigator">
                                    <li data-target="#postid-2" data-slide-to="0" class="active"> <img
                                            src="assets/img/bg-status4.jpg" alt="image"></li>
                                </ul>
                            </div>
                            <div class="media-footer">
                                <div class="comment-wrap">
                                    <div class="d-flex justify-content-between align-items-center pd-5 bd-b">
                                        <nav class="nav nav-with-icon tx-14 ">

                                            <a href="javascript:;" class="nav-link comment-toggle"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-message-square">
                                                    <path
                                                        d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                    </path>
                                                </svg> Comment</a>

                                        </nav>
                                        <a href="javascript:;" class="nav-link count-comment pd-r-15 comment-toggle">6
                                            Comments</a>
                                    </div>
                                    <div class="comment-block">
                                        <a href="javascript:;" class="ajax-loadold">Xem bình luận cũ hơn...</a>
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
                                                            <span class="content-cmt">Chúc mọi người năm Kỷ Hợi an lành,
                                                                gia đình hạnh phúc, an khang thịnh vượng, mọi điều bình
                                                                an..... Chúc sức khoẻ mọi người <3</span> </div> </div>
                                                                    </div> </li> <li class="comment-item-wrap">
                                                                    <div class="comment-item">
                                                                        <div class="comment-avatar">
                                                                            <a href="#" class="avatar">
                                                                                <img src="assets/img/modal-users.png"
                                                                                    alt="avatar">
                                                                            </a>
                                                                        </div>
                                                                        <div class="comment-content">
                                                                            <div class="comment-info">
                                                                                <a href="#">Đỗ Hoài Phương</a>
                                                                                <span class="content-cmt">Hihihihi cmt
                                                                                    thử nè <3</span> </div> </div>
                                                                                        </div> </li> <li
                                                                                        class="comment-item-wrap">
                                                                                        <div class="comment-item">
                                                                                            <div class="comment-avatar">
                                                                                                <a href="#"
                                                                                                    class="avatar">
                                                                                                    <img src="assets/img/modal-users.png"
                                                                                                        alt="avatar">
                                                                                                </a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="comment-content">
                                                                                                <div
                                                                                                    class="comment-info">
                                                                                                    <a href="#">Đỗ Hoài
                                                                                                        Phương</a>
                                                                                                    <span
                                                                                                        class="content-cmt">Reaching
                                                                                                        the targets and
                                                                                                        goals set for my
                                                                                                        area.
                                                                                                        Servicing the
                                                                                                        needs of my
                                                                                                        existing
                                                                                                        customers.
                                                                                                        Maintaining the
                                                                                                        relationships
                                                                                                        with existing
                                                                                                        customers for
                                                                                                        repeat business.
                                                                                                        Reporting to top
                                                                                                        managers.
                                                                                                        Keeping up to
                                                                                                        date with the
                                                                                                        products.3</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                            </li>
                                        </ul>
                                        <div class="comment-form-wrap">
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
                                                                <textarea name="" class="form-control"
                                                                    placeholder="Comment here..."></textarea>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media blog">
                            <a href="feed-detail.php">
                                <img src="https://miro.medium.com/max/1024/1*nbracJKz9SJOys3JxraMwg.jpeg"
                                    class="wd-200 rounded mg-r-15" alt="">
                            </a>
                            <div class="media-body">
                                <h5><a href="">Why the English-Speaking World is the New Soviet Union ?</a></h5>
                                <p class="meta-time mg-t-0 mg-b-5 tx-color-03">20/04/2019 10:30AM</p>
                                <p class="summary mg-b-0">Our team is expanding again. We are looking for a Product
                                    Manager and Software ...</p>
                            </div>
                        </div>
                        <div class="media blog">
                            <a href="feed-detail.php">
                                <img src="https://miro.medium.com/max/5472/1*O9r2gYaYeQb7EI5KBrkf3Q.jpeg"
                                    class="wd-200 rounded mg-r-15" alt="">
                            </a>
                            <div class="media-body">
                                <h5><a href="">Maker for Dummies: A Plain English Explanation of the Dai Stablecoin</a>
                                </h5>
                                <p class="meta-time mg-t-0 mg-b-5 tx-color-03">20/04/2019 10:30AM</p>
                                <p class="summary mg-b-0">Our team is expanding again. We are looking for a Product
                                    Manager and Software ...</p>
                            </div>
                        </div>
                        <div class="media blog">
                            <a href="feed-detail.php">
                                <img src="https://miro.medium.com/max/2700/1*1-5hf_o6j3szhVe33L104A.jpeg"
                                    class="wd-200 rounded mg-r-15" alt="">
                            </a>
                            <div class="media-body">
                                <h5><a href="">Algorithms in plain English: time complexity and Big-O notation</a></h5>
                                <p class="meta-time mg-t-0 mg-b-5 tx-color-03">20/04/2019 10:30AM</p>
                                <p class="summary mg-b-0">Our team is expanding again. We are looking for a Product
                                    Manager and Software ...</p>
                            </div>
                        </div>
                        <div class="media blog">
                            <a href="feed-detail.php">
                                <img src="https://genknews.genkcdn.vn/zoom/260_162/2019/10/8/photo-1-1570501849269464125616-crop-15705018593691970025254.jpg"
                                    class="wd-200 rounded mg-r-15" alt="">
                            </a>
                            <div class="media-body">
                                <h5><a href=""> Phụ kiện biến iPhone X, XS thành iPhone 11 Pro? </a></h5>
                                <p class="meta-time mg-t-0 mg-b-5 tx-color-03">20/04/2019 10:30AM</p>
                                <p class="summary mg-b-0">Our team is expanding again. We are looking for a Product
                                    Manager and Software ...</p>
                            </div>
                        </div>
                        <div class="media blog">
                            <a href="feed-detail.php">
                                <img src="https://miro.medium.com/max/1024/1*nbracJKz9SJOys3JxraMwg.jpeg"
                                    class="wd-200 rounded mg-r-15" alt="">
                            </a>
                            <div class="media-body">
                                <h5><a href="">Why the English-Speaking World is the New Soviet Union ?</a></h5>
                                <p class="meta-time mg-t-0 mg-b-5 tx-color-03">20/04/2019 10:30AM</p>
                                <p class="summary mg-b-0">Our team is expanding again. We are looking for a Product
                                    Manager and Software ...</p>
                            </div>
                        </div>

                        <!-- <i href="#" class="loadmore d-block text-center">Load more <i data-feather="chevron-down"></i></Hôm> -->
                    </div>
                </div><!-- card -->
                <nav aria-label="Page navigation" class="mg-t-10">
                    <ul class="pagination mg-b-0 justify-content-center">
                        <li class="page-item disabled"><a class="page-link page-link-icon" href="#"><i
                                    data-feather="chevron-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link page-link-icon" href="#"><i
                                    data-feather="chevron-right"></i></a></li>
                    </ul>
                </nav>
            </div><!-- media-body -->
            <div class="profile-sidebar mg-t-40 mg-lg-t-0 pd-lg-l-25">
                <div class="row">
                    <div class="col-sm-6 col-md-5 col-lg-12">
                        <div class="d-flex align-items-center justify-content-between mg-b-20">
                            <h6 class="tx-13 tx-spacng-1 tx-uppercase tx-semibold mg-b-0">Most Viewed</h6>
                            <a href="" class="link-03">View all</a>
                        </div>
                        <ul class="list-unstyled media-list mg-b-0">

                            <li class="block-blog">
                                <div class="media blog">
                                    <a href="blog-detail.php">
                                        <img src="https://genknews.genkcdn.vn/zoom/260_162/2019/10/8/photo-1-1570501849269464125616-crop-15705018593691970025254.jpg"
                                            class="wd-50 rounded mg-r-15" alt="">
                                    </a>
                                    <div class="media-body">
                                        <a href="blog-detail.php"> Phụ kiện biến iPhone X, XS thành iPhone 11 Pro? </a>
                                    </div>
                                </div>
                            </li>

                            <li class="block-blog">
                                <div class="media blog">
                                    <a href="">
                                        <img src="https://genknews.genkcdn.vn/zoom/380_240/2019/10/3/4323342-1570068733641472757369-crop-15700687408771451307615.jpg"
                                            class="wd-50 rounded mg-r-15" alt="">
                                    </a>
                                    <div class="media-body">
                                        <a href=""> Hệ điều hành MacOS Catalina được phát hành, iTunes chính thức bị
                                            khai tử </a>
                                    </div>
                                </div>
                            </li>

                            <li class="block-blog">
                                <div class="media blog">
                                    <a href="blog-detail.php">
                                        <img src="https://genknews.genkcdn.vn/zoom/250_155/2019/10/8/maxresdefault-1-15705119096021352426536-crop-1570512073919402473101.jpg"
                                            class="wd-50 rounded mg-r-15" alt="">
                                    </a>
                                    <div class="media-body">
                                        <a href="blog-detail.php"> Phụ kiện biến iPhone X, XS thành iPhone 11 Pro? </a>
                                    </div>
                                </div>
                            </li>
                            <li class="block-blog">
                                <div class="media blog">
                                    <a href="blog-detail.php">
                                        <img src="https://genknews.genkcdn.vn/zoom/260_162/2019/10/8/photo-1-1570501849269464125616-crop-15705018593691970025254.jpg"
                                            class="wd-50 rounded mg-r-15" alt="">
                                    </a>
                                    <div class="media-body">
                                        <a href="blog-detail.php"> Phụ kiện biến iPhone X, XS thành iPhone 11 Pro? </a>
                                    </div>
                                </div>
                            </li>

                            <li class="block-blog">
                                <div class="media blog">
                                    <a href="blog-detail.php">
                                        <img src="https://genknews.genkcdn.vn/zoom/380_240/2019/10/3/4323342-1570068733641472757369-crop-15700687408771451307615.jpg"
                                            class="wd-50 rounded mg-r-15" alt="">
                                    </a>
                                    <div class="media-body">
                                        <a href="blog-detail.php"> Hệ điều hành MacOS Catalina được phát hành, iTunes
                                            chính thức bị khai tử </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- col -->
                    <div class="col-sm-6 col-md-5 col-lg-12">
                        <div class="d-flex align-items-center justify-content-between mg-b-20">
                            <h6 class="tx-13 tx-spacng-1 tx-uppercase tx-semibold mg-b-0">Most Viewed</h6>
                            <a href="" class="link-03">View all</a>
                        </div>
                        <ul class="list-unstyled media-list mg-b-0">

                            <li class="block-blog">
                                <div class="media blog">
                                    <a href="blog-detail.php">
                                        <img src="https://genknews.genkcdn.vn/zoom/260_162/2019/10/8/photo-1-1570501849269464125616-crop-15705018593691970025254.jpg"
                                            class="wd-50 rounded mg-r-15" alt="">
                                    </a>
                                    <div class="media-body">
                                        <a href="blog-detail.php"> Phụ kiện biến iPhone X, XS thành iPhone 11 Pro? </a>
                                    </div>
                                </div>
                            </li>

                            <li class="block-blog">
                                <div class="media blog">
                                    <a href="">
                                        <img src="https://genknews.genkcdn.vn/zoom/380_240/2019/10/3/4323342-1570068733641472757369-crop-15700687408771451307615.jpg"
                                            class="wd-50 rounded mg-r-15" alt="">
                                    </a>
                                    <div class="media-body">
                                        <a href=""> Hệ điều hành MacOS Catalina được phát hành, iTunes chính thức bị
                                            khai tử </a>
                                    </div>
                                </div>
                            </li>

                            <li class="block-blog">
                                <div class="media blog">
                                    <a href="blog-detail.php">
                                        <img src="https://genknews.genkcdn.vn/zoom/250_155/2019/10/8/maxresdefault-1-15705119096021352426536-crop-1570512073919402473101.jpg"
                                            class="wd-50 rounded mg-r-15" alt="">
                                    </a>
                                    <div class="media-body">
                                        <a href="blog-detail.php"> Phụ kiện biến iPhone X, XS thành iPhone 11 Pro? </a>
                                    </div>
                                </div>
                            </li>
                            <li class="block-blog">
                                <div class="media blog">
                                    <a href="blog-detail.php">
                                        <img src="https://genknews.genkcdn.vn/zoom/260_162/2019/10/8/photo-1-1570501849269464125616-crop-15705018593691970025254.jpg"
                                            class="wd-50 rounded mg-r-15" alt="">
                                    </a>
                                    <div class="media-body">
                                        <a href="blog-detail.php"> Phụ kiện biến iPhone X, XS thành iPhone 11 Pro? </a>
                                    </div>
                                </div>
                            </li>

                            <li class="block-blog">
                                <div class="media blog">
                                    <a href="blog-detail.php">
                                        <img src="https://genknews.genkcdn.vn/zoom/380_240/2019/10/3/4323342-1570068733641472757369-crop-15700687408771451307615.jpg"
                                            class="wd-50 rounded mg-r-15" alt="">
                                    </a>
                                    <div class="media-body">
                                        <a href="blog-detail.php"> Hệ điều hành MacOS Catalina được phát hành, iTunes
                                            chính thức bị khai tử </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- col -->
                    <div class="col-sm-6 col-md-5 col-lg-12 mg-t-30 mg-sm-t-0 mg-lg-t-40">
                        <div class="d-flex align-items-center justify-content-between mg-b-20">
                            <h6 class="tx-13 tx-spacing-1 tx-uppercase tx-semibold mg-b-0">Recent comments</h6>
                        </div>
                        <ul class="list-unstyled media-list mg-b-0">
                            <li class="media">
                                <a href="">
                                    <div class="avatar avatar-online"><img src="https://via.placeholder.com/350"
                                            class="rounded-circle" alt=""></div>
                                </a>
                                <div class="media-body pd-l-15">
                                    <p class="tx-medium mg-b-2"><a href="" class="link-01  mg-r-5">Dat Codero</a><span
                                            class="tx-12 tx-color-03">has commented on post <a href="blog-detail.php">Hệ
                                                điều hành MacOS Catalina được phát hành, iTunes chính thức bị khai
                                                tử</a></span></p>

                                </div>
                            </li>
                            <li class="media">
                                <a href="">
                                    <div class="avatar avatar-offline"><img src="https://via.placeholder.com/600"
                                            class="rounded-circle" alt=""></div>
                                </a>
                                <div class="media-body pd-l-15">
                                    <p class="tx-medium mg-b-2"><a href="" class="link-01  mg-r-5">Lam .Neter</a><span
                                            class="tx-12 tx-color-03">has commented on post <a
                                                href="blog-detail.php">Thầy đồng về Apple dự báo: nhu cầu mạnh mẽ từ
                                                iPhone 11 và iPhone SE 2 sẽ giúp doanh số iPhone tăng đến 10% trong quý
                                                đầu năm sau Nổi bật</a></span></p>

                                </div>
                            </li>
                            <li class="media">
                                <a href="">
                                    <div class="avatar avatar-offline"><span
                                            class="avatar-initial rounded-circle bg-teal">R</span></div>
                                </a>
                                <div class="media-body pd-l-15">
                                    <p class="tx-medium mg-b-2"><a href="" class="link-01 mg-r-5">Khoa Luu</a> <span
                                            class="tx-12 tx-color-03">has commented on post <a
                                                href="blog-detail.php">Tại sao Apple, Microsoft và Google lại sản xuất
                                                earbuds trong khi Sony, Samsung, Xiaomi hay Sennheiser đều chọn kiểu
                                                dáng in-ear cho True Wireless?</a></span></p>

                                </div>
                            </li>
                            <li class="media">
                                <a href="">
                                    <div class="avatar avatar-online"><span
                                            class="avatar-initial rounded-circle bg-indigo">R</span></div>
                                </a>
                                <div class="media-body pd-l-15">
                                    <p class="tx-medium mg-b-2"><a href="" class="link-01  mg-r-5">Senior Tran Doan</a>
                                        <span class="tx-12 tx-color-03">has commented on post <a
                                                href="blog-detail.php">Google sẽ buộc các nhà sản xuất thiết bị phải ẩn
                                                hệ thống điều hướng riêng của họ trong Android 10</a></span></p>

                                </div>
                            </li>
                            <li class="media">
                                <a href="">
                                    <div class="avatar avatar-online"><span
                                            class="avatar-initial rounded-circle bg-gray-600">A</span></div>
                                </a>
                                <div class="media-body pd-l-15">
                                    <p class="tx-medium mg-b-2"><a href="" class="link-01  mg-r-5">Truong Thuc</a><span
                                            class="tx-12 tx-color-03">has commented on post <a
                                                href="blog-detail.php">Smartphone lên ngôi trong xử lý công việc, đây là
                                                cách giúp các ông, bà chủ trút bỏ nỗi ám ảnh rò rỉ dữ liệu</a></span>
                                    </p>

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
                            <input type="text" class="form-control" id="full_name" placeholder="Full name"
                                value="Trương Văn Lam">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone_number" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="phone_number" placeholder="Phone number"
                                value="(+84) 886 076 289">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Email address"
                                value="zim.mona@monamedia.zim">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="address" placeholder="Your address"
                                value="319, C16 Lý Thường Kiệt Quận 11">
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
<!-- Modal -->
<div class="modal fade view-list-member" id="viewListMember" tabindex="-1" role="dialog" aria-labelledby="viewListMember"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewListMember">Group's members</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-header pb-0 bd-b-0">
            <div class="d-flex add-member-select flex-grow-1">
                    <div class="search-member">
                        <select name="" id="" class="custom-select select2" multiple>
                            <option value="">Trương Văn Lam</option>
                            <option value="">Lam Văn Trương</option>
                            <option value="">Trương Văn Lam</option>
                            <option value="">Lam Văn Trương</option>
                            <option value="">Trương Văn Lam</option>
                            <option value="">Lam Văn Trương</option>
                        </select>
                    </div>
                 
                    <button type="button" class="btn btn-outline-secondary flex-shrink-0" type="button">Thêm thành viên</button>
                </div>
            </div>
            <div class="modal-body">
              

                <div class="member-list-wrap">
                    <div class="member-block pd-x-5">
                        <div class="media blog status-post d-flex align-items-center justify-content-between">
                            <div class="author">
                                <a href="#" class="avatar"><img src="assets/img/teacher.jpg" alt="avatar"></a>
                                <div class="author-info">
                                    <a href="#" class="username"><span class="hasVerifiedBadge">Administrtor</span></a>
                                    <div class="date-comment-view">
                                        <span class="date"><span class="DateTime" title="11:20 ngày 2/10/19">
                                                Teacher</span></span>

                                    </div>
                                </div>
                            </div>
                            <div class="action-blog ">
                                <a href="javascript:;" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-title="Xoá khỏi group"><i data-feather="delete"></i></a>
                            </div>
                        </div>
                        <div class="media blog status-post d-flex align-items-center justify-content-between">
                            <div class="author">
                                <a href="#" class="avatar"><img src="assets/img/teacher.jpg" alt="avatar"></a>
                                <div class="author-info">
                                    <a href="#" class="username"><span class="hasVerifiedBadge">Administrtor</span></a>
                                    <div class="date-comment-view">
                                        <span class="date">
                                            <span class="DateTime" title="11:20 ngày 2/10/19">
                                                Teacher</span>
                                        
                                            </span>

                                    </div>
                                </div>
                            </div>
                            <div class="action-blog ">
                                <a href="javascript:;" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-title="Xoá khỏi group"><i data-feather="delete"></i></a>
                            </div>
                        </div>
                        <div class="media blog status-post d-flex align-items-center justify-content-between">
                            <div class="author">
                                <a href="#" class="avatar"><img src="assets/img/teacher.jpg" alt="avatar"></a>
                                <div class="author-info">
                                    <a href="#" class="username"><span class="hasVerifiedBadge">Administrtor</span></a>
                                    <div class="date-comment-view">
                                        <span class="date"><span class="DateTime" title="11:20 ngày 2/10/19">
                                                Teacher</span></span>

                                    </div>
                                </div>
                            </div>
                            <div class="action-blog ">
                                <a href="javascript:;" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-title="Xoá khỏi group"><i data-feather="delete"></i></a>
                            </div>
                        </div>
                        <div class="media blog status-post d-flex align-items-center justify-content-between">
                            <div class="author">
                                <a href="#" class="avatar"><img src="assets/img/teacher.jpg" alt="avatar"></a>
                                <div class="author-info">
                                    <a href="#" class="username"><span class="hasVerifiedBadge">Administrtor</span></a>
                                    <div class="date-comment-view">
                                        <span class="date"><span class="DateTime" title="11:20 ngày 2/10/19">
                                                Teacher</span></span>

                                    </div>
                                </div>
                            </div>
                            <div class="action-blog ">
                                <a href="javascript:;" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-title="Xoá khỏi group"><i data-feather="delete"></i></a>
                            </div>
                        </div>
                        <div class="media blog status-post d-flex align-items-center justify-content-between">
                            <div class="author">
                                <a href="#" class="avatar"><img src="assets/img/teacher.jpg" alt="avatar"></a>
                                <div class="author-info">
                                    <a href="#" class="username"><span class="hasVerifiedBadge">Administrtor</span></a>
                                    <div class="date-comment-view">
                                        <span class="date"><span class="DateTime" title="11:20 ngày 2/10/19">
                                                Teacher</span></span>

                                    </div>
                                </div>
                            </div>
                            <div class="action-blog ">
                                <a href="javascript:;" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-title="Xoá khỏi group"><i data-feather="delete"></i></a>
                            </div>
                        </div>
                        <div class="media blog status-post d-flex align-items-center justify-content-between">
                            <div class="author">
                                <a href="#" class="avatar"><img src="assets/img/teacher.jpg" alt="avatar"></a>
                                <div class="author-info">
                                    <a href="#" class="username"><span class="hasVerifiedBadge">Administrtor</span></a>
                                    <div class="date-comment-view">
                                        <span class="date"><span class="DateTime" title="11:20 ngày 2/10/19">
                                                Teacher</span></span>

                                    </div>
                                </div>
                            </div>
                            <div class="action-blog ">
                                <a href="javascript:;" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-title="Xoá khỏi group"><i data-feather="delete"></i></a>
                            </div>
                        </div>
                        <div class="media blog status-post d-flex align-items-center justify-content-between">
                            <div class="author">
                                <a href="#" class="avatar"><img src="assets/img/teacher.jpg" alt="avatar"></a>
                                <div class="author-info">
                                    <a href="#" class="username"><span class="hasVerifiedBadge">Administrtor</span></a>
                                    <div class="date-comment-view">
                                        <span class="date"><span class="DateTime" title="11:20 ngày 2/10/19">
                                                Teacher</span></span>

                                    </div>
                                </div>
                            </div>
                            <div class="action-blog ">
                                <a href="javascript:;" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-title="Xoá khỏi group"><i data-feather="delete"></i></a>
                            </div>
                        </div>
                        <div class="media blog status-post d-flex align-items-center justify-content-between">
                            <div class="author">
                                <a href="#" class="avatar"><img src="assets/img/teacher.jpg" alt="avatar"></a>
                                <div class="author-info">
                                    <a href="#" class="username"><span class="hasVerifiedBadge">Administrtor</span></a>
                                    <div class="date-comment-view">
                                        <span class="date"><span class="DateTime" title="11:20 ngày 2/10/19">
                                                Teacher</span></span>

                                    </div>
                                </div>
                            </div>
                            <div class="action-blog ">
                                <a href="javascript:;" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-title="Xoá khỏi group"><i data-feather="delete"></i></a>
                            </div>
                        </div>
                        <div class="media blog status-post d-flex align-items-center justify-content-between">
                            <div class="author">
                                <a href="#" class="avatar"><img src="assets/img/teacher.jpg" alt="avatar"></a>
                                <div class="author-info">
                                    <a href="#" class="username"><span class="hasVerifiedBadge">Administrtor</span></a>
                                    <div class="date-comment-view">
                                        <span class="date"><span class="DateTime" title="11:20 ngày 2/10/19">
                                                Teacher</span></span>

                                    </div>
                                </div>
                            </div>
                            <div class="action-blog ">
                                <a href="javascript:;" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-title="Xoá khỏi group"><i data-feather="delete"></i></a>
                            </div>
                        </div>
                        <div class="media blog status-post d-flex align-items-center justify-content-between">
                            <div class="author">
                                <a href="#" class="avatar"><img src="assets/img/teacher.jpg" alt="avatar"></a>
                                <div class="author-info">
                                    <a href="#" class="username"><span class="hasVerifiedBadge">Administrtor</span></a>
                                    <div class="date-comment-view">
                                        <span class="date"><span class="DateTime" title="11:20 ngày 2/10/19">
                                                Teacher</span></span>

                                    </div>
                                </div>
                            </div>
                            <div class="action-blog ">
                                <a href="javascript:;" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-title="Xoá khỏi group"><i data-feather="delete"></i></a>
                            </div>
                        </div>
                        <div class="media blog status-post d-flex align-items-center justify-content-between">
                            <div class="author">
                                <a href="#" class="avatar"><img src="assets/img/teacher.jpg" alt="avatar"></a>
                                <div class="author-info">
                                    <a href="#" class="username"><span class="hasVerifiedBadge">Administrtor</span></a>
                                    <div class="date-comment-view">
                                        <span class="date"><span class="DateTime" title="11:20 ngày 2/10/19">
                                                Teacher</span></span>

                                    </div>
                                </div>
                            </div>
                            <div class="action-blog ">
                                <a href="javascript:;" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-title="Xoá khỏi group"><i data-feather="delete"></i></a>
                            </div>
                        </div>
                        <div class="media blog status-post d-flex align-items-center justify-content-between">
                            <div class="author">
                                <a href="#" class="avatar"><img src="assets/img/teacher.jpg" alt="avatar"></a>
                                <div class="author-info">
                                    <a href="#" class="username"><span class="hasVerifiedBadge">Administrtor</span></a>
                                    <div class="date-comment-view">
                                        <span class="date"><span class="DateTime" title="11:20 ngày 2/10/19">
                                                Teacher</span></span>

                                    </div>
                                </div>
                            </div>
                            <div class="action-blog ">
                                <a href="javascript:;" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-title="Xoá khỏi group"><i data-feather="delete"></i></a>
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
<script src="assets/js/infinite-scroll.pkgd.min.js"></script>

<script>
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
    $('.upload-image').on('click', function() {
        $('.background-demo').hide();
        $('.status-wrap').removeClass('active');
        $('.status-wrap').attr('style', '');
        $('.img-upload').click();
    });
    $('.select-background').on('click', function() {
        $('.background-demo').fadeToggle();
        $('.image-demo').fadeOut(300);
    });
    $('.background-demo').on('click', '.demo-bg', function() {
        const color = $(this).data('color');
        const imageSrc = $(this).data('image');
        $('.status-wrap').css('background-image', 'url("' + imageSrc + '")');
        $('.status-wrap').css('color', color);
        $('.status-wrap').addClass('active');
    });
    //Auto resize textarea
    $('body').on('keydown', 'textarea', autosize);

    function autosize() {
        var el = this;
        setTimeout(function() {
            el.style.cssText = 'height:auto; padding:10px';
            el.style.cssText = '-moz-box-sizing:content-box';
            el.style.cssText = 'height:' + el.scrollHeight + 'px';
        }, 0);
    }
    const readUrl = (input) => {
        try {
            if (input.files && input.files[0] && typeof input.files === 'object') {
                let fileArr = Array.from(input.files);
                fileArr.map((file, index) => {
                    const reader = new FileReader();
                    reader.onload = e => {
                        // console.log(file);
                        let $box = $('<div class="image-box"></div>');
                        let $deleteIcon = $(
                            '<span class="delete-image"><i class="fa fa-times-circle"></i></span>'
                            );
                        let $image = $('<img src="' + e.target.result + '" alt="image">');
                        $box.append($image);
                        $box.append($deleteIcon);
                        $deleteIcon.on('click', function() {
                            $(this).closest('.image-box').remove();
                        });
                        $('.list-preview').append($box);
                    }
                    reader.readAsDataURL(file);
                });
                $('.image-demo').fadeIn(300);
            }


        } catch (e) {}
    }
    $('.img-upload').on('change', function() {
        readUrl(this);
    });
    $('.write-status').on('click', function() {
        $('.create-new-status').slideToggle(200);
    });
    $('body').on('click', '.comment-toggle', function() {
        $(this).closest('.comment-wrap').find('.comment-block').stop().slideToggle();
    });

    $('.carousel-navigator').on('click', 'li', function() {
        $(this).addClass('active');
        $(this).siblings().not($(this)).removeClass('active');
    });
    $('.carousel-navigator').each(function(index, element) {
        if ($(element).children().length < 2) {
            $(element).closest('.media-body').find('.carousel').carousel('dispose');
            $(element).remove();
        }
    });

});
</script>