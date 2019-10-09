<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
               <!-- Breadcrumb -->
               <div class="row mg-b-30">
            <div class="col-12">
                   <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-0">
                    <li class="breadcrumb-item"><a href="#">Course </a></li>
                    <li class="breadcrumb-item"><a href="#">[ZIM - 308 Trần Phú] - A-IELTS Master, 07/08, 09:30-11:30</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit course</li>
                </ol>
                </nav>
            </div>
        </div>
        <!-- End breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="course-edit-wrap">
                    <div class="top-filter">
                        <div class="d-md-flex align-items-center justify-content-between">
                            <div class="left-action d-flex">
                                <div class="input-group no-wrap">
                                    <button type="button" class="btn btn-warning btn-block ">Save changes</button>
                                </div>
                                <div class="input-group no-wrap">
                                    <button type="button" class="btn btn-dark btn-block">Add Class</button>
                                </div>
                             
                            </div>
                            <div class="date-filter d-flex justify-content-center">
                                <div class="input-group select-class">
                                    <select name="" id="" class="form-control select2 classTime" multiple="multiple">
                                        <option value="10:30 - 20:3">Ca 10:30 - 20:30</option>
                                        <option value="10:30 - 20:3">Ca 12:30 - 20:30</option>
                                        <option value="10:30 - 20:3">Ca 14:30 - 20:30</option>
                                        <option value="10:30 - 20:3">Ca 16:30 - 20:30</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control datetimepicker date-only" placeholder="From date">
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control datetimepicker date-only" placeholder="To date">
                                </div>
                                <div class="input-group ">
                                    <button type="button" class="btn btn-primary btn-block">Load</button>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <ul id="draggablelist" class="ui-droppable"></ul>
            </div>
            <div class="col-12 col-md-8">
                <ul id="calendar"></ul>
            </div>
        </div>
    </div><!-- container -->
</div><!-- content -->
<?php require_once( 'footer.php' ); ?>

<script>
    $(document).ready(function(){
        $('.classTime').select2({
            placeholder: "Select a class"
        });
     
    });
</script>
