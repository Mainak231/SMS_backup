<?php include "../includes/config.php" ?>

<div class="row" id="add_students">
    <div class="col-lg-12 mt-4 ml-1">
        <h4>Form Details / Add Students</h4>

        <form class="mt-4 shadow p-4 rounded" action="" method="post">
            <div class="form-row">
                <div class="form-group col-md-4 ">
                    <label for="inputEmail4 ">First Name</label>
                    <input type="text" class="form-control" id="inputEmail4" name="firstname" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Middle Name</label>
                    <input type="text" class="form-control" id="inputPassword4" name="middlename">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Last Name</label>
                    <input type="text" class="form-control" id="inputPassword4" name="lastname" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" name="password" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Regd. No</label>
                    <input type="text" class="form-control" id="inputPassword4" name="regdno" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Course/Branch</label>
                    <input type="text" class="form-control" id="inputPassword4" name="course" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Class</label>
                    <input type="text" class="form-control" id="inputPassword4" name="class" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Section</label>
                    <input type="text" class="form-control" id="inputPassword4" name="section" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="address" required>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" name="address2" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" name="city" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <input type="text" class="form-control" id="inputState" name="state" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip" name="zip" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        I have read all the terms and conditions.
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-success" id="submit_btn">Submit</button>
        </form>

    </div>
</div>


<?php
if (isset($_POST['firstname'])) {
    $s_firstname = $_POST['firstname'];
    $s_middlename = $_POST['middlename'];
    $s_lastname = $_POST['lastname'];
    $s_email = $_POST['email'];
    $s_password = $_POST['password'];
    $s_regdno = $_POST['regdno'];
    $s_course = $_POST['course'];
    $s_class = $_POST['class'];
    $s_sec = $_POST['section'];
    $s_address = $_POST['address'];
    $s_address2 = $_POST['address2'];
    $s_city = $_POST['city'];
    $s_state = $_POST['state'];
    $s_zip = $_POST['zip'];




    $sql = "INSERT INTO students(firstname,middlename,lastname,email,`password`,regdNo,course,class,section,`address`,address2,city,`state`,zip) VALUES('$s_firstname','$s_middlename','$s_lastname','$s_email','$s_password','$s_regdno','$s_course','$s_class','$s_sec','$s_address','$s_address2','$s_city','$s_state','$s_zip')";

    mysqli_query($db_conn, $sql) or die('Connection error');
}
?>
<!-- <script type="text/javascript">
    $(document).ready(function() {
        $("#submit_btn").click(function() {
            var firstname = $('input[name=firstname]').val();
            var middlename = $('input[name=middlename]').val();
            var lastname = $('input[name=lastname]').val();
            var email = $('input[name=email]').val();
            var password = $('input[name=password]').val();
            var regdNo = $('input[name=regdno]').val();
            var course = $('input[name=course]').val();
            var Class = $('input[name=class]').val();
            var section = $('input[name=section]').val();
            var address = $('input[name=address]').val();
            var address2 = $('input[name=address2]').val();
            var city = $('input[name=city]').val();
            var state = $('input[name=state]').val();
            var zip = $('input[name=zip]').val();


            var formdata = {
                firstname: firstname,
                middlename: middlename,
                lastname: lastname,
                email: email,
                password: password,
                regdNo: regdNo,
                course: course,
                Class: Class,
                section: section,
                address: address,
                address2: address2,
                city: city,
                state: state,
                aip: zip
            };

            $.ajax({
                url: 'addStudentForm.php',
                type: 'post',
                data: formdata,
                success: function(res) {
                    console.log(res);
                }
            })

        })
    });
</script> -->

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>