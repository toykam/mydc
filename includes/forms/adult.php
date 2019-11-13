<div class="col-md-12 row">
    <div class="col-md-4">
    <h4>Personal Information</h4>
    <div class="form-group">
        <input class="form-control general" name="first_name" placeholder="Participants First Name" value="<?php echo ($participantData) ? $participantData['first_name'] : ''; ?>"/>
    </div>
    <div class="form-group">
        <input value="<?php echo ($participantData) ? $participantData['last_name'] : ''; ?>" class="form-control general" name="last_name" placeholder="Participants Last Name" />
    </div>
    <div class="form-group">
        <!-- <label>Select Gender</label> -->
        <?php $gender = ($participantData) ? $participantData['gender'] : ''; ?>
        <select name="gender" class="form-control general">
            <option selected disabled>Select Gender</option>
            <option <?php echo ($gender == 'male') ? 'selected' : 'disabled'; ?> value="male">Male</option>
            <option <?php echo ($gender == 'female') ? 'selected' : 'disabled'; ?> value="female">Female</option>
        </select>
    </div>
    <div class="form-group">
        <textarea class="form-control general" name="address" placeholder="Participants Address" rows="5"><?php echo ($participantData) ? $participantData['address'] : ''; ?></textarea>
    </div>
    <div class="form-group">
        <label>Select Marital Status</label>
        <?php $maritalStatus = ($participantData) ? $participantData['marital_status'] : ''; ?>
        <select name="marital_status" class="form-control general">
            <option selected disabled>Select Marital Status</option>
            <option <?php echo (strtolower($maritalStatus) == 'single') ? 'selected' : ''; ?> value="single">Single</option>
            <option <?php echo (strtolower($maritalStatus) == 'married') ? 'selected' : ''; ?> value="married">Married</option>
        </select>
    </div>
    
    </div>

    <div class="col-md-4">
    <h4>Contact Information</h4>
    <div class="form-group">
        <input value="<?php echo ($participantData) ? $participantData['email'] : ''; ?>" type="email" class="form-control general" name="email" placeholder="Participants Email" />
    </div>
    <div class="form-group">
        <input value="<?php echo ($participantData) ? $participantData['phone_number'] : ''; ?>" type="text" class="form-control general" name="phone_number" placeholder="Participants Phone Number" />
    </div>
    <div class="form-group">
        <input class="form-control general" value="<?php echo ($participantData) ? $participantData['whatsapp_no'] : ''; ?>" name="whatsapp_no" placeholder="Participants Whatsapp Number" />
    </div>

    <div class="form-group">
        <input class="form-control general" name="branch" placeholder="Participants Branch" value="<?php echo ($participantData) ? $participantData['branch'] : ''; ?>"/>
    </div>

    <div class="form-group class adult">
        <input class="form-control adult" name="platoon" placeholder="Participants Platoon" value="<?php echo ($participantData) ? $participantData['platoon'] : ''; ?>"/>
    </div>
    </div>

    <div class="col-md-4">
    <h4>Educational Information</h4>

    <div class="form-group">
        <input type="text" name="institution" value="<?php echo ($participantData) ? $participantData['institution'] : ''; ?>" class="form-control" placeholder="Participant's School"/>
    </div>

    <div class="form-group class adult">
        <?php $class = ($participantData) ? $participantData['class'] : ''; ?>
        <select name="class" class="form-control adult">
            <option selected disabled>Select participant class</option>
            <option <?php echo (strtolower($class) == 'bsc') ? 'selected' : ''; ?> value="BSc">BSc</option>
            <option <?php echo (strtolower($class) == 'msc') ? 'selected' : ''; ?> value="MSc">MSc</option>
            <option <?php echo (strtolower($class) == 'phd') ? 'selected' : ''; ?> value="Phd">Phd</option>
            <option <?php echo (strtolower($class) == '100 level') ? 'selected' : ''; ?> class="100 level">100 Level</option>
            <option <?php echo (strtolower($class) == '200 level') ? 'selected' : ''; ?> class="200 level">200 Level</option>
            <option <?php echo (strtolower($class) == '300 level') ? 'selected' : ''; ?> class="300 level">300 Level</option>
            <option <?php echo (strtolower($class) == '400 level') ? 'selected' : ''; ?> class="400 level">400 Level</option>
            <option <?php echo (strtolower($class) == '500 level') ? 'selected' : ''; ?> class="500 level">500 Level</option>
            <option <?php echo (strtolower($class) == '600 level') ? 'selected' : ''; ?> class="600 level">600 Level</option>
        </select>
    </div>

    <div class="form-group class adult">
        <input type="text" class="form-control adult" value="<?php echo ($participantData) ? $participantData['occupation'] : ''; ?>" name="occupation" placeholder="Participants Occupation" />
    </div>
    </div>
    <hr/>
    <div class="col-md-4">
    <h4>Payment Information</h4>
    <div class="form-group">
        <input name="amount_paid" placeholder="Amount Paid" class="form-control"value="<?php echo ($participantData) ? $participantData['amount_paid'] : ''; ?>" />
    </div>

    <div class="form-group">
        <input name="payment_method" placeholder="Payment Method" class="form-control" value="<?php echo ($participantData) ? $participantData['payment_method'] : ''; ?>" />
    </div>

    <div class="form-group">
        <input name="balance" placeholder="Payment Balance" class="form-control" value="<?php echo ($participantData) ? $participantData['balance'] : ''; ?>"/>
    </div>

        <div class="form-group">
            <textarea name="payment_details" placeholder="Payment Details" class="form-control" rows="5"><?php echo ($participantData) ? $participantData['payment_details'] : ''; ?></textarea>
        </div>
    </div>
</div>