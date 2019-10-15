<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0 ">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-30">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Curriculum excercise</li>
            </ol>
        </nav>
        <!-- End breadcrumb -->
        <div class="row">
            <div class="col-12 ">
            <div class="curr-exec-wrap">
                <div class="d-flex justify-content-between align-items-center mg-b-30">
                    <a href="javascript:;" class="btn btn-primary" data-toggle="modal" data-target="#questionAdd">Add</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-vcenter">
                        <thead class="thead-light">
                            <tr>
                                <th>Question</th>
                                <th>Answer type</th>
                                <th>File</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="truncate"><a href="#" data-toggle="modal" data-target="#questionDetail"> All the following are required, so the text must be in a single straight line that overflows a box where that overflow is hidden.</a></td>
                                <td>Tự luận</td>
                                <td><a href="#"><i data-feather="download"></i></a></td>
                                <td><span class="badge badge-success">open</span></td>
                                <td>
                                    <a class="btn btn-secondary" href="curriculum-excercise-detail.php"><i
                                                    data-feather="lock"></i>
                                                Close</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="truncate"><a href="#" data-toggle="modal" data-target="#questionDetail"> Bài Tự luận test lesson 2 </a></td>
                                <td>Tự luận</td>
                                <td><a href="#"><i data-feather="download"></i></a></td>
                                <td><span class="badge badge-danger">close</span></td>
                                <td>
                                    <a class="btn btn-primary" href="curriculum-excercise-detail.php"><i
                                                    data-feather="unlock"></i>
                                                Open</a>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
                
            </div>
            </div>
        </div>
  

    </div><!-- container -->
</div><!-- content -->
<!-- Modal detail question-->
<div class="modal fade" id="questionDetail" tabindex="-1" role="dialog" aria-labelledby="questionDetail" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="questionDetailTitle">Question detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
                <div class="col-12">
                    <div class="cur-question">
                        <p>All the following are required, so the text must be in a single straight line that overflows a box where that overflow is hidden:</p>
                    </div>
                    <div class="cur-answer pd-t-15">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="id112-12" name="customRadio" class="custom-control-input" checked disabled>
                                    <label class="custom-control-label" for="id112-12">For even more customization and cross browser consistency, use our completely custom radio element to replace the browser defaults.</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="id112-13" name="customRadio" class="custom-control-input" disabled>
                                    <label class="custom-control-label" for="id112-13">The gist is that the element needs some kind of determinate width, which you have to be particularly careful about with flexbox</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="id112-14" name="customRadio" class="custom-control-input" disabled>
                                    <label class="custom-control-label" for="id112-14">Truncate String with Ellipsis</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="id112-15" name="customRadio" class="custom-control-input" disabled>
                                    <label class="custom-control-label" for="id112-15">For even more customization and cross browser consistency, use our completely custom radio element to replace the browser defaults.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal add question-->
<div class="modal fade" id="questionAdd" tabindex="-1" role="dialog" aria-labelledby="questionAdd" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="questionAddTitle">Question </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
                <div class="col-12">
                    <div class="cur-question">
                        <div id="question-editor"></div>
                    </div>
                    <div class="cur-answer pd-t-15">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="id112-12" name="customRadio" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="id112-12"><input type="text" class="form-control answer" placeholder="Answer 1"></label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="id112-13" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="id112-13"><input type="text" class="form-control answer" placeholder="Answer 2"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="id112-14" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="id112-14"><input type="text" class="form-control answer" placeholder="Answer 3"></label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="id112-15" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="id112-15"><input type="text" class="form-control answer" placeholder="Answer 4"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cur-file">
                        <input type="file" class="file-pond" multiple/>
                    </div>
                </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php require_once( 'footer.php' ); ?>
<script src="lib/tinymce/tinymce.min.js"></script>
<script>
$(document).ready(function() {
    var commentEditor = {
        selector: '#question-editor',
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
        init_instance_callback: function (editor) {
            editor.setContent('Type question here...');  
        }
    };
    tinymce.init(commentEditor);
    //Init file Pond
    var inputFile = document.querySelector('input[type="file"]');
    if(inputFile){
        var pond = FilePond.create(inputFile);
    }


});
</script>