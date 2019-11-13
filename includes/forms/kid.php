

    <div class="col-md-12 row">
        <div class="col-md-4">
        <h4>Personal Information</h4>
        <div class="form-group">
            <input value="<?php echo ($participantData) ? $participantData['first_name'] : ''; ?>" class="form-control general" name="first_name" placeholder="Participants First Name" />
        </div>
        <div class="form-group">
            <input class="form-control general" name="last_name" placeholder="Participants Last Name" />
        </div>
        <div class="form-group">
            <!-- <label>Select Gender</label> -->
            <select name="gender" class="form-control general">
            <option selected disabled>Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            </select>
        </div>
        <div class="form-group">
            <textarea class="form-control general" name="address" placeholder="Participants Address" rows="5"></textarea>
        </div>
        </div>

        <div class="col-md-4">
        <h4>Contact Information</h4>
        <div class="form-group">
            <input type="email" class="form-control general" name="email" placeholder="Parent/Guardian Email" />
        </div>
        <div class="form-group">
            <input type="text" class="form-control general" name="phone_number" placeholder="Parent/Guardian Phone Number" />
        </div>
        <div class="form-group">
            <input class="form-control general" name="whatsapp_no" placeholder="Parent/Guardian Whatsapp Number" />
        </div>

        <div class="form-group">
            <input class="form-control general" name="branch" placeholder="Participants Branch" />
        </div>
        </div>

        <div class="col-md-4">
        <h4>Educational Information</h4>
        <div class="form-group class kiddies">
            <select name="class" class="form-control kiddies">
            <option>Select Participant's Class</option>
            <option>Nursery Class</option>
            <option>Primary 1</option>
            <option>Primary 2</option>
            <option>Primary 3</option>
            <option>Primary 4</option>
            <option>Primary 5</option>
            <option>Primary 6</option>
            </select>
        </div>

        <div class="form-group">
            <input type="text" name="institution" class="form-control" placeholder="Participant's School"/>
        </div>

        </div>
        <hr/>
        <div class="col-md-4">
        <h4>Payment Information</h4>
        <div class="form-group">
            <input name="amount_paid" placeholder="Amount Paid" class="form-control" />
        </div>

        <div class="form-group">
            <input name="payment_method" placeholder="Payment Method" class="form-control" />
        </div>

        <div class="form-group">
            <input name="balance" placeholder="Payment Balance" class="form-control" />
        </div>

        <div class="form-group">
            <textarea name="payment_details" placeholder="Payment Details" class="form-control" rows="5"></textarea>
        </div>
        </div>
    </div>