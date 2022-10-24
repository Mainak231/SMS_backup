<?php include "../includes/config.php" ?>

<?php
$query = mysqli_query($db_conn, "Select * from logindetails");

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    while ($info = mysqli_fetch_object($query)) {
        $email_db = $info->email;
        $pass_db = $info->password;
        $desig_db = $info->designation;

        if($email == $email_db && $pass == $pass_db && $desig_db =="admin")
        {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['designation'] = $desig_db;
            $_SESSION['login'] = true;
            header("Location: ../admin/dashboard.php?user=admin");
        }
        else if($email == $email_db && $pass == $pass_db && $desig_db =="student")
        {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['designation'] = $desig_db;
            $_SESSION['login'] = true;
            header("Location: ../students/dashboard.php?user=student");
        }
        else {
            echo "<script>
            alert('Wrong Password/Username');
            window.location.href='../index.php'
            </script>";
           // exit();
        }
    }
}
?>