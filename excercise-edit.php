<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">

        <div class="row">
            <div class="col-12 col-md-4">
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
                                <div class="w-100 mg-t-10 d-flex justify-content-between">
                                    <a href="#" class="btn btn-success mg-r-10">Chấm xong</a>
                                    <a href="#" class="btn btn-secondary mg-r-10">Lưu nháp</a>
                                    <a href="#" class="btn btn-info">DS nháp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left-sticky">
                    <div class="card mg-t-10">
                        <div class="card-header">
                            <h6 class="mg-b-0 d-flex align-items-end justify-content-between"><span>Sửa lỗi</span><span id="number-note">10 ghi chú</span></h6>
                        </div>
                        <div class="card-body note-ps">
                            <div id="list-note-wrap">
                                <div class="note-block">
                                    <div class="note-content">
                                        <div class="comment-info d-flex">
                                            <div class="avatar">
                                                <img src="assets/img/teacher.jpg" class="rounded-circle" alt="avatar">
                                            </div>
                                            <div class="meta mg-l-10 flex-grow-1 pd-r-30">
                                                <p class="name mg-b-0">Trương Văn Lam</p>
                                                <p class="date-time mg-b-10 tx-12 tx-color-03 mg-b-0">27/04/2019</p>
                                                <div class="dropdown dropdown-icon">
                                                    <a href="javascript:;" class="material-icons" id="dropdown-id-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more_vert</a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-id-1">
                                                        <a class="dropdown-item" href="#">Sửa</a>
                                                        <a class="dropdown-item delete" href="#">Xoá</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p class="txt-content">Đây là giao diện comment, để tạo comment bôi đen 1 đoạn muốn comment, sau đó click vào biểu tượng comment để tạo comment đoạn văn đó.</p>
                                            <textarea class="form-control inline-edit" placeholder="Nội dung"></textarea>
                                        </div>
                                        <div class="record-block ">
                                            <div class="record-action">
                                                <button class="btn-record js-start btn btn-dark mg-r-5"><i data-feather="mic"></i> <span class="record-time mg-l-5"><span class="minutes">00</span>:<span class="seconds">00</span></span></button>
                                                <button class="btn-record js-stop btn btn-danger mg-r-5"><i data-feather="stop-circle"></i></button>
                                                <button class="btn-save-cmt btn btn-primary">Lưu ghi chú</button>
                                            </div>
                                            <div class="record-list">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="note-block active">
                                    <div class="note-content">
                                        <div class="comment-info d-flex">
                                            <div class="avatar">
                                                <img src="assets/img/teacher.jpg" class="rounded-circle" alt="avatar">
                                            </div>
                                            <div class="meta mg-l-10 flex-grow-1 pd-r-30">
                                                <p class="name mg-b-0">Trương Văn Lam</p>
                                                <p class="date-time mg-b-10 tx-12 tx-color-03 mg-b-0">27/04/2019</p>
                                                <div class="dropdown dropdown-icon">
                                                    <a href="javascript:;" class="material-icons" id="dropdown-id-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more_vert</a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-id-1">
                                                        <a class="dropdown-item" href="#">Sửa</a>
                                                        <a class="dropdown-item delete" href="#">Xoá</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p class="txt-content"></p>
                                            <textarea class="form-control inline-edit" placeholder="Nội dung">Đây là giao diện chỉnh sửa, bấm nút record bên dưới để bắt đầu ghi âm</textarea>
                                        </div>
                                        <div class="record-block">
                                            <div class="record-action">
                                                <button class="btn-record js-start btn btn-dark mg-r-5"><i data-feather="mic"></i> <span class="record-time mg-l-5"><span class="minutes">00</span>:<span class="seconds">00</span></span></button>
                                                <button class="btn-record js-stop btn btn-danger mg-r-5"><i data-feather="stop-circle"></i></button>
                                                <button class="btn-save-cmt btn btn-primary">Lưu ghi chú</button>
                                            </div>
                                            <div class="record-list">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card teacher-score mg-t-10">
                    <div class="card-header">
                        <h6 class="mg-b-5">Đánh giá</h6>
                        <p class="tx-12 tx-color-03 mg-b-0">Đánh giá bài làm của học viên</p>
                    </div>
                    <div class="card-body d-flex flex-column-reverse">
                        <div class="row-flex d-flex pd-r-40 align-items-center mg-t-10">
                            <div class="label w-50">
                                <span class="txt">Tổng điểm</span>
                            </div>
                            <div class="value w-50 ">
                                <input type="number" class="form-control" placeholder="0">
                            </div>
                            <div class="action">
                                <a href="javascript:;" class="add-score"><i data-feather="plus"></i></a>
                            </div>
                        </div>
                       
                        <div class="row-flex d-flex pd-r-40 align-items-center mg-t-10">
                            <div class="label w-50 pd-r-5">
                                 <input type="text" class="form-control" placeholder="Mục chấm">
                            </div>
                            <div class="value w-50">
                                <input type="number" class="form-control" placeholder="0">
                            </div>
                            <div class="action">
                                <a href="javascript:;" class="delete-score"><i data-feather="minus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
             
            </div>
            <div class="col-12 col-md-8">
                <div class="exc-info">
                    <div class="question-wrap">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="mg-b-5">Question</h6>
                                <p class="tx-12 tx-color-03 mg-b-0">Câu hỏi bài tập</p>
                            </div>
                            <div class="card-body">
                                <div class="raw-txt">
                                    <p>LISTENING LESSON 1: COMPLETION TASK</p>
                                    <p>Link các bài nghe trong phần practice của bài học hôm nay:</p>
                                    <p>Exercise 1: https://www.easy-ielts.com/cambridge-listening-book-7-test-3/</p>
                                    <p>3: http://practicepteonline.com/ielts-listening-test-175/</p>
                                    <img src="https://app.zim.vn/Upload/exercise/fa9468c0-7508-4f25-9e5b-6f3489a88228.png" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="card mg-t-10">
                            <div class="card-header">
                                <h6 class="mg-b-5">Answer</h6>
                                <p class="tx-12 tx-color-03 mg-b-0">Phần trả lời của học viên</p>
                            </div>
                            <div class="card-body">
                                <div class="raw-txt" id="student-raw-text">
                                    <p><strong><span style="color: rgb(24, 160, 133);" data-mce-style="color: #18a085;">Exercise 1:</span></strong></p><p><strong>14. Paragraph A</strong> - <span style="color: rgb(53, 152, 219);" data-mce-style="color: #3598db;">(5) A potential danger arising from boredom.</span><br><span style="color: rgb(126, 140, 141);" data-mce-style="color: #7e8c8d;">Clue: Line 8 -&nbsp; …” if disgust protects humans from infection, boredom them from “infecious” social situations” he suggests.</span></p><p><br><strong>15. Paragraph B</strong> - <span style="color: rgb(53, 152, 219);" data-mce-style="color: #3598db;">(6) Creating a system of classification for feelings of boredom.</span><br><span style="color: rgb(126, 140, 141);" data-mce-style="color: #7e8c8d;">Clue: Line 1 -&nbsp; Thomas Goetz and his team….have recently identified five distinct types: indifferent, calibrating, searching, reactant and apathetic….which measures how positive or negative the feeling is intriguingly.</span></p><p><br><strong>16. Paragraph C</strong> - <span style="color: rgb(53, 152, 219);" data-mce-style="color: #3598db;">(1) The productive outcomes that may result from boredom.</span><br><span style="color: rgb(126, 140, 141);" data-mce-style="color: #7e8c8d;">Clue: Line 2 &amp; 8 -&nbsp; Mann has found that being bored makes us more creative….boring activity is the best for creativity because it allows the mind to wander”</span></p><p><br><strong>17. Paragraph D</strong> - <span style="color: rgb(53, 152, 219);" data-mce-style="color: #3598db;">(4) Problems with a scientific approach to freedom.</span><br><span style="color: rgb(126, 140, 141);" data-mce-style="color: #7e8c8d;">Clue: Line 10 -&nbsp; “ People try to connect with the world and if they are not successful there’s that frustration and irritability”</span></p><p><br><strong>18. Paragraph E</strong> - <span style="color: rgb(53, 152, 219);" data-mce-style="color: #3598db;">(2) What teachers can do to prevent boredom.</span><br><span style="color: rgb(126, 140, 141);" data-mce-style="color: #7e8c8d;">Clue: Line 9 -&nbsp; ...What can we do to alleviate it before it comes to that? Goetz’s group has one suggestion….report less boredom than those who try to avoid it by using snacks, TV or social media for distraction”</span></p><p><br><strong>19. Paragraph F</strong> - <span style="color: rgb(53, 152, 219);" data-mce-style="color: #3598db;">(3) A new explanation and a new cure for boredom.</span><br><span style="color: rgb(126, 140, 141);" data-mce-style="color: #7e8c8d;">Clue: Line 1 &amp; 4 -&nbsp; Psychologist Francoise Wemelsfelder speculates that our over-connected lifestyles might even be a new source of boredom….we should leave our phones alone, and use boredom to motivate us to engage with the would in a more meaningful way.&nbsp;</span></p><p><span style="color: rgb(126, 140, 141);" data-mce-style="color: #7e8c8d;"><br data-mce-bogus="1"></span></p><p><span style="color: rgb(24, 160, 133);" data-mce-style="color: #18a085;"><strong>Exercise 2:</strong></span></p><p><strong>14. Paragraph B</strong> - <span style="color: rgb(53, 152, 219);" data-mce-style="color: #3598db;">(2) The relevance of the Little Ice Age today.</span><br><span style="color: rgb(126, 140, 141);" data-mce-style="color: #7e8c8d;">Clue: Line 4 -&nbsp; …The climatic events of the Little Ice Age did more than help shape the modern world...by complex and still little understood interactions between the atmosphere and the ocean.</span></p><p><br><strong>15. Paragraph D</strong> - <span style="color: rgb(53, 152, 219);" data-mce-style="color: #3598db;">(7) A study convering a thousand years.</span><br><span style="color: rgb(126, 140, 141);" data-mce-style="color: #7e8c8d;">Clue: Line 1 -&nbsp; This book is a narrative history of climatic shifts during the past ten centuries and some of the ways in which people in Europe adapted to them.</span></p><p><br><strong>16. Paragraph E</strong> - <span style="color: rgb(53, 152, 219);" data-mce-style="color: #3598db;">(9) Enough food at last</span><br><span style="color: rgb(126, 140, 141);" data-mce-style="color: #7e8c8d;">Clue: don’t know exactly, but the content of the paragraph relevant to foods</span></p><p><br><strong>17. Paragraph F</strong> - <span style="color: rgb(53, 152, 219);" data-mce-style="color: #3598db;">(4) Human impact on the climate</span><br><span style="color: rgb(126, 140, 141);" data-mce-style="color: #7e8c8d;">Clue: Line 7 -&nbsp; The unprecedented land clearance released vast quantities of carbon dioxide into the atmosphere….as the use of fossil fuels proliferated and greenhouse has levels</span></p><p><strong>18.</strong> <span style="color: rgb(53, 152, 219);" data-mce-style="color: #3598db;">D - Glaciers</span><br><strong>19.</strong> <span style="color: rgb(53, 152, 219);" data-mce-style="color: #3598db;">B - Ice cores</span><br><strong>20</strong>. <span style="color: rgb(53, 152, 219);" data-mce-style="color: #3598db;">A - Climatic shifts</span><br><strong>21</strong>. <span style="color: rgb(53, 152, 219);" data-mce-style="color: #3598db;">H - Storms</span><br><strong>22.</strong> <span style="color: rgb(53, 152, 219);" data-mce-style="color: #3598db;">G - Heatwaves</span></p>

                                </div>
                                 
                            </div>
                        </div>
                        <div class="card mg-t-10">
                    <div class="card-header">
                        <h6 class="mg-b-5">Nhận xét</h6>
                        <p class="tx-12 tx-color-03 mg-b-0">Nhận xét của giáo viên với bài làm</p>
                    </div>
                    <div class="card-body">
                        <div id="teacher-comment"></div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div><!-- container -->
