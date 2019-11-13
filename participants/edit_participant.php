<!DOCTYPE html>
<html lang="en">
<?php require __DIR__.'/../includes/head.php'; ?>
<?php $activatedMenu = 'participants'; ?>
<?php $categories = getCategoriesBy(); ?>
<?php $participantData = getParticipantBy(['id' => $_GET['id']]); ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
      <?php require __DIR__.'/../includes/side_bar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
          <?php require __DIR__.'/../includes/top_bar.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Users</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div> -->

          <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit Participants</h1>
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  <a class="back-btn btn btn-sm btn-primary text-light"><i class="fa fa-arrow-left"></i> back</a>
                  Edit Participants
                </h6>
            </div>
            <div class="card-body">
              <?php require __DIR__.'/../includes/msg.php'; ?>
              <?php //echo $participantData['first_name']; ?>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link <?php echo ($participantData['category'] == 'kiddies') ? 'active' : 'disabled'; ?>" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Kiddies</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  <?php echo ($participantData['category'] == 'teenager') ? 'active' : 'disabled'; ?>" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Teenagers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  <?php echo ($participantData['category'] == 'adult') ? 'active' : 'disabled'; ?>" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Adults</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link  <?php echo ($participantData['category'] == 'undergraduate') ? 'active' : 'disabled'; ?>" id="ud-tab" data-toggle="tab" href="#ud" role="tab" aria-controls="ud" aria-selected="false">Undergraduates</a>
                </li>
              </ul>

              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade  <?php echo ($participantData['category'] == 'kiddies') ? 'active show' : ''; ?>" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <form msg="Registering new user" class="form row" action="<?php echo site_url('/includes/submitManager.php'); ?>" method="POST">
                    <input name="reg_user" value="1" type="hidden"/>
                    <div class="col-sm-12 form-group">
                      <label>Select Category</label>
                      <select name="category" class="form-control" id="category">
                        <option disabled selected>Select category</option>
                        <?php foreach($categories as $key => $category) { ?>
                          <option <?php echo ($participantData['category'] == $category['name']) ? 'selected' : ''; ?> value="<?php echo ($category['name']); ?>"><?php echo ucfirst($category['name']) ?></option>
                        <?php } ?>
                      </select>
                    </div>

                    <div id="kiddies" class="forms">
                      <?php include __DIR__.'/../includes/forms/kid.php'; ?>
                    </div>

                    <div class="col-md-12">
                      <button class="btn btn-primary btn-lg" id="submitBtn">Add Participants</button>
                    </div>
                  </form>
                </div>

                <div class="tab-pane fade  <?php echo ($participantData['category'] == 'teenager') ? 'active show' : ''; ?>" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <form msg="Registering new user" class="form row" action="<?php echo site_url('/includes/submitManager.php'); ?>" method="POST">
                    <input name="reg_user" value="1" type="hidden"/>
                    <div class="col-sm-12 form-group">
                      <label>Select Category</label>
                      <select name="category" class="form-control" id="category">
                        <option>Select category</option>
                        <?php foreach($categories as $key => $category) { ?>
                          <option <?php echo ($participantData['category'] == $category['name']) ? 'selected' : ''; ?> value="<?php echo ($category['name']); ?>"><?php echo ucfirst($category['name']) ?></option>
                        <?php } ?>
                      </select>
                    </div>

                    <div id="teenagers" class="forms">
                      <?php include __DIR__.'/../includes/forms/teen.php'; ?>
                    </div>

                    <div class="col-md-12">
                      <button class="btn btn-primary btn-lg" id="submitBtn">Add Participants</button>
                    </div>
                  </form>
                </div>
                
                <div class="tab-pane fade  <?php echo ($participantData['category'] == 'adult') ? 'active show' : ''; ?>" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                  <form msg="Registering new user" class="form row" action="<?php echo site_url('/includes/submitManager.php'); ?>" method="POST">
                    <input name="reg_user" value="1" type="hidden"/>
                    <div class="col-sm-12 form-group">
                      <label>Select Category</label>
                      <select name="category" class="form-control" id="category">
                        <option>Select category</option>
                        <?php foreach($categories as $key => $category) { ?>
                          <option <?php echo ($participantData['category'] == $category['name']) ? 'selected' : ''; ?> value="<?php echo ($category['name']); ?>"><?php echo ucfirst($category['name']) ?></option>
                        <?php } ?>
                      </select>
                    </div>


                    <div id="adult" class="forms">
                      <?php include __DIR__.'/../includes/forms/adult.php'; ?>
                    </div>

                    <div class="col-md-12">
                      <button class="btn btn-primary btn-lg" id="submitBtn">Add Participants</button>
                    </div>
                  </form>
                </div>

                <div class="tab-pane fade  <?php echo ($participantData['category'] == 'undergraduate') ? 'active show' : ''; ?>" id="ud" role="tabpanel" aria-labelledby="ud-tab">
                  <form msg="Registering new user" class="form row" action="<?php echo site_url('/includes/submitManager.php'); ?>" method="POST">
                    <input name="reg_user" value="1" type="hidden"/>
                    <div class="col-sm-12 form-group">
                      <label>Select Category</label>
                      <select name="category" class="form-control" id="category">
                        <option>Select category</option>
                        <?php foreach($categories as $key => $category) { ?>
                          <option <?php echo ($participantData['category'] == $category['name']) ? 'selected' : ''; ?> value="<?php echo strtolower($category['name']); ?>"><?php echo ucfirst($category['name']) ?></option>
                        <?php } ?>
                      </select>
                    </div>


                    <div id="adult" class="forms">
                      <?php include __DIR__.'/../includes/forms/ud.php'; ?>
                    </div>

                    <div class="col-md-12">
                      <button class="btn btn-primary btn-lg" id="submitBtn">Add Participants</button>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>

        </div>
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php require __DIR__.'/../includes/footer.php'; ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <?php require __DIR__.'/../includes/foot.php'; ?>
  <script src="<?php echo site_url('/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?php echo site_url('/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
  <script src="<?php echo site_url('/js/demo/datatables-demo.js') ?>"></script>
  <script src="<?php echo site_url('/js/forms.js') ?>"></script>
  <script>
    $(document).ready(function() {
      const category = $("#category");
      category.change(function () {
        let cat = $(this).val();
        $('#reg_form').show();
        $(`#${cat}`).show();
      });
    });
  </script>

</body>

</html>
