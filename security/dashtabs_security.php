<?php require __DIR__.'/connection.php'; ?>

<?php
$male = 0;
$female = 0;
$total = 0;
$valSql = "SELECT * FROM workers WHERE dep_id = 3";
$check = $conn->query($valSql);

while ($sec = $check->fetch_assoc()) {
  $sql = "SELECT gender FROM participants WHERE id = ".$sec['pid'];
  $data = $conn->query($sql)->fetch_assoc();
  if ($data['gender'] == 'female') {
    $female += 1;
  } else if ($data['gender'] == 'male') {
    $male += 1;
  }
  // var_dump($data->fetch_assoc());
  // if ($data->fetch_ass)
}

$total = $check->num_rows;
 

?>


<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Male Security</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $male; ?></div>
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
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Female Security</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $female; ?></div>
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
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Security</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total; ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-male fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>