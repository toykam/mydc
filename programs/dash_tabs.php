<?php
    $conn = mysqli_connect("localhost", "root", "", "mydc");
    $query_kitchen = "SELECT * FROM workers WHERE dep_id='2'";
    $query_security = "SELECT * FROM workers WHERE dep_id='3'";
    $query_clinic = "SELECT * FROM workers WHERE dep_id='5'";
    $query_program = "SELECT * FROM workers WHERE dep_id='4'";

    $sql_kit = mysqli_query($conn, $query_kitchen);
    $sql_sec = mysqli_query($conn, $query_security);
    $sql_cli = mysqli_query($conn, $query_clinic);
    $sql_prog = mysqli_query($conn, $query_program);

    $total_kitchen_attendance = mysqli_num_rows($sql_kit);
    $total_security_attendance = mysqli_num_rows($sql_sec);
    $total_clinic_attendance = mysqli_num_rows($sql_cli);
    $total_program_attendance = mysqli_num_rows($sql_prog);


?>

<div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Male Kiddies</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'kiddies', 'gender'=>'male'])) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-male fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Male Teenagers</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'teenager', 'gender'=>'male'])) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-male fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Male Undergraduates</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'undergraduate', 'gender'=>'male'])) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-male fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Male Adults</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'adult', 'gender'=>'male'])) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-male fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Female Kiddies</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'kiddies', 'gender'=>'female'])) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-female fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Female Teenagers</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'teenager', 'gender'=>'female'])) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-female fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Female Undergraduates</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'undergraduate', 'gender'=>'female'])) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-female fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Female Adults</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'adult', 'gender'=>'female'])) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-female fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kiddies Total</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'kiddies'])) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-male fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Teenagers Total</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'teenager'])) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-male fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Undergraduates Total</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'undergraduate'])) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-male fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Adults Total</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'adult'])) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-male fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kitchen Workers Total</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($total_kitchen_attendance); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-male fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Security Workers Total</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($total_security_attendance); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-male fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Clinic Workers Total</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($total_clinic_attendance); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-male fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
