<?php require __DIR__.'/connection.php'; ?>
<?php
$male = 0;
$female = 0;
$total = 0;
$valSql = "SELECT w.*, p.email, p.last_name, p.first_name, p.platoon FROM workers as w JOIN participants as p ON w.pid = p.id WHERE w.dep_id = 3";
$data = $conn->query($valSql);



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

         

          <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Security Members</h1>
         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Security Members</h6>
            </div>
            <div class="card-body">
              <?php include __DIR__.'/../includes/msg.php' ?>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Duty</th>     
                      <th>Post</th>     
                      <th>Clock In</th>   
                      <th>Clock Out</th> 
                      <th>Action</th>    
                    </tr>
                  </thead>
                                
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Duty</th>   
                      <th>Post</th>   
                      <th>Clock In</th>                  
                      <th>Clock Out</th>
                      <th>Action</th>                  
                    </tr>
                  </tfoot>
                  <tbody>

                    <?php while ($osise = $data->fetch_assoc()) { ?>                      
                      <tr>
                        <form action="manager.php" method="POST">
                          <input type="hidden" name="assign_post" value="1">
                          <td>
                            <?php echo $osise['first_name']. ' '.$osise['last_name']; ?>
                            <input type="hidden" name="pid" value="<?php echo $osise ['pid']; ?>">
                            <input type="hidden" name="position" value="<?php echo $osise ['position']; ?>">
                          </td>
                          
                          <td><?php echo $osise['position']; ?></td>
                          <td>
                            <select name="duty" class="form-control">
                              <option value="morning">Morning</option>
                              <option value="afternoon">Afternoon</option>
                              <option value="night">Night</option>
                            </select>
                          </td>  
                          <td>
                            <select name="post" class="form-control">
                              <option value="gate">Gate</option>
                              <option value="reception">Reception</option>
                              <option value="mosjid"> Mosjid</option>
                              <option value="ruwaq">Ruwaq</option>
                            </select>
                          </td>
                          <td style="width: 10px;">
                            <input type="datetime-local" class="form-control" name="clock_in" required>
                          </td>
                          <td>
                            <input type="datetime-local" class="form-control" name="clock_out" required>
                          </td>
                          <td>
                            <button class="btn btn-success btn-sm text-light">Assign Post</button>
                          </td>
                        </form>
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
