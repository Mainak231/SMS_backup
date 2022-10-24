<!-- Login Page -->

<body>
    <?php include "common_header.php" ?>
    <!-- login form -->
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-lg-12">
                <div class=" card mt-5 ml-auto mr-5 shadow rounded" style="width:30%;">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Login to continue</h5>
                        <form action ="actions/login.php" method = "POST" >
                            <div class="form-group">
                                <label for="emailBox">Email address</label>
                                <input type="email" class="form-control" id="emailBox" name="email" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="passBox">Password</label>
                                <input type="password" class="form-control" id="passBox"  name="password" autocomplete="off">
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary" name="login" onclick="validateForm()">Log In</button>
                                <a class="ml-3" href="#">Forgot your password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap js -->
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- datatables -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
</body>



</html>