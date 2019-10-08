<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
         <!-- Breadcrumb -->
        <div class="row mg-b-30">
            <div class="col-12">
                   <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-0">
                    <li class="breadcrumb-item"><a href="#">Khoá học </a></li>
                    <li class="breadcrumb-item"><a href="#">IELTS - Production </a></li>
                    <li class="breadcrumb-item"><a href="#">WRITING LESSON 9 </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bài tự luận 20/4</li>
                </ol>
                </nav>
            </div>
        </div>
        <!-- End breadcrumb -->
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="left-sticky">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mg-b-0">Information</h6>
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
               
                </div>
             
            </div>
            <div class="col-12 col-md-8">
                <div class="question-wrap">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mg-b-0">Question</h6>
                        </div>
                        <div class="card-body">
                            <div class="exc-info mg-b-30">
                                <p class="title-question tx-16 mg-0 tx-semibold">LISTENING LESSON 1: COMPLETION TASK</p>
                                <p class="deadline mg-0 tx-color-03">Deadline: 20/04/2019</p>
                            </div>
                            <div class="raw-txt">
                                <p>Link các bài nghe trong phần practice của bài học hôm nay:</p>
                                <p>Exercise 1: https://www.easy-ielts.com/cambridge-listening-book-7-test-3/</p>
                                <p>3: http://practicepteonline.com/ielts-listening-test-175/</p>
                                <img src="https://app.zim.vn/Upload/exercise/fa9468c0-7508-4f25-9e5b-6f3489a88228.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="card mg-t-10">
                        <div class="card-header">
                            <h6 class="mg-b-5">Writing</h6>
                            <p class="tx-12 tx-color-03 mg-b-0">Writing area</p>
                        </div>
                        <div class="card-body">
                            <div class="raw-txt" id="student-raw-text">

                            </div>

                        </div>
                    </div>
                    <div class="card mg-t-10">
                        <div class="card-header">
                            <h6 class="mg-b-5">Audio</h6>
                            <p class="tx-12 tx-color-03 mg-b-0">Only select one method</p>
                        </div>
                        <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="record-tab" data-toggle="tab" href="#audio-panel" role="tab" aria-controls="audio-panel" aria-selected="true">Record Audio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload-panel" role="tab" aria-controls="upload-panel" aria-selected="false">Upload Audio</a>
                            </li>
                        </ul>
                        <div class="tab-content bd bd-gray-300 bd-t-0 pd-20" id="myTabContent">
                            <div class="tab-pane fade show active" id="audio-panel" role="tabpanel" aria-labelledby="record-tab">
                            <div class="audio-file">
                                <div class="record-block">
                                    <div class="record-action">
                                        <button class="btn-record js-start btn btn-dark mg-r-5"><i data-feather="mic"></i> <span class="record-time mg-l-5"><span class="minutes">00</span>:<span class="seconds">00</span></span></button>
                                        <button class="btn-record js-stop btn btn-danger mg-r-5"><i data-feather="stop-circle"></i> <span class="mg-l-5">Stop</span></button>
                                    </div>
                                    <div class="record-list">
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="tab-pane fade" id="upload-panel" role="tabpanel" aria-labelledby="upload-tab">
                            <div class="audio-upload">
                            <input type="file" class="file-pond" multiple/>
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

<?php require_once( 'footer.php' ); ?>
<script src="lib/tinymce/tinymce.min.js"></script>
<script>
    $(document).ready(function(){
    var commentEditor = {
        selector: '#student-raw-text',
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
        resultEl.classList = 'audio-result mg-t-15';
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
    //Init editor
    tinymce.init(commentEditor);

    //Init file Pond
    var inputFile = document.querySelector('input[type="file"]');
    if(inputFile){
        var pond = FilePond.create(inputFile);
    }

    });
</script>
