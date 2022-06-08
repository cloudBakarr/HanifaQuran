
<form method="post" action="code.php" id="contactForm">
    <h2>Hanifa Quran Academy Student Registeration Form</h2>

    <div class="row">

        <div class="col-lg-12">
            <div class="form-group">
                <label>
                    <i class="icofont-user-alt-3"></i>
                </label>
                <input type="text" name="first_name" id="name" class="form-control" placeholder="First name" required data-error="First name">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label>
                    <i class="icofont-user-alt-3"></i>
                </label>
                <input type="text" name="middle_name" id="name" class="form-control" placeholder="Middle name" required data-error="Middle name">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label>
                    <i class="icofont-user-alt-3"></i>
                </label>
                <input type="text" name="last_name" id="name" class="form-control" placeholder="Last name" required data-error="Last name">
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label>
                    <i class="icofont-ui-call"></i>
                </label>
                <input type="text" name="phone_number" id="phone_number" placeholder="Phone" required data-error="Phone number" class="form-control">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label>

                    <i class="icofont-envelope"></i>
                </label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required data-error="Email Id">
                <div class="help-block with-errors"></div>
            </div>
        </div>





        <div class="col-lg-12">
            <div class="form-group">
                <label>
                    <i class="icofont-comment"></i>
                </label>
                <textarea name="address" class="form-control" id="message" cols="30" rows="4" placeholder="Address" required data-error="Address"></textarea>                              <div class="help-block with-errors"></div>
            </div>
        </div>


        <div class="col-lg-6">
            <div class="form-group">
                <label><br>
                    Courses:
                </label><br>

                <select name="course">
                    <option value="Course">Course</option>
                    <option value="BCA">Quran Reading</option>
                    <option value="BBA">Tajweed</option>
                    <option value="B.Tech">Quran Memorizing</option>
                    <option value="MBA">Masnun Duas</option>
                    <option value="MCA">Quran for kids</option>
                    <option value="M.Tech">Salat</option>
                    <option value="B.Tech">Madani Qaidha</option>
                    <option value="MBA">Noorani Qaidha</option>

                </select>
                <div class="help-block with-errors"></div>
            </div>
        </div>



        <div class="col-lg-6">
            <div class="form-group">
                <label><br>
                    Gender :
                </label><br>
                <input type="radio" value="Male" name="gender" checked > Male
                <input type="radio" value="Female" name="gender"> Female
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label>
                    <i class="icofont-key"></i>
                </label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required data-error="Password">

                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label>
                    <i class="icofont-key"></i>
                </label>
                <input type="password" name="re-type-password" id="password" class="form-control" placeholder="Re-type Password" required data-error="Re-type Password">

                <div class="help-block with-errors"></div>
            </div>
        </div>




        <div class="col-lg-12">
            <button type="submit" name="register" class="btn common-btn">
                Register
            </button>
            <div id="msgSubmit" class="h3 text-center hidden"></div>
            <div class="clearfix"></div>
        </div>
    </div>

</form>
