<?php include "../includes/config.php" ?>

<?php
$sql = "SELECT * FROM students";
$res = mysqli_query($db_conn, "SELECT * FROM students");
$res_course = mysqli_query($db_conn,"SELECT course from students group by course");
$res_course_count = mysqli_num_rows($res_course);
$res_count = mysqli_num_rows($res);
$result = $db_conn->query($sql);
$db_conn->close();
$counter = 0;
?>


<div class="row" id="view_students">
    <div class="col-lg-12 mt-4 ml-1">
        <div class="d-flex flex-row">
            <h4>Details</h4>
        </div>
        <div class="mt-3 p-2 rounded shadow">
            <span>Total number of students : <?= $res_count ?></span>
            <span class="ml-4">Total number of courses : <?= $res_course_count ?></span>
            <span class="float-right"><strong>Date:</strong> <?=date("Y-m-d");?></span>
        </div>
        <div class="mt-4">
            <table id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead class="thead-dark">
                    <tr>
                        <th>SL No.</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Registration Number</th>
                        <th>Course</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Address 1</th>
                        <th>Address 2</th>
                        <th>City</th>
                        <th>Update Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($rows = $result->fetch_assoc()) {
                    ?>
                        <tr id="somerow">
                            <td><?php echo ++$counter; ?></td>
                            <td><?php echo $rows['firstname']; ?></td>
                            <td><?php echo $rows['middlename']; ?></td>
                            <td><?php echo $rows['lastname']; ?></td>
                            <td><?php echo $rows['email']; ?></td>
                            <td><?php echo $rows['regdNo']; ?></td>
                            <td><?php echo $rows['course']; ?></td>
                            <td><?php echo $rows['class']; ?></td>
                            <td><?php echo $rows['section']; ?></td>
                            <td><?php echo $rows['address']; ?></td>
                            <td><?php echo $rows['address2']; ?></td>
                            <td><?php echo $rows['city']; ?></td>
                            <td><button class="btn btn-success rounded mr-2" onclick="getRegd()">Update </button></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
   

    function getRegd(){
        var row = document.getElementById("somerow");
        var cells = row.getElementsByTagName("td");
        
        console.log(cells[5].innerText);
    }
</script>