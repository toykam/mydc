

    <div class="col-md-12 row">
        <div class="col-md-4">
        <h4>Personal Information</h4>
        <div class="form-group">
            <input class="form-control general" name="first_name" placeholder="Participants First Name" />
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
        <div class="form-group">
            <label>Select Marital Status</label>
            <select name="marital_status" class="form-control general">
            <option selected disabled>Select Marital Status</option>
            <option value="single">Single</option>
            <option value="married">Married</option>
            </select>
        </div>
        
        </div>

        <div class="col-md-4">
        <h4>Contact Information</h4>
        <div class="form-group">
            <input type="email" class="form-control general" name="email" placeholder="Participants Email" />
        </div>
        <div class="form-group">
            <input type="text" class="form-control general" name="phone_number" placeholder="Participants Phone Number" />
        </div>
        <div class="form-group">
            <input class="form-control general" name="whatsapp_no" placeholder="Participants Whatsapp Number" />
        </div>

        <div class="form-group">
            <input class="form-control general" name="branch" placeholder="Participants Branch" />
        </div>

        <div class="form-group class adult">
            <input class="form-control adult" name="platoon" placeholder="Participants Platoon" />
        </div>
        </div>

        <div class="col-md-4">
        <h4>Educational Information</h4>

        <div class="form-group">
            <input type="text" name="institution" class="form-control" placeholder="Participant's School"/>
        </div>

        <div class="form-group class adult">
            <select name="class" class="form-control adult">
                <option value="BSc">BSc</option>
                <option value="MSc">MSc</option>
                <option value="Phd">Phd</option>
                <option class="100 level">100 Level</option>
                <option class="200 level">200 Level</option>
                <option class="300 level">300 Level</option>
                <option class="400 level">400 Level</option>
                <option class="500 level">500 Level</option>
                <option class="600 level">600 Level</option>
            </select>
        </div>

        <div class="form-group class adult">
            <input type="text" class="form-control adult" name="occupation" placeholder="Participants Occupation" />
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