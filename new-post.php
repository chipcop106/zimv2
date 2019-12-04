<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="new-post-wrap fix-container">

        
            <div class="row">
                <div class="col-12 ">
                    <h4 class="pd-b-15 bd-b mg-b-15">New post</h4>
                </div>
            </div>
            <div class="form-group">
                <label for="ip-title" class="d-block">Cover banner</label>
                <input type="text" class="form-control" id="ip-title" placeholder="Title...">
            </div>
            <div class="form-group">
                <label for="ip-title" class="d-block">Title</label>
                <input type="text" class="form-control" id="ip-title" placeholder="Title...">
            </div>
            

            <div class="editor-wrap">
                <div class="raw-txt" id="student-raw-text">

                </div>
            </div>
            <div class="form-row mg-b-15 mg-t-15 align-items-center">
                <div class="col-12 col-xs-4 col-md-3">
                    <div class="form-group mg-b-0">
                        <label class="d-block">Display on</label>
                        <div class="d-flex">
                        <div class="custom-control custom-radio mg-r-10">
                            <input type="radio" name="displayOn" class="custom-control-input" id="dp-local" checked>
                            <label class="custom-control-label" for="dp-local">Local</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" name="displayOn" class="custom-control-input" id="dp-public">
                            <label class="custom-control-label" for="dp-public">Public</label>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-4 col-md-3">
                    <div class="form-group mg-b-0">
                        <label class="d-block">Visibility</label>
                        <div class="d-flex">
                        <div class="custom-control custom-radio mg-r-10">
                            <input type="radio" name="visibility" class="custom-control-input" id="dp-on"checked>
                            <label class="custom-control-label" for="dp-on">Show</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" name="visibility" class="custom-control-input" id="dp-off">
                            <label class="custom-control-label" for="dp-off">Hidden</label>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-4 col-md-6">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="#" class="btn btn-secondary mg-r-10">Cancel</a>
                        <a href="#" class="btn btn-primary">Submit</a>
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
            min_height: 500,
            plugins: [
                'lists',
                'autolink',
                'paste',
                'autoresize',
                'stickytoolbar'
            ],
            paste_as_text: true,
            autoresize_bottom_margin: 30,
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i'
            ],
        };
        //Init editor
        tinymce.init(commentEditor);
    });
</script>