</div><!-- content -->

<?php require_once( 'footer.php' ); ?>

<script src="lib/tinymce/tinymce.min.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script>
    $(document).ready(function(){
        hoverhighline();
        // $('.quiz-group').each(function(){
        //     let $this = $(this);
        //     let quizId = $(this).attr('id');
           
        //     $this.on('change','input',function(input){
        //         $this.find('input').each(function(i,el){
        //             $('#quiz-index').find('.index-link[href="#'+quizId+'"]').addClass('checked');
        //         });
        //     });
        // });
        // $("a[href*='#']:not([href='#])").click(function() {
        //     let target = $(this).attr("href");
        //     $('html,body').stop().animate({
        //         scrollTop: $(target).offset().top - ($(target).height() / 2)
        //     }, 1000);
        //     event.preventDefault();
        //     });

        const ps = new PerfectScrollbar(".note-ps", {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 20
        });

        //init TinyMCE
        var rawTextInline = {
            selector: '#student-raw-text',
            menubar: false,
            inline: true,
            plugins: [
                'lists',
                'autolink',
                'paste'

            ],
            paste_as_text: true,
            toolbar: '',
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i'
            ],
            setup: (editor) => {
                editor.ui.registry.addButton('comments', {
                    text: '<i class="far fa-comment-dots"></i>',
                    onAction: addComment
                });
                editor.ui.registry.addContextToolbar('textselection', {
                    predicate: function (node) {
                        return !editor.selection.isCollapsed();
                    },
                    items: 'bold italic  strikethrough forecolor backcolor comments | undo redo',
                    position: 'selection',
                    scope: 'node'
                });
            }
        };
        var teacherComment = {
            selector: '#teacher-comment',
            menubar: false,
            inline: false,
            plugins: [
                'lists',
                'autolink',
                'paste'
            ],
            paste_as_text: true,
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i'
            ],
        };
    tinymce.init(rawTextInline);
    tinymce.init(teacherComment);
      // Editor TinyMCE
    var dem = 0;
    var currentCmt = [];
    function addComment() {
        dem += 1;
        var selectedText = tinyMCE.activeEditor.selection.getContent({ format: 'html' });
        var selecteddivobj = $('<div>').append(selectedText);
        //selecteddivobj.find('.ct-comment').each(function (i, item) {
        //    $(item).contents().unwrap();
        //});
        var $ctComt = $('<span class="ct-comment">' + selecteddivobj.html() + '</span>');

        //console.log($ctComt.html());

        var indexNode = $ctComt[0];
        currentCmt.push(indexNode);
        // console.log(currentCmt);
        $ctComt.attr('id', 'cmt-' + dem);
       // console.log($ctComt);
        //console.log($ctComt.html());
        tinyMCE.activeEditor.selection.setContent($ctComt[0].outerHTML);
        var htmlObj = $(`    <div class="note-block active" data-cmt="cmt-${dem}">
                                    <div class="note-content">
                                        <div class="comment-info d-flex">
                                            <div class="avatar">
                                                <img src="assets/img/teacher.jpg" class="rounded-circle" alt="avatar">
                                            </div>
                                            <div class="meta mg-l-10 flex-grow-1 pd-r-30">
                                                <p class="name mg-b-0">Trương Văn Lam</p>
                                                <p class="date-time mg-b-10 tx-12 tx-color-03 mg-b-0">27/04/2019</p>
                                                <div class="dropdown dropdown-icon">
                                                    <a href="javascript:;" class="material-icons" id="dropdown-id-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more_vert</a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-id-1">
                                                        <a class="dropdown-item edit-cmt" href="#">Sửa</a>
                                                        <a class="dropdown-item delete" href="#">Xoá</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p class="txt-content"></p>
                                            <textarea class="form-control inline-edit" id="area-${dem}" placeholder="Nội dung"></textarea>
                                        </div>
                                        <div class="record-block">
                                            <div class="record-action">
                                                <button class="btn-record js-start btn btn-dark mg-r-5"><i data-feather="mic"></i> <span class="record-time mg-l-5"><span class="minutes">00</span>:<span class="seconds">00</span></span></button>
                                                <button class="btn-record js-stop btn btn-danger mg-r-5"><i data-feather="stop-circle"></i></button>
                                                <button class="btn-save-cmt btn btn-primary">Lưu ghi chú</button>
                                            </div>
                                            <div class="record-list">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>`);

            console.log(htmlObj);
          
        $('#list-note-wrap').append(htmlObj);
        feather.replace();
       document.getElementById('area-' + dem + '').focus();

        htmlObj.on('click', '.delete', function () {
            var dataId = $(this).closest('.note-block').attr('data-cmt');
          //  console.log(dataId);
            var cmt = $('#student-raw-text #' + dataId);
            cmt.contents().unwrap();

            $(this).closest('.note-block').fadeOut(500,function(){
                $(this).closest('.note-block').remove();
            })
        });

        $('#list-note-wrap').on('click', '.js-stop', stopRecord);
        $('#list-note-wrap').on('click', '.js-start', startRecord);

        // check old cmt after add new cmt
        var currentCommentID = [];
        $('#student-raw-text').find('.ct-comment').each(function (i, item) {
            var idcmtString = item.getAttribute('id');
            currentCommentID.push(idcmtString);

        });

        $('#list-note-wrap').children('.note-block').each(function (i, item) {
            var dataID = $(item).attr('data-cmt');
            if (!currentCommentID.includes(dataID)) {
                $(item).remove();
            };
        });
    };


    var recorder;
    var recordButtons = document.querySelectorAll('.js-start');
    var stopButtons = document.querySelectorAll('.js-stop');
    //Start button click
    function startRecord(e) {
        recordButtons = document.querySelectorAll('.js-start');
        stopButtons = document.querySelectorAll('.js-stop');
        //start recording with 1 second time between receiving 'ondataavailable' events
        recordButtons.forEach(function (ele) {
            ele.disabled = true;
            ele.classList.add('disabled');
        });
        stopButtons.forEach(function (ele) {
            ele.disabled = false;
            ele.classList.remove('disabled');
        });
        recorder.start();
        recordTime('start',$(e.target).closest('.btn-record'));
     //   console.log(recorder);
    }
    var closestByClass = function(el, clazz) {
        // Traverse the DOM up with a while loop
        while (el.className != clazz) {
            // Increment the loop to the parent node
            el = el.parentNode;
            if (!el) {
                return null;
            }
        }
        // At this point, the while loop has stopped and `el` represents the element that has
        // the class you specified in the second parameter of the function `clazz`

        // Then return the matched element
        return el;
    }
    //Stop button click
    function stopRecord(e) {
        recordButtons = document.querySelectorAll('.js-start');
        stopButtons = document.querySelectorAll('.js-stop');
        // this will trigger one final 'ondataavailable' event and set recorder state to 'inactive'
        recordButtons.forEach(function (ele) {
            ele.disabled = false;
            ele.classList.remove('disabled');
        });
        stopButtons.forEach(function (ele) {
            ele.disabled = true;
            ele.classList.add('disabled');
        });
    
        recorder.stop();
        recorder.stopElementBtn = e.target;
        recordTime('stop',$(e.target).closest('.btn-record'));
      //  console.log(recorder.state);
    }

    // Add Audio js
    function replaceAudioElement(blobUrl, targetPr, indexof) {
        try{
        // while(targetPr.lastChild){
        // targetPr.removeChild(targetPr.lastChild);
        // }
      //  console.log(targetPr);
        targetPr = targetPr.querySelector('.record-list');
       
        const resultEl = document.createElement('div');
        resultEl.classList = 'audio-result mg-t-10';
        resultEl.setAttribute('data-index', '' + indexof + '');
        targetPr.appendChild(resultEl);
        const audioEl = document.createElement('audio');
        audioEl.controls = true;
        audioEl.style = 'display:block; width:100%;';
        audioEl.classList = "valign-center";
        const sourceEl = document.createElement('source');
        sourceEl.src = blobUrl;
        sourceEl.type = 'audio/webm';
        targetPr.appendChild(sourceEl);
        audioEl.appendChild(sourceEl);
        const downloadEl = document.createElement('a');
        downloadEl.style = 'display: inline-block';
        downloadEl.innerHTML = '<i class="fas fa-download"></i> Download';
        downloadEl.download = 'audio.webm';
        downloadEl.classList = "mg-t-10";
        downloadEl.href = blobUrl;
        const deleteEl = document.createElement('a');
        deleteEl.innerHTML = '<i class="fas fa-trash-alt"></i> Delete';
        deleteEl.style = 'display: inline-block; cursor:pointer;';
        deleteEl.classList = "mg-t-10 mg-l-15";
        deleteEl.href = 'javascript:;';
        deleteEl.addEventListener('click', function () {
            this.parentNode.parentNode.removeChild(this.parentNode);
        }); resultEl.appendChild(audioEl);
        resultEl.appendChild(downloadEl);
        resultEl.appendChild(deleteEl);
        }
        catch (e){
            console.log(e);
        }

    }
    if (window.MediaRecorder !== undefined) {
        recordButtons.forEach(function (ele) {
            ele.disabled = true;
        });
        // request permission to access audio stream
       // console.log('ok');
        navigator.mediaDevices.getUserMedia({ audio: true }).then(stream => {
            recordButtons.forEach(function (ele) {
                ele.disabled = false;
                ele.classList.remove('disabled');
            });
            stopButtons.forEach(function (ele) {
                ele.disabled = true;
                ele.classList.add('disabled');
            });
            // for notice

            // store streaming data chunks in array
            var chunks = [];

            // function to be called when data is received
            recordButtons.forEach(function (ele) {
                ele.addEventListener('click', startRecord);
            });
            stopButtons.forEach(function (ele) {
                ele.addEventListener('click', stopRecord);
            });



            // create media recorder instance to initialize recording
            recorder = new MediaRecorder(stream);
            var blobData = [];
            recorder.ondataavailable = (e) => {
                // add stream data to chunks
                // console.log(recorder);
                chunks.push(e.data);
                blobData.push(e.data);
            };
            recorder.onstop = function (e) {
                // if recorder is 'inactive' then recording has finished
                if (recorder.state == 'inactive') {
                    // convert stream data chunks to a 'webm' audio format as a blob
                    const blob = new Blob(blobData, { type: 'audio/webm' });
                    // convert blob to URL so it can be assigned to a audio src attribute
                 //   console.log(recorder.stopElementBtn);
                    replaceAudioElement(URL.createObjectURL(blob), recorder.stopElementBtn.parentElement.parentElement, chunks.length - 1);
                    blobData.length = 0;
                }
            }

        }).catch(function () {
            swal({
                title: "Trình ghi âm đang tắt !",
                text: "Vui lòng cung cấp quyền truy cập microphone để sử dụng chức năng ghi âm.",
                icon: 'warning',
                dangerMode: true,
                buttons: {
                    confirm: 'Hướng dẫn bật',
                    cancel: 'Không, tôi không cần!'

                }
            }).then(function (result) {
                if (result) {
                    $('#guide-chrome').modal('open');
                }

            });
        });
    } else {
        document.getElementById('status') = 'browser not support Media Recorder';
    }

    $('.note-list-wrap').on('click', '.js-stop', stopRecord);
    $('.note-list-wrap').on('click', '.js-start', startRecord);

    function hoverhighline() {
        $('body').on('click', '.ct-comment', function (e) {
            e.preventDefault();
            var id = $(this).attr('id');
            var $blockControl = $('[data-cmt="'+id+'"]');
         //   console.log($blockControl);
            $(this).css({ 
                'background': ' #FAE168',
                'padding': '5px', 'transform': 'scale(1.4)',
                'color':'#000'
            });
            $('.ct-comment').not($(this)).attr('style','');
            $('.note-ps').scrollTo($blockControl, 500,{offset:-50});


            $('.note-block').each(function () {
                var idIn = $(this).attr("data-cmt");
              
                if (idIn == id) {
                    $(this).css({ 
                        'webkit-box-shadow': 'rgba(53, 98, 200, 0.28) 0px 0px 11px 2px', 
                        'box-shadow': 'rgba(53, 98, 200, 0.28) 0px 0px 11px 2px', 
                        'border-color':'transparent',
                        'background': 'rgba(255, 255, 255, 1)',
                        'transform': 'scale(1.02) translate(10px,-5px)'
                    });
                }else{
                    $(this).attr('style', '');
                }
            });
        });


        // $('body').on('mouseleave', '.ct-comment', function (e) {

        //     var id = $(this).attr('id');
        //     $('.note-block').each(function () {
        //         var idIn = $(this).attr("data-cmt");
        //         if (idIn == id) {
        //             $(this).attr('style', '');
        //         }
        //     });
        // })

        //hover edit item

        $('body').on('click', '.note-block', function (e) {
            var id = $(this).attr('data-cmt');
            $(this).css({ 
                        'webkit-box-shadow': 'rgba(53, 98, 200, 0.28) 0px 0px 11px 2px', 
                        'box-shadow': 'rgba(53, 98, 200, 0.28) 0px 0px 11px 2px', 
                        'border-color':'transparent',
                        'background': 'rgba(255, 255, 255, 1)',
                        'transform': 'scale(1.02) translate(10px,-5px)'

                    });
            $('.note-block').not($(this)).attr('style','');
            $('.ct-comment').each(function () {
                var idIn = $(this).attr("id");
                if (idIn == id) {
                    $(this).css({ 
                        'background': ' #FAE168',
                        'padding': '5px', 'transform': 'scale(1.4)',
                        'color':'#000'
                    });
                }
                else{
                    $(this).attr('style', '');
                }
            });
        })

        // $('body').on('mouseleave', '.note-block', function (e) {
        //     var id = $(this).attr('data-cmt');
        //     $('.ct-comment').each(function () {
        //         var idIn = $(this).attr("id");
        //         if (idIn == id) {
        //             $(this).attr('style', '');
        //         }
        //     });
        // })

        // //thêm chi tiết điểm
        // $('#add-review-score').click(function () {
        //     var m = '';
        //     m += '<div class="row score-detail">';
        //     m += '  <div class="col s7">';
        //     m += '      <input placeholder="Mục chấm" type="text" class="txt-muc-cham" required>';
        //     m += '  </div>';
        //     m += '  <div class="col s3">';
        //     m += '      <input placeholder="Điểm 0.0" type="text" class="txt-diem" required>';
        //     m += '  </div>';
        //     m += '  <div class="col s2" style="padding:20px;">';
        //     m += '      <a href="javascript:;" class="material-icons tooltipped delete-detail" data-position="top" data-tooltip="Xóa">clear</a>';
        //     m += '  </div>';
        //     m += '</div>';
        //     $('#div-diem').append(m);
        // })
    }


    var startTime;
    function recordTime(action,ele){
        var $parent = ele.parent().find('.record-time');
        var sec = 0;
        switch(action){
            case 'start':{
                startTime = setInterval( function(){
                $parent.find('.seconds').html(pad(++sec%60));
                $parent.find('.minutes').html(pad(parseInt(sec/60,10)));
                }, 1000);
                break;
            }
            case 'stop':{
                $parent.find('.seconds').text('00');
                $parent.find('.minutes').text('00');
                clearInterval(startTime);
                break;
            }
        }
    }
    function pad(val) {
        return val > 9 ? val : "0" + val;
      };

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
    
    $('body').on('click','.btn-save-cmt',function(){
        var $this = $(this);
        var value = $this.closest('.note-content').find('textarea').val().replace(/<br\s*\/?>/mg,"\n");
        $this.closest('.note-content').find('.txt-content').text(value);
        $this.closest('.note-block').removeClass('active');
    });

    $('body').on('click','.edit-cmt',function(e){
        e.preventDefault();
        var $this = $(this);
        $this.closest('.note-block').addClass('active');
        var value =  $this.closest('.note-content').find('.txt-content').html();
        $this.closest('.note-content').find('textarea').html(value);
    });

    $('.add-score').on('click',function(){
        var html = ` <div class="row-flex d-flex pd-r-40 align-items-center mg-t-10">
                            <div class="label w-50 pd-r-5">
                                 <input type="text" class="form-control" placeholder="Mục chấm">
                            </div>
                            <div class="value w-50">
                                <input type="number" class="form-control" placeholder="0">
                            </div>
                            <div class="action">
                                <a href="javascript:;" class="delete-score"><i data-feather="minus"></i></a>
                            </div>
                        </div>`;
        $(this).closest('.card-body').append(html);
        feather.replace();
    });
    $('.teacher-score').on('click','.delete-score',function(){
        $(this).closest('.row-flex').remove();
    });
    //$('textarea[name="question"]').val($('#questions').eq(1).html()

    });
</script>


