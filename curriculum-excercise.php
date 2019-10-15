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
            <div class="docs-detail-wrap">
                <div class="d-flex justify-content-between align-items-center mg-b-30">
                    <a href="javascript:;" class="btn btn-primary" data-toggle="modal" data-target="#addCur">Add</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-vcenter">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bài tự luận test lesson 1</td>
                                <td>Tự luận</td>
                                <td>12</td>
                                <td>20/04/2019</td>
                                <td>
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:;" class="material-icons" id="dropdown-id-1"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">more_vert</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-id-1">
                                            <a class="dropdown-item btn-icon" href="#"><i
                                                    data-feather="edit"></i>
                                                Edit</a>
                                            <a class="dropdown-item btn-icon" href="curriculum-excercise-detail.php"><i
                                                    data-feather="book-open"></i>
                                                Excercises</a>
                                        
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Bài tự luận test lesson 1</td>
                                <td>Tự luận</td>
                                <td>12</td>
                                <td>20/04/2019</td>
                                <td>
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:;" class="material-icons" id="dropdown-id-1"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">more_vert</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-id-1">
                                            <a class="dropdown-item btn-icon" href="#"><i
                                                    data-feather="edit"></i>
                                                Edit</a>
                                            <a class="dropdown-item btn-icon" href="curriculum-excercise-detail.php"><i
                                                    data-feather="book-open"></i>
                                                Excercises</a>
                                        
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Bài tự luận test lesson 1</td>
                                <td>Tự luận</td>
                                <td>12</td>
                                <td>20/04/2019</td>
                                <td>
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:;" class="material-icons" id="dropdown-id-1"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">more_vert</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-id-1">
                                            <a class="dropdown-item btn-icon" href="#"><i
                                                    data-feather="edit"></i>
                                                Edit</a>
                                            <a class="dropdown-item btn-icon" href="curriculum-excercise-detail.php"><i
                                                    data-feather="book-open"></i>
                                                Excercises</a>
                                        
                                        </div>
                                    </div>
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
<!-- Modal -->
<div class="modal fade" id="addCur" tabindex="-1" role="dialog" aria-labelledby="addCur" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addCurTitle">Add excercise</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="form-group col-12">
              <label class="d-block">Name</label>
              <input type="text" class="form-control" placeholder="" value="Bài tự luận test lesson 1">
            </div>
            <div class="form-group col-12">
              <label class="d-block">Type</label>
              <select name="" id="" class="custom-select">
                  <option value="" disabled selected>Select type</option>
                  <option value="">Tự luận</option>
                  <option value="">Trắc nghiệm</option>
              </select>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>
<?php require_once( 'footer.php' ); ?>

<script>
// $(document).ready(function() {

// });
</script>