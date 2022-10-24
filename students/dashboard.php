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
                    <li class="nav-item" id="sidebar_menu" tabindex="1" onclick="studentBlock()">
                        <span class="nav-link">Attendance</span>
                    </li>
                    <li class="nav-item mt-2 " id="sidebar_menu" tabindex="2" onclick="teacherBlock()">
                        <span class="nav-link">Results</span>
                    </li>
                    <li class="nav-item mt-2" id="sidebar_menu" tabindex="3" onclick="aboutusBlock()">
                        <span class="nav-link">About Me</span>
                    </li>
                    <li class="nav-item mt-2"  id="sidebar_menu" tabindex="4" onclick="logoutBlock()">
                        <span class="nav-link">Log Out</span>
                    </li>
                </ul>
            </div>
            <!-- student block -->
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12 mt-2" id="s-block">
                        
                    </div>
                </div>
</body>
<script>
    function logoutBlock() {
        window.location.href = "../logout.php";
    }
</script>
<style>
    #sidebar_menu:hover,
    #sidebar_menu:focus {
        background: rgb(0, 128, 64);
        color: white;
        cursor: pointer;
    }
    .nav-link{
        text-decoration: none;
    }
</style>