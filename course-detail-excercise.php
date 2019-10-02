<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                <div class="navigator">
                    <div class="card-body pd-0">
                    <label class="tx-uppercase tx-sans tx-10 tx-medium tx-spacing-1 tx-color-03 mg-b-15">Danh mục</label>
                        <ul class="list-menu">
                            <li class="menu-item ">
                                <a href="course-detail-schedule.php" class="menu-link"><i data-feather="calendar"></i>Lịch học</a>
                            </li>
                            <li class="menu-item">
                                <a href="course-detail-docs.php" class="menu-link"><i data-feather="book"></i>Tài liệu</a>
                            </li>
                            <li class="menu-item active">
                                <a href="course-detail-exercise.php" class="menu-link"><i data-feather="book-open"></i>Bài tập</a>
                            </li>
                            <li class="menu-item">
                                <a href="course-detail-notification.php" class="menu-link"><i data-feather="bell"></i>Thông báo</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="schedule-coming">
                    <label class="tx-uppercase tx-sans tx-10 tx-medium tx-spacing-1 tx-color-03 mg-b-15">Ca học sắp tới</label>
                    <div class="schedule-group">
                        <a href="#" class="schedule-item bd-l bd-2 bd-danger">
                            <h6>A-IELST Master Series - 502 </h6>
                            <span>8:00am - 9:00am, 27/04/2019</span>
                        </a><!-- schedule-item -->
                        <a href="#" class="schedule-item bd-l bd-2 bd-success">
                        <h6>A-IELST Beginner - 502</h6>
                            <span>8:00am - 9:00am, 27/04/2019</span>
                        </a><!-- schedule-item -->
                        <a href="#" class="schedule-item bd-l bd-2 bd-primary">
                            <h6>A-IELST Foundation - 502</h6>
                            <span>8:00am - 9:00am, 27/04/2019</span>
                        </a><!-- schedule-item -->
                        <a href="#" class="schedule-item bd-l bd-2 bd-danger">
                            <h6>A-IELST Master - 502</h6>
                            <span>8:00am - 9:00am, 27/04/2019</span>
                        </a><!-- schedule-item -->
                        <a href="#" class="schedule-item bd-l bd-2 bd-success">
                        <h6>A-IELST Master - 502</h6>
                            <span>8:00am - 9:00am, 27/04/2019</span>
                        </a><!-- schedule-item -->
                        <a href="#" class="schedule-item bd-l bd-2 bd-primary">
                            <h6>A-IELST Master - 502 </h6>
                            <span>8:00am - 9:00am, 27/04/2019</span>
                        </a><!-- schedule-item -->
                    </div>
                </div>
                
            </div>
            <div class="col-12 colsm-12 col-md-8 col-lg-9">
                <div class="docs-wrap">
                    <div class="card">
                        <div class="card-header">
                            <div class="top-filter">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="title mg-b-0">Bài tập</h6>
                                    <div class="action">
                                        <a href="javascript:;" class="btn btn-primary mg-r-10" data-toggle="modal" data-target="#js-addExercise" data-animation="effect-scale">Tạo bài tập</a>
                                        <a href="javascript:;" class="btn btn-primary" data-toggle="modal" data-target="#js-addGroup" data-animation="effect-scale">Tạo nhóm bài</a>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-justified" id="excercise-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tuluan-tab" data-toggle="tab" href="#bt-tuluan" role="tab" aria-controls="bt-tuluan" aria-selected="true">Tự luận</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tracnghiem-tab" data-toggle="tab" href="#bt-tracnghiem" role="tab" aria-controls="bt-tracnghiem" aria-selected="false">Trắc nghiệm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="noi-tab" data-toggle="tab" href="#bt-noi" role="tab" aria-controls="bt-noi" aria-selected="false">Bài tập nói</a>
                                </li>
                            </ul>
                            <div class="tab-content bd bd-gray-00 bd-t-0 pd-20" id="excercise-content">
                                <div class="tab-pane fade show active" id="bt-tuluan" role="tabpanel" aria-labelledby="tuluan-tab">
                                    <div class="excer-item">
                                        <div class="accordion">
                                            <h6><div class="d-flex justify-content-between"><span class="deadline">WRITTING TASK 1</span></span class="number">2 bài</span></div></h6>
                                            <div class="list-excer">
                                                <div class="excer-row">
                                                    <div class="accordion accordion-primary accordion-style1">
                                                        <h6><div class="d-flex justify-content-between"><span class="deadline">Hạn nộp: <span class="date">27/04/2019</span></span><span>Score: <span class="score">8.0</span></span></div></h6>
                                                        <div class="excer-bd">
                                                            <div class="bd-action">
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6 ">
                                                                        <label>Ngày bắt đầu:</label>
                                                                        <input type="text" class="form-control" placeholder="Ngày bắt đầu">
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <label>Hạn nộp:</label>
                                                                        <input type="text" class="form-control" placeholder="Hạn nộp">
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 mg-t-20">
                                                                        <a href="javascript:;" class="btn btn-primary mg-sm-r-10">Xác nhận</a>
                                                                        <a href="javascript:;" class="btn btn-warning">Sửa bài tập</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="bd-content">
                                                                <p>Các bạn nộp bản word cho chị của part 1 &amp; 2 hôm qua nhé!</p>
                                                                <p>Part 1:</p><p>1.&nbsp;&nbsp;&nbsp; Do you enjoy your birthdays?</p>
                                                                <p>2.&nbsp;&nbsp;&nbsp; Do you usually celebrate your birthday?</p>
                                                                <p>3.&nbsp;&nbsp;&nbsp; What did you do on your last birthday?</p>
                                                                <p>4.&nbsp;&nbsp;&nbsp; Can you remember a birthday you enjoyed as a child?</p>
                                                                
                                                                <p>Part 2:</p><p>PART 2</p><p>Describe an important change in your life.&nbsp;</p>
                                                                <p>You should say:&nbsp;&nbsp;</p>
                                                                <p>When this change happened&nbsp;&nbsp; <br>What the change was&nbsp;&nbsp; <br>How this event has influenced your life<br>and explain why it was important.</p>
                                                                <img src="https://www.highcharts.com/images/docs/line.png" alt="chart">
                                                            </div>
                                                            
                                                           
                                                        </div>
                                                        <h6><span class="deadline">Hạn nộp: <span class="date">30/04/2019</span></span></h6>
                                                        <div class="excer-bd">
                                                            <div class="bd-action">
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6 ">
                                                                        <label>Ngày bắt đầu:</label>
                                                                        <input type="text" class="form-control" placeholder="Ngày bắt đầu">
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <label>Hạn nộp:</label>
                                                                        <input type="text" class="form-control" placeholder="Hạn nộp">
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 mg-t-20">
                                                                        <a href="javascript:;" class="btn btn-primary mg-sm-r-10">Xác nhận</a>
                                                                        <a href="javascript:;" class="btn btn-warning">Sửa bài tập</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="bd-content">
                                                             <span><h2 style="text-align: center;" data-mce-style="text-align: center;"><strong>The history of UFOs</strong></h2><p>Unidentified Flying Object (or “UFO”) is a term commonly used to describe lights or shapes in the sky. It was first coined by the United States Air Force in 1952 to describe sightings of mysterious objects in the sky that could not be explained even after careful investigation. Nowadays UFOs are spotted frequently and feature in numerous movies and TV shows. Another popular name for such an object is, “Flying Saucer,” in reference to the round shape of many UFOs.</p><p>The first widely publicized UFO sighting was in 1947, by a pilot called Kenneth Arnold. Following this event, public sightings of UFOs increased dramatically. Movies and TV shows began featuring visitors from outer space, arriving on earth in flying saucers. With the popularity of these images, many people claimed to have seen lights in the sky. Some experts believe that people simply think they see UFOs because of the influence of TV and movies.</p><p>However, experts estimate that as little as 5% of these sightings could be called “unidentified.” Usually, these lights are made by aircraft, satellites, or weather balloons. Top secret air force activities during the Cold War may have been responsible for many of the UFO sightings in America and Europe. Although not actually aliens, the secretive nature of these flying objects is definitely unidentified.</p><p>Another popular idea concerning UFOs concerns the role of world governments. Specifically, people believe that the US government has discovered alien life and operates a “cover-up” to hide the truth from the public. The most widely believed cover-up is that of the Roswell Incident. In July 1947, a UFO supposedly landed in Roswell, New Mexico, and was examined and hidden by government agents. There have been many investigations into the Roswell Incident, however, these reports always claim that no such event occurred.</p><p><strong>1st&nbsp;Reading (Skimming)</strong></p><p><strong>Read through the article and answer each of the following questions.</strong></p><p><strong>1. What is the purpose of this report?</strong></p><p>a) To describe the history of alien life.</p><p>b) To describe government cover-ups.</p><p>c) To describe the history of UFO sightings.</p><p>d) To describe UFOs in popular movies.</p><p><br></p><p><strong>2. Why are UFO sightings so controversial?</strong></p><p>a) They have never been proved.</p><p>b) There are many sightings.</p><p>c) The government covers up sightings.</p><p>d) There are very few UFO sightings.</p><p><br></p><p><strong>2nd&nbsp;Reading (Scanning)&nbsp;</strong></p><p><strong>3. State whether the following statements about the reading are true (T) or false (F) according to the information in the passage.</strong></p><p>a- Kenneth Arnold saw the first UFO.</p><p>b- The Roswell Incident occurred in 1952</p><p>c- Experts say many normal things account for UFO sightings.</p><p>d- Flying saucers are square-shaped.</p></span>
                                                            </div>
                                                        
                                                         </div>
                                                    </div>

                                                    
                                                </div>
                                            </div>
                                            <h6><div class="d-flex justify-content-between"><span class="deadline">READING TASK 1</span></span class="number">2 bài</span></div></h6>
                                            <div class="list-excer">
                                                <div class="excer-row">
                                                    <div class="accordion accordion-primary accordion-style1">
                                                        <h6><div class="d-flex justify-content-between"><span class="deadline">Hạn nộp: <span class="date">27/04/2019</span></span><span>Score: <span class="score">8.0</span></span></div></h6>
                                                        <div class="excer-bd">
                                                            <div class="bd-action">
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6 ">
                                                                        <label>Ngày bắt đầu:</label>
                                                                        <input type="text" class="form-control" placeholder="Ngày bắt đầu">
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <label>Hạn nộp:</label>
                                                                        <input type="text" class="form-control" placeholder="Hạn nộp">
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 mg-t-20">
                                                                        <a href="javascript:;" class="btn btn-primary mg-sm-r-10">Xác nhận</a>
                                                                        <a href="javascript:;" class="btn btn-warning">Sửa bài tập</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="bd-content">
                                                                <p>Các bạn nộp bản word cho chị của part 1 &amp; 2 hôm qua nhé!</p>
                                                                <p>Part 1:</p><p>1.&nbsp;&nbsp;&nbsp; Do you enjoy your birthdays?</p>
                                                                <p>2.&nbsp;&nbsp;&nbsp; Do you usually celebrate your birthday?</p>
                                                                <p>3.&nbsp;&nbsp;&nbsp; What did you do on your last birthday?</p>
                                                                <p>4.&nbsp;&nbsp;&nbsp; Can you remember a birthday you enjoyed as a child?</p>
                                                                
                                                                <p>Part 2:</p><p>PART 2</p><p>Describe an important change in your life.&nbsp;</p>
                                                                <p>You should say:&nbsp;&nbsp;</p>
                                                                <p>When this change happened&nbsp;&nbsp; <br>What the change was&nbsp;&nbsp; <br>How this event has influenced your life<br>and explain why it was important.</p>
                                                                <img src="https://www.highcharts.com/images/docs/line.png" alt="chart">
                                                            </div>
                                                            
                                                           
                                                        </div>
                                                        <h6><span class="deadline">Hạn nộp: <span class="date">30/04/2019</span></span></h6>
                                                        <div class="excer-bd">
                                                            <div class="bd-action">
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6 ">
                                                                        <label>Ngày bắt đầu:</label>
                                                                        <input type="text" class="form-control" placeholder="Ngày bắt đầu">
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <label>Hạn nộp:</label>
                                                                        <input type="text" class="form-control" placeholder="Hạn nộp">
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 mg-t-20">
                                                                        <a href="javascript:;" class="btn btn-primary mg-sm-r-10">Xác nhận</a>
                                                                        <a href="javascript:;" class="btn btn-warning">Sửa bài tập</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="bd-content">
                                                             <span><h2 style="text-align: center;" data-mce-style="text-align: center;"><strong>The history of UFOs</strong></h2><p>Unidentified Flying Object (or “UFO”) is a term commonly used to describe lights or shapes in the sky. It was first coined by the United States Air Force in 1952 to describe sightings of mysterious objects in the sky that could not be explained even after careful investigation. Nowadays UFOs are spotted frequently and feature in numerous movies and TV shows. Another popular name for such an object is, “Flying Saucer,” in reference to the round shape of many UFOs.</p><p>The first widely publicized UFO sighting was in 1947, by a pilot called Kenneth Arnold. Following this event, public sightings of UFOs increased dramatically. Movies and TV shows began featuring visitors from outer space, arriving on earth in flying saucers. With the popularity of these images, many people claimed to have seen lights in the sky. Some experts believe that people simply think they see UFOs because of the influence of TV and movies.</p><p>However, experts estimate that as little as 5% of these sightings could be called “unidentified.” Usually, these lights are made by aircraft, satellites, or weather balloons. Top secret air force activities during the Cold War may have been responsible for many of the UFO sightings in America and Europe. Although not actually aliens, the secretive nature of these flying objects is definitely unidentified.</p><p>Another popular idea concerning UFOs concerns the role of world governments. Specifically, people believe that the US government has discovered alien life and operates a “cover-up” to hide the truth from the public. The most widely believed cover-up is that of the Roswell Incident. In July 1947, a UFO supposedly landed in Roswell, New Mexico, and was examined and hidden by government agents. There have been many investigations into the Roswell Incident, however, these reports always claim that no such event occurred.</p><p><strong>1st&nbsp;Reading (Skimming)</strong></p><p><strong>Read through the article and answer each of the following questions.</strong></p><p><strong>1. What is the purpose of this report?</strong></p><p>a) To describe the history of alien life.</p><p>b) To describe government cover-ups.</p><p>c) To describe the history of UFO sightings.</p><p>d) To describe UFOs in popular movies.</p><p><br></p><p><strong>2. Why are UFO sightings so controversial?</strong></p><p>a) They have never been proved.</p><p>b) There are many sightings.</p><p>c) The government covers up sightings.</p><p>d) There are very few UFO sightings.</p><p><br></p><p><strong>2nd&nbsp;Reading (Scanning)&nbsp;</strong></p><p><strong>3. State whether the following statements about the reading are true (T) or false (F) according to the information in the passage.</strong></p><p>a- Kenneth Arnold saw the first UFO.</p><p>b- The Roswell Incident occurred in 1952</p><p>c- Experts say many normal things account for UFO sightings.</p><p>d- Flying saucers are square-shaped.</p></span>
                                                            </div>
                                                        
                                                         </div>
                                                    </div>

                                                    
                                                </div>
                                            </div>
                                            <h6><div class="d-flex justify-content-between"><span class="deadline">WRITTING TASK 2</span></span class="number">2 bài</span></div></h6>
                                            <div class="list-excer">
                                                <div class="excer-row">
                                                    <div class="accordion accordion-primary accordion-style1">
                                                        <h6><div class="d-flex justify-content-between"><span class="deadline">Hạn nộp: <span class="date">27/04/2019</span></span><span>Score: <span class="score">8.0</span></span></div></h6>
                                                        <div class="excer-bd">
                                                            <div class="bd-action">
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6 ">
                                                                        <label>Ngày bắt đầu:</label>
                                                                        <input type="text" class="form-control" placeholder="Ngày bắt đầu">
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <label>Hạn nộp:</label>
                                                                        <input type="text" class="form-control" placeholder="Hạn nộp">
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 mg-t-20">
                                                                        <a href="javascript:;" class="btn btn-primary mg-sm-r-10">Xác nhận</a>
                                                                        <a href="javascript:;" class="btn btn-warning">Sửa bài tập</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="bd-content">
                                                                <p>Các bạn nộp bản word cho chị của part 1 &amp; 2 hôm qua nhé!</p>
                                                                <p>Part 1:</p><p>1.&nbsp;&nbsp;&nbsp; Do you enjoy your birthdays?</p>
                                                                <p>2.&nbsp;&nbsp;&nbsp; Do you usually celebrate your birthday?</p>
                                                                <p>3.&nbsp;&nbsp;&nbsp; What did you do on your last birthday?</p>
                                                                <p>4.&nbsp;&nbsp;&nbsp; Can you remember a birthday you enjoyed as a child?</p>
                                                                
                                                                <p>Part 2:</p><p>PART 2</p><p>Describe an important change in your life.&nbsp;</p>
                                                                <p>You should say:&nbsp;&nbsp;</p>
                                                                <p>When this change happened&nbsp;&nbsp; <br>What the change was&nbsp;&nbsp; <br>How this event has influenced your life<br>and explain why it was important.</p>
                                                                <img src="https://www.highcharts.com/images/docs/line.png" alt="chart">
                                                            </div>
                                                            
                                                           
                                                        </div>
                                                        <h6><span class="deadline">Hạn nộp: <span class="date">30/04/2019</span></span></h6>
                                                        <div class="excer-bd">
                                                            <div class="bd-action">
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6 ">
                                                                        <label>Ngày bắt đầu:</label>
                                                                        <input type="text" class="form-control" placeholder="Ngày bắt đầu">
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <label>Hạn nộp:</label>
                                                                        <input type="text" class="form-control" placeholder="Hạn nộp">
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 mg-t-20">
                                                                        <a href="javascript:;" class="btn btn-primary mg-sm-r-10">Xác nhận</a>
                                                                        <a href="javascript:;" class="btn btn-warning">Sửa bài tập</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="bd-content">
                                                             <span><h2 style="text-align: center;" data-mce-style="text-align: center;"><strong>The history of UFOs</strong></h2><p>Unidentified Flying Object (or “UFO”) is a term commonly used to describe lights or shapes in the sky. It was first coined by the United States Air Force in 1952 to describe sightings of mysterious objects in the sky that could not be explained even after careful investigation. Nowadays UFOs are spotted frequently and feature in numerous movies and TV shows. Another popular name for such an object is, “Flying Saucer,” in reference to the round shape of many UFOs.</p><p>The first widely publicized UFO sighting was in 1947, by a pilot called Kenneth Arnold. Following this event, public sightings of UFOs increased dramatically. Movies and TV shows began featuring visitors from outer space, arriving on earth in flying saucers. With the popularity of these images, many people claimed to have seen lights in the sky. Some experts believe that people simply think they see UFOs because of the influence of TV and movies.</p><p>However, experts estimate that as little as 5% of these sightings could be called “unidentified.” Usually, these lights are made by aircraft, satellites, or weather balloons. Top secret air force activities during the Cold War may have been responsible for many of the UFO sightings in America and Europe. Although not actually aliens, the secretive nature of these flying objects is definitely unidentified.</p><p>Another popular idea concerning UFOs concerns the role of world governments. Specifically, people believe that the US government has discovered alien life and operates a “cover-up” to hide the truth from the public. The most widely believed cover-up is that of the Roswell Incident. In July 1947, a UFO supposedly landed in Roswell, New Mexico, and was examined and hidden by government agents. There have been many investigations into the Roswell Incident, however, these reports always claim that no such event occurred.</p><p><strong>1st&nbsp;Reading (Skimming)</strong></p><p><strong>Read through the article and answer each of the following questions.</strong></p><p><strong>1. What is the purpose of this report?</strong></p><p>a) To describe the history of alien life.</p><p>b) To describe government cover-ups.</p><p>c) To describe the history of UFO sightings.</p><p>d) To describe UFOs in popular movies.</p><p><br></p><p><strong>2. Why are UFO sightings so controversial?</strong></p><p>a) They have never been proved.</p><p>b) There are many sightings.</p><p>c) The government covers up sightings.</p><p>d) There are very few UFO sightings.</p><p><br></p><p><strong>2nd&nbsp;Reading (Scanning)&nbsp;</strong></p><p><strong>3. State whether the following statements about the reading are true (T) or false (F) according to the information in the passage.</strong></p><p>a- Kenneth Arnold saw the first UFO.</p><p>b- The Roswell Incident occurred in 1952</p><p>c- Experts say many normal things account for UFO sightings.</p><p>d- Flying saucers are square-shaped.</p></span>
                                                            </div>
                                                        
                                                         </div>
                                                    </div>

                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bt-tracnghiem" role="tabpanel" aria-labelledby="tracnghiem-tab">
                                    <div class="tracnghiem-wrap">
                                        <div class="tn-block card">
                                            <div class="tn-item d-md-flex card-body row pd-15">
                                                <div class="left-col col-12 col-sm-8">
                                                    <a href="#" class="txt title">Bài trắc nghiệm LESSON 1</a>
                                                    <p class="txt">Hạn nộp: 30/04/2019</p>
                                                    <p class="txt">Trạng thái: <span class="status text-danger">Chưa hoàn thành</span></p>
                                                </div>
                                                <div class="right-col col-12 col-sm-4">
                                                    <p class="txt">Score: <span class="score">8.0</span></p>
                                                  
                                                    <p class="txt mg-t-10"><a href="#" class="btn btn-primary">Làm bài</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tn-block card">
                                            <div class="tn-item d-md-flex card-body row pd-15">
                                                <div class="left-col col-12 col-sm-8">
                                                    <a href="#" class="txt title">Bài trắc nghiệm LESSON 1</a>
                                             
                                                    <p class="txt">Hạn nộp: 30/04/2019</p>
                                                    <p class="txt">Trạng thái: <span class="status text-success">Hoàn thành</span></p>
                                                </div>
                                                <div class="right-col col-12 col-sm-4">
                                                    <p class="txt">Score: <span class="score">8.0</span></p>
                                                    <p class="txt mg-t-10">
                                                        <a href="#" class="btn btn-warning mg-r-10">Sửa bài</a>
                                                        <a href="#" class="btn btn-primary">Làm bài</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bt-noi" role="tabpanel" aria-labelledby="noi-tab">
                                    <div class="noi-wrap">
                                        <div class="tn-block card">
                                            <div class="tn-item d-md-flex card-body row pd-15">
                                                <div class="left-col col-12 col-sm-8">
                                                    <a href="#" class="txt title">SPEAKING LESSON 3</a>
                                                    <p class="txt">Hạn nộp: 30/04/2019</p>
                                                    <p class="txt">Trạng thái: <span class="status text-danger">Chưa hoàn thành</span></p>
                                                </div>
                                                <div class="right-col col-12 col-sm-4">
                                                    <p class="txt">Score: <span class="score">8.0</span></p>
                                                  
                                                    <p class="txt mg-t-10">
                                                        <a href="#" class="btn btn-warning mg-r-10">Sửa bài</a>
                                                        <a href="#" class="btn btn-primary">Làm bài</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tn-block card">
                                            <div class="tn-item d-md-flex card-body row pd-15">
                                                <div class="left-col col-12 col-sm-8">
                                                    <a href="#" class="txt title">Bài giao tiếp LESSON 1</a>
                                             
                                                    <p class="txt">Hạn nộp: 30/04/2019</p>
                                                    <p class="txt">Trạng thái: <span class="status text-success">Hoàn thành</span></p>
                                                </div>
                                                <div class="right-col col-12 col-sm-4">
                                                    <p class="txt">Score: <span class="score">8.0</span></p>
                                                    <p class="txt mg-t-10"><a href="#" class="btn btn-primary">Làm bài</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </div><!-- container -->
</div><!-- content -->
<div class="modal fade" tabindex="-1" role="dialog" id="js-addGroup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tạo nhóm bài</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form">
            <div class="form-group">
                <label>Loại bài</label>
                <select name="" id="" class="form-control">
                    <option value="">Tự luận</option>
                    <option value="">Audio</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tên nhóm bài</label>
                <input type="text" placeholder="Nhóm bài..." class="form-control">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng lại</button>
        <button type="button" class="btn btn-primary">Tạo mới</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" role="dialog" id="js-addExercise">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tạo bài tập</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <p>Nhóm câu hỏi</p>
                        <select name="" id="" class="select2 form-control">
                            <option label="Choose one" disabled selected>Chọn nhóm</option>
                            <option value="Firefox">SPEAKING</option>
                            <option value="Chrome">SPEAKING</option>
                            <option value="Safari">SPEAKING</option>
                            <option value="Opera">SPEAKING</option>
                            <option value="Internet Explorer">Internet</option>
                        </select>
                    </div>
                </div>
            </div>
           
            <div class="form-group">
                <p>Tên nhóm bài</p>
                <input type="text" placeholder="Nhóm bài..." class="form-control">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng lại</button>
        <button type="button" class="btn btn-primary">Tạo mới</button>
      </div>
    </div>
  </div>
</div>
<?php require_once( 'footer.php' ); ?>
<script src="lib/jqueryui/jquery-ui.min.js"></script>
<script>
    $(document).ready(function(){
        $('.accordion').accordion({
            active : 'none',
            heightStyle: 'content',
            collapsible: true
        });

    });
</script>
