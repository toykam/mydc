<div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Male Kiddies</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'kiddies', "gender" => "male", "date[<>]" => [date("2022-12-22"), date("2023-12-22")]])) ?></div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'teenagers',  'gender'=>'male', "date[<>]" => [date("2022-12-22"), date("2023-12-22")]])) ?></div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'undergraduate', 'gender'=>'male', "date[<>]" => [date("2022-12-22"), date("2023-12-22")]])) ?></div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'adult', 'gender'=>'male', "date[<>]" => [date("2022-12-22"), date("2023-12-22")]])) ?></div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'kiddies', 'gender'=>'female', "date[<>]" => [date("2022-12-22"), date("2023-12-22")]])) ?></div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'teenagers', 'gender'=>'female', "date[<>]" => [date("2022-12-22"), date("2023-12-22")]])) ?></div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'undergraduate', 'gender'=>'female',  "date[<>]" => [date("2022-12-22"), date("2023-12-22")]])) ?></div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'adult', 'gender'=>'female', "date[<>]" => [date("2022-12-22"), date("2023-12-22")]])) ?></div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'kiddies', "date[<>]" => [date("2022-12-22"), date("2023-12-22")]])) ?></div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'teenagers', "date[<>]" => [date("2022-12-22"), date("2023-12-22")]])) ?></div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'undergraduate', "date[<>]" => [date("2022-12-22"), date("2023-12-22")]])) ?></div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count(getParticipantsBy(['category'=>'adult', "date[<>]" => [date("2022-12-22"), date("2023-12-22")]])) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-male fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>