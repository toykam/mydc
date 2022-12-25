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
    
    </div>

    <div class="col-md-4">
        <h4>Contact Information</h4>
        <div class="form-group">
            <input value="<?php echo ($participantData) ? $participantData['email'] : ''; ?>" type="email" class="form-control general" name="email" placeholder="Parent/Guardian Email" />
        </div>
        <div class="form-group">
            <input value="<?php echo ($participantData) ? $participantData['phone_number'] : '0800000000'; ?>" type="text" class="form-control general" name="phone_number" placeholder="Parent/Guardian Phone Number" />
        </div>
        <div class="form-group">
            <input class="form-control general" value="<?php echo ($participantData) ? $participantData['whatsapp_no'] : '0800000000'; ?>" name="whatsapp_no" placeholder="Parent/Guardian Whatsapp Number" />
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
        <div class="form-group class kiddies">
            <?php $class = ($participantData) ? $participantData['class'] : ''; ?>
            <select name="class" class="form-control kiddies">
                <option selected disabled>Select Participant's Class</option>
                <option <?php echo (strtolower($class) == 'nursery class') ? 'selected' : ''; ?> value="nursery class">Nursery Class</option>
                <option <?php echo (strtolower($class) == 'primary 1') ? 'selected' : ''; ?> value="primary 1">Primary 1</option>
                <option <?php echo (strtolower($class) == 'primary 2') ? 'selected' : ''; ?> value="primary 2">Primary 2</option>
                <option <?php echo (strtolower($class) == 'primary 3') ? 'selected' : ''; ?> value="primary 3">Primary 3</option>
                <option <?php echo (strtolower($class) == 'primary 4') ? 'selected' : ''; ?> value="primary 4">Primary 4</option>
                <option <?php echo (strtolower($class) == 'primary 5') ? 'selected' : ''; ?> value="primary 5">Primary 5</option>
                <option <?php echo (strtolower($class) == 'primary 6') ? 'selected' : ''; ?> value="primary 6">Primary 6</option>
                <option <?php echo (strtolower($class) == 'jss1') ? 'selected' : ''; ?> value="jss1">JSS 1</option>
                <option <?php echo (strtolower($class) == 'jss2') ? 'selected' : ''; ?> value="jss2">JSS 2</option>
                <option <?php echo (strtolower($class) == 'jss3') ? 'selected' : ''; ?> value="jss3">JSS 3</option>
            </select>
        </div>

        <div class="form-group">
            <input type="text" name="institution" value="<?php echo ($participantData) ? $participantData['institution'] : ''; ?>" class="form-control" placeholder="Participant's School"/>
        </div>

    </div>

    <hr/>
    <div class="col-md-4">
        <h4>Payment Information</h4>
        <div class="form-group">
            <input name="amount_paid" placeholder="Amount Paid" class="form-control"value="<?php echo ($participantData) ? $participantData['amount_paid'] : '3000'; ?>" />
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
    </div>
</div>