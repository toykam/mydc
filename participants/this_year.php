<!DOCTYPE html>
<html lang="en">

<?php require __DIR__.'/../includes/head.php'; ?>
<?php $participants = getParticipantsBy(["date[<>]" => [date("2022-12-22"), date("2023-01-01")]]); ?>
<?php $activatedMenu = 'participants'; ?>

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
          <h1 class="h3 mb-2 text-gray-800">All Participants</h1>
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">All Participants <a href="#" class="float-right btn btn-primary btn-sm"><i class="fas fa-plus"></i></a></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S/N</th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Category</th>
                      <th>gender</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>S/N</th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Category</th>
                      <th>gender</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($participants as $key => $participant) { ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $participant['first_name'].' '.$participant['last_name']; ?></td>
                        <td><?php echo $participant['email']; ?></td>
                        <td><?php echo $participant['phone_number']; ?></td>
                        <td><?php echo $participant['category']; ?></td>
                        <td><?php echo $participant['gender']; ?></td>
                        <td>
                        <div class="dropdown">
                          <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            option
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="btn btn-sm btn-primary dropdown-item" href="<?php echo site_url('/participants/view_participant.php?id='.$participant['id']) ?>"><i class="fas fa-eye"></i> View</a>
                          <a class="btn btn-sm btn-danger dropdown-item" href="<?php echo site_url('/participants/delete_participant.php?id='.$participant['id']) ?>"><i class="fas fa-trash"></i> Delete</a>
                          <a class="btn btn-sm btn-warning dropdown-item" href="<?php echo site_url('/participants/edit_participant.php?id='.$participant['id']) ?>"><i class="fas fa-edit"></i> Edit</a>
                          </div>
                        </div>
                          
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
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

</body>

</html>
