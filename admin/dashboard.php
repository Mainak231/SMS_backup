<?php include "../common_header.php" ?>
<?php session_start() ?>
<?php
if (!isset($_SESSION['login']))
    header("Location:../index.php")
?>

<body>
    <div class="container-fluid">
        <div class="row" style="height:100vh;">
            <div class="col-lg-2 shadow">
                <div class="mt-3 ml-2">
                    <h3 class="ml-2">Hello, <?= $_SESSION['designation'] ?></h3>
                </div>
                <ul class="nav flex-column ml-1 mt-4">
                    <li class="nav-item .active" id="sidebar_menu1" tabindex="1" onclick="studentBlock()">
                        <span class="nav-link">Students</span>
                    </li>
                    <li class="nav-item mt-2 .active" id="sidebar_menu2" tabindex="2" onclick="teacherBlock()">
                        <span class="nav-link">Teachers</span>
                    </li>
                    <li class="nav-item mt-2 .active" id="sidebar_menu3"  tabindex="3" onclick="aboutusBlock()">
                        <span class="nav-link">About us</span>
                    </li>
                    <li class="nav-item mt-2 .active" id="sidebar_menu4" tabindex="4" onclick="logoutBlock()">
                        <span class="nav-link">Log Out</span>
                    </li>
                </ul>
            </div>
            <!-- student block -->
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12 mt-2" id="s-block">
                        <!-- <button type="button" onclick="add_students()" class="btn btn-outline-success btn-lg">Add Students</button>
                        <button type="button" class="btn btn-outline-success btn-lg ml-3">View Students</button> -->
                        <ul class="nav nav-tabs" >
                            <li class="nav-item">
                                <a class="nav-link active" onclick="view_students()" href="#" >View Students</a>
                            </li>
                            <li class="nav-item" >
                                <a class="nav-link" onclick="add_students()" href="#"  >Add Students</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <?php include "./addStudentsForm.php" ?>
                <?php include "./view_students.php" ?>
                <div class="row">
                    <div class="col-lg-12 mt-2" id="t-block">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">View teachers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Add Teachers</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-10 mt-3" id="a-block">
                        <?php include "./aboutus.php" ?>
                    </div>
                </div>
            </div>

</body>
<script>
      function view_students() {
        document.getElementById("view_students").style.display = "block";
        document.getElementById("add_students").style.display = "none";
    }
    function add_students() {
        document.getElementById("add_students").style.display = "block";
        document.getElementById("view_students").style.display = "none";
    }
    window.onload = function() {
        document.getElementById("s-block").style.display = "block";
        document.getElementById("view_students").style.display = "block";
        document.getElementById("a-block").style.display = "none";
        document.getElementById("t-block").style.display = "none";
        document.getElementById("add_students").style.display = "none";
    }

    function studentBlock() {
        document.getElementById("sidebar_menu1").classList.add("active");
        document.getElementById("sidebar_menu2").classList.remove("active");
        document.getElementById("sidebar_menu3").classList.remove("active");
        document.getElementById("sidebar_menu4").classList.remove("active");
        document.getElementById("s-block").style.display = "block";
        document.getElementById("a-block").style.display = "none";
        document.getElementById("t-block").style.display = "none";
        document.getElementById("add_students").style.display = "none";
        document.getElementById("view_students").style.display = "block";
    }

    function teacherBlock() {
        document.getElementById("sidebar_menu2").classList.add("active");
        document.getElementById("sidebar_menu1").classList.remove("active");
        document.getElementById("sidebar_menu3").classList.remove("active");
        document.getElementById("sidebar_menu4").classList.remove("active");
        document.getElementById("t-block").style.display = "block";
        document.getElementById("s-block").style.display = "none";
        document.getElementById("a-block").style.display = "none";
        document.getElementById("add_students").style.display = "none";
        document.getElementById("view_students").style.display = "none";
    }

    function aboutusBlock() {
        //console.log("Hi");
        document.getElementById("sidebar_menu3").classList.add("active");
        document.getElementById("sidebar_menu2").classList.remove("active");
        document.getElementById("sidebar_menu1").classList.remove("active");
        document.getElementById("sidebar_menu4").classList.remove("active");
        document.getElementById("a-block").style.display = "block";
        document.getElementById("s-block").style.display = "none";
        document.getElementById("t-block").style.display = "none";
        document.getElementById("add_students").style.display = "none";
        document.getElementById("view_students").style.display = "none";
    }

    function logoutBlock() {
        document.getElementById("sidebar_menu4").classList.add("active");
        document.getElementById("sidebar_menu2").classList.remove("active");
        document.getElementById("sidebar_menu3").classList.remove("active");
        document.getElementById("sidebar_menu1").classList.remove("active");
        window.location.href = "../logout.php";
    }
</script>
<style>
    .active
     {
        background: rgb(0, 128, 64);
        color: white;
        /* cursor: pointer; */
    }
    #sidebar_menu1:hover, #sidebar_menu2:hover, #sidebar_menu3:hover, #sidebar_menu4:hover{
        background: rgb(0, 128, 64);
        color: white;
        cursor: pointer;
    }
    .nav-link{
        text-decoration: none;
    }
</style>