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
                <option <?php echo ($gender == 'male') ? 'selected' : ''; ?> value="male">Male</option>
                <option <?php echo ($gender == 'female') ? 'selected' : ''; ?> value="female">Female</option>
            </select>
        </div>
        <div class="form-group">
            <textarea class="form-control general" name="address" placeholder="Participants Address" rows="5"><?php echo ($participantData) ? $participantData['address'] : ''; ?></textarea>
        </div>
        <!-- <div class="form-group">
            <label>Select Marital Status</label>
            <?php // $maritalStatus = ($participantData) ? $participantData['marital_status'] : ''; ?>
            <select name="marital_status" class="form-control general">
                <option selected disabled>Select Marital Status</option>
                <option <?php // echo (strtolower($maritalStatus) == 'single') ? 'selected' : ''; ?> value="single">Single</option>
                <option <?php // echo (strtolower($maritalStatus) == 'married') ? 'selected' : ''; ?> value="married">Married</option>

            </select>
        </div> -->
    
    </div>

    <div class="col-md-4">
        <h4>Contact Information</h4>
        <div class="form-group">
            <input value="<?php echo ($participantData) ? $participantData['email'] : ''; ?>" type="email" class="form-control general" name="email" placeholder="Participants Email" />
        </div>
        <div class="form-group">
            <input value="<?php echo ($participantData) ? $participantData['phone_number'] : '080000000'; ?>" type="text" class="form-control general" name="phone_number" placeholder="Participants Phone Number" />
        </div>
        <div class="form-group">
            <input class="form-control general" value="<?php echo ($participantData) ? $participantData['whatsapp_no'] : '08000000000'; ?>" name="whatsapp_no" placeholder="Participants Whatsapp Number" />
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
            <input type="text" name="institution" class="form-control" placeholder="Participant's School" value="<?php echo ($participantData) ? $participantData['institution'] : ''; ?>"/>
        </div>

        <div class="form-group class teenagers">
            <select name="class" class="form-control teenagers">
                <option>Select Participant's Class</option>
                <option <?php echo (strtolower($class) == 'jss 1') ? 'selected' : ''; ?> value="jss 1">JSS 1</option>
                <option <?php echo (strtolower($class) == 'jss 2') ? 'selected' : ''; ?> value="jss 2">JSS 2</option>
                <option <?php echo (strtolower($class) == 'jss 3') ? 'selected' : ''; ?> value="jss 3">JSS 3</option>
                <option <?php echo (strtolower($class) == 'sss 1') ? 'selected' : ''; ?> value="sss 1">SSS 1</option>
                <option <?php echo (strtolower($class) == 'sss 1') ? 'selected' : ''; ?> value="sss 2">SSS 2</option>
                <option <?php echo (strtolower($class) == 'sss 1') ? 'selected' : ''; ?> value="sss 3">SSS 3</option>
            </select>
        </div>

        <div class="form-group class teenagers">
            <input type="text" class="form-control teenagers" name="occupation" placeholder="Participants Occupation" value="<?php echo ($participantData) ? $participantData['occupation'] : ''; ?>" />
        </div>
    </div>
    <hr/>
    <div class="col-md-4">
        <h4>Payment Information</h4>
        <div class="form-group">
            <input name="amount_paid" placeholder="Amount Paid" class="form-control"value="<?php echo ($participantData) ? $participantData['amount_paid'] : '6000'; ?>" />
        </div>

        <div class="form-group">
            <input name="payment_method" placeholder="Payment Method" class="form-control" value="<?php echo ($participantData) ? $participantData['payment_method'] : ''; ?>" />
        </div>

        <div class="form-group">
            <input name="balance" placeholder="Payment Balance" class="form-control" value="<?php echo ($participantData) ? $participantData['balance'] : '0'; ?>"/>
        </div>

        <div class="form-group">
            <textarea name="payment_details" placeholder="Payment Details" class="form-control" rows="5"><?php echo ($participantData) ? $participantData['payment_details'] : ''; ?></textarea>
        </div>

        <!-- </div> -->
    </div>

    <div class="col-md-4">
        <h4>QRCode Number</h4>
        <div class="form-group">
            <input name="qrcode" placeholder="QRCode Number" class="form-control"value="<?php echo ($participantData) ? $participantData['qrcode'] : ''; ?>" />
        </div>

        <!-- </div> -->
    </div>

</div>