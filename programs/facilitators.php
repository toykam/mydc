<?php
    $conn = new mysqli("localhost", "root", "", "mydc");

    $query_kitchen = "SELECT participants.first_name, participants.last_name, participants.gender, participants.category,participants.phone_number, participants.email, participants.class, facilitators.* FROM facilitators JOIN participants ON facilitators.pid=participants.id ";
    $sql_kit = $conn->query($query_kitchen);

    function getPrograms() {
      global $conn;
      $sql = "SELECT * FROM programs;";
      $programs = $conn->query($sql);
      return $programs;
    }

    function getProgram($pid) {
      global $conn;
      $sql = "SELECT * FROM programs WHERE id = ".$pid;
      $program = $conn->query($sql);
      return ($program) ? $program->fetch_assoc() : false;;
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<?php require __DIR__.'/../includes/head.php'; ?>

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
          <h1 class="h3 mb-2 text-gray-800">Facilitators</h1>
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Facilitators <a href="add_facilitator.php" class="float-right btn btn-primary btn-sm"><i class="fas fa-plus"></i></a></h6>

            </div>

            <div class="card-body">
              <?php include __DIR__.'/../includes/msg.php'; ?>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Full Name</th>
                      <th>Number</th>
                      <th>Gender</th>
                      <th>E-mail</th>
                      <th>Category</th>
                      <th>P Assigned</th>
                      <th>All Programs</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Full Name</th>
                      <th>Number</th>
                      <th>Gender</th>
                      <th>E-mail</th>
                      <th>Category</th>
                      <th>P Assigned</th>
                      <th>All Programs</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>

                <?php
                if ($sql_kit) {
                    while ($path = $sql_kit->fetch_assoc()) {
                        $id = $path['id'];
                        $programs = getPrograms();
                ?>
                <tr>
                  <form action="manager.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $path['id']?>">
                    <input type="hidden" name="action" value="p_assign">
                    <td><?php echo $path['first_name'].' '.$path['last_name']; ?></td>
                    <td><?php echo $path['phone_number']; ?></td>
                    <td><?php echo $path['gender']; ?></td>
                    <td><?php echo $path['email']; ?></td>
                    <td><?php echo $path['category']; ?></td>
                    <td><?php echo getProgram($path['p_assign'])['topic']; ?></td>
                    <td>
                      <select class="custom-select" name="p_assign">
                        <option selected>Programs</option>
                        <?php while ($program = $programs->fetch_assoc()) { ?>
                          <option <?php echo ($path['p_assign'] == $program['id']) ? 'selected' : ''; ?> value="<?php echo $program['id']; ?>"><?php echo $program['topic'] ?></option>
                        <?php } ?>
                      </select>
                    </td>
                    <td>
                      <a href="manager.php?delete=<?php echo $id;?>" class='btn btn-sm btn-danger'>DELETE</a>
                      <button class='btn btn-sm btn-primary'>ASSIGN</button>
                    </td>
                  </form>
                </tr>

            <?php }} ?>

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
