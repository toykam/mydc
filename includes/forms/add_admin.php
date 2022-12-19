

    <div class="col-md-12 row">
        <div class="col-md-12">
        <h4>Personal Information</h4>
        <div class="form-group">
            <input class="form-control general" name="name" placeholder="Admin Full Name" value="<?php echo $adminData['aname'] ?? "" ?>" />
        </div>
        <div class="form-group">
            <input class="form-control general" name="email" placeholder="Admin Email" value="<?php echo $adminData['aemail'] ?? "" ?>" />
        </div>
        <div class="form-group">
            <input class="form-control general" name="phone_number" placeholder="Admin Phone Number" value="<?php echo $adminData['phone_number'] ?? "" ?>" />
        </div>
        <div class="form-group">
            <input class="form-control general" name="password" placeholder="Admin Password" />
        </div>
        <div class="form-group">
            <?php $selectedDepartment = $adminData['department'] ?? null; ?>
            <select name="department" class="form-control general">
                <option selected disabled>Select Department</option>
                <option <?php echo ($selectedDepartment != null && $selectedDepartment == "admin") ? "selected" : "" ?> value="admin">Admin</option>
                <option <?php echo ($selectedDepartment != null && $selectedDepartment == "security") ? "selected" : "" ?> value="security">Security</option>
                <option <?php echo ($selectedDepartment != null && $selectedDepartment == "kitchen") ? "selected" : "" ?> value="kitchen">Kitchen</option>
                <option <?php echo ($selectedDepartment != null && $selectedDepartment == "clinic") ? "selected" : "" ?> value="clinic">Medical</option>
                <option <?php echo ($selectedDepartment != null && $selectedDepartment == "r_and_r") ? "selected" : "" ?> value="r_and_r">R and R</option>
            </select>
        </div>
        
        </div>

      
    </div>