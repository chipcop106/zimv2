<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="left-sticky">
                
                <div class="card">
                    <div class="card-header">
                        <h6 class="mg-b-0">Thông tin cá nhân</h6>
                    </div>
                    <div class="card-body">
                        <div class="information-block">
                            <div class="student-info">
                                <div class="student-course">
                                    <p class="txt"><span class="lb">Cơ sở:</span> <span class="value">ZIM - 65 Yên Lãng</span></p>
                                    <p class="txt"><span class="lb">Khoá học:</span> <span class="value">A-IELTS Foundation</span></p>
                                    <p class="txt"><span class="lb">Ngày khai giảng:</span> <span class="value">18/09/2019</span></p>
                                    <p class="txt"><span class="lb">Ca học:</span> <span class="value">09:30-11:30</span></p>
                                    <p class="txt"><span class="lb">Họ và tên:</span> <span class="value">Đặng bảo long</span></p>
                                </div>
                               <div class="w-100 mg-t-10">
                                   <a href="#" class="btn btn-primary mg-md-r-10">Nộp bài</a>
                                   <a href="#" class="btn btn-warning">Sửa bài</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mg-t-10">
                    <div class="card-header">
                        <h6 class="mg-b-0 d-flex align-items-end justify-content-between"><span>Mục câu hỏi</span><span>32 câu</span></h6>
                    </div>
                    <div class="card-body">
                        <div class="question-nav">
                            <nav class="quiz-index nav nav-pills flex-wrap" id="quiz-index">
                                <a href="#quiz-id-1" class="index-link checked">Câu 1 <i data-feather="check-circle"></i></a>
                                <a href="#quiz-id-2" class="index-link checked">Câu 2 <i data-feather="check-circle"></i></a>
                                <a href="#quiz-id-3" class="index-link">Câu 3 <i data-feather="check-circle"></i></a>
                                <a href="#quiz-id-4" class="index-link">Câu 4 <i data-feather="check-circle"></i></a>
                                <a href="#quiz-id-5" class="index-link">Câu 5 <i data-feather="check-circle"></i></a>
                                <a href="#quiz-id-6" class="index-link">Câu 6 <i data-feather="check-circle"></i></a>
                                <a href="#quiz-id-7" class="index-link">Câu 7 <i data-feather="check-circle"></i></a>
                            </nav>
                        </div>
                    </div>
                </div>
                </div>
             
            </div>
            <div class="col-12 col-md-8">
                <div class="list-question" data-spy="scroll" data-target="#quiz-index">
                    <div class="quiz-group" id="quiz-id-1">
                        <div class="quiz-question">
                            <span class="bold">Câu 1: Lorem Ipsum is simply dummy text of the printing and typesetting industry ?</span>
                        </div>
                        <div class="quiz-fill-word">
                            <div class="article-cont">
                                <div class="mona-content">
                                <p>Checkbox nhiều đáp án</p>
                                </div>
                            </div>
                        </div>
                        <div class="quiz-answer">
                            <ul class="quiz-answer-ul ">
                                <li class=" checkbox-item ">
                                    <label class="checklb">
                                        <input class="check-input " type="checkbox" name="quiz[208][1][data][]" value="0" checked>
                                        <span class="ip-avata"></span>
                                        <div class="val">I hope it was right.</div>

                                    </label>
                                </li>
                                <li class="checkbox-item">
                                    <label class="checklb">
                                        <input class="check-input" type="checkbox" name="quiz[208][1][data][]" value="1">
                                        <span class="ip-avata"></span>
                                        <div class="val">We can't decide.</div>
                                    </label>
                                </li>
                                <li class="checkbox-item">
                                    <label class="checklb">
                                        <input class="check-input" type="checkbox" name="quiz[208][1][data][]" value="2">
                                        <span class="ip-avata"></span>
                                        <div class="val">It wasn't very difficult.</div>
                                    </label>
                                </li>
                                <li class="checkbox-item">
                                    <label class="checklb">
                                        <input class="check-input" type="checkbox" name="quiz[208][1][data][]" value="3">
                                        <span class="ip-avata"></span>
                                        <div class="val">It wasn't very difficult.</div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="quiz-group" id="quiz-id-2">
                        <div class="quiz-question">
                            <span class="bold">Câu 2: Lorem Ipsum is simply dummy text of the printing and typesetting industry ?</span>
                        </div>
                        <div class="quiz-fill-word">
                            <div class="article-cont">
                                <div class="mona-content">
                                <p>Chỉ chọn 1 đáp án</p>
                                </div>
                            </div>
                        </div>
                        <div class="quiz-answer">
                            <ul class="quiz-answer-ul circlestyle">
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0" checked>
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 1</p>
                                        </div>
                                    </label>
                                </li>
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="1">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 2</p>
                                        </div>
                                    </label>
                                </li>
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="2">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 3</p>
                                        </div>
                                    </label>
                                </li>
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="3">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 4</p>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="quiz-group" id="quiz-id-3">
                        <div class="quiz-question">
                            <span class="bold">Câu 3: Lorem Ipsum is simply dummy text of the printing and typesetting industry ?</span>
                        </div>
                        <div class="quiz-fill-word">
                            <div class="article-cont">
                                <div class="mona-content">
                                <p>Whether you or your loved one is encountering the natural decrease in mobility that occurs</p>
                                </div>
                            </div>
                        </div>
                        <div class="quiz-answer">
                            <ul class="quiz-answer-ul circlestyle">
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 1</p>
                                        </div>
                                    </label>
                                </li>
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 2</p>
                                        </div>
                                    </label>
                                </li>
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 3</p>
                                        </div>
                                    </label>
                                </li>
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 4</p>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="quiz-group" id="quiz-id-4">
                        <div class="quiz-question">
                            <span class="bold">Câu 4: Lorem Ipsum is simply dummy text of the printing and typesetting industry ?</span>
                        </div>
                        <div class="quiz-fill-word">
                            <div class="article-cont">
                                <div class="mona-content">
                                <p>Whether you or your loved one is encountering the natural decrease in mobility that occurs</p>
                                </div>
                            </div>
                        </div>
                        <div class="quiz-answer">
                            <ul class="quiz-answer-ul circlestyle">
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 1</p>
                                        </div>
                                    </label>
                                </li>
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 2</p>
                                        </div>
                                    </label>
                                </li>
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 3</p>
                                        </div>
                                    </label>
                                </li>
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 4</p>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="quiz-group" id="quiz-id-5">
                        <div class="quiz-question">
                            <span class="bold">Câu 5: Lorem Ipsum is simply dummy text of the printing and typesetting industry ?</span>
                        </div>
                        <div class="quiz-fill-word">
                            <div class="article-cont">
                                <div class="mona-content">
                                <p>Whether you or your loved one is encountering the natural decrease in mobility that occurs</p>
                                </div>
                            </div>
                        </div>
                        <div class="quiz-answer">
                            <ul class="quiz-answer-ul circlestyle">
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 1</p>
                                        </div>
                                    </label>
                                </li>
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 2</p>
                                        </div>
                                    </label>
                                </li>
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 3</p>
                                        </div>
                                    </label>
                                </li>
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 4</p>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="quiz-group" id="quiz-id-6">
                        <div class="quiz-question">
                            <span class="bold">Câu 6: Lorem Ipsum is simply dummy text of the printing and typesetting industry ?</span>
                        </div>
                        <div class="quiz-fill-word">
                            <div class="article-cont">
                                <div class="mona-content">
                                <p>Whether you or your loved one is encountering the natural decrease in mobility that occurs</p>
                                </div>
                            </div>
                        </div>
                        <div class="quiz-answer">
                            <ul class="quiz-answer-ul circlestyle">
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 1</p>
                                        </div>
                                    </label>
                                </li>
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 2</p>
                                        </div>
                                    </label>
                                </li>
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 3</p>
                                        </div>
                                    </label>
                                </li>
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 4</p>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="quiz-group" id="quiz-id-7">
                        <div class="quiz-question">
                            <span class="bold">Câu 7: Lorem Ipsum is simply dummy text of the printing and typesetting industry ?</span>
                        </div>
                        <div class="quiz-fill-word">
                            <div class="article-cont">
                                <div class="mona-content">
                                <p>Whether you or your loved one is encountering the natural decrease in mobility that occurs</p>
                                </div>
                            </div>
                        </div>
                        <div class="quiz-answer">
                            <ul class="quiz-answer-ul circlestyle">
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 1</p>
                                        </div>
                                    </label>
                                </li>
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 2</p>
                                        </div>
                                    </label>
                                </li>
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 3</p>
                                        </div>
                                    </label>
                                </li>
                                <li class="radi-item">
                                    <label class="radiolb">
                                        <input type="radio" class="check-input " name="quiz[208][0][data]" value="0">
                                        <span class="ip-avata"></span>
                                        <div class="val"><p>Đáp án 4</p>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    </div><!-- container -->
</div><!-- content -->

<?php require_once( 'footer.php' ); ?>
<script src="lib/jqueryui/jquery-ui.min.js"></script>
<script>
    $(document).ready(function(){
        $('.quiz-group').each(function(){
            let $this = $(this);
            let quizId = $(this).attr('id');
           
            $this.on('change','input',function(input){
                $this.find('input').each(function(i,el){
                    $('#quiz-index').find('.index-link[href="#'+quizId+'"]').addClass('checked');
                });
            });
        });
        $("a[href*='#']:not([href='#])").click(function() {
            let target = $(this).attr("href");
            $('html,body').stop().animate({
                scrollTop: $(target).offset().top - ($(target).height() / 2)
            }, 1000);
            event.preventDefault();
            });
    });
</script>
