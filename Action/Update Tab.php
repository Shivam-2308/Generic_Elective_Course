<?php 
include "./Connection.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $course_type = $_POST['courseType'];
    $year_sem = $_POST['year_sem'];
    $course = $_POST['course'];
    $ge_course = $_POST['ge_course'];
    $email = $_POST['gmail'];
    $mobile = $_POST['number'];

    $up_query = "UPDATE `ge table` SET `Name`='$name',`College Roll no`='$roll_no',`Course Type`='$course_type',`Course`='$course',`Year/Sem`='$year_sem',`Email`='$email',`Phone No.`='$mobile',`GE Subject`='$ge_course' WHERE `College Roll no`='$roll_no'";

    $up = mysqli_query($con, $up_query);
    if ($up) {
        ?>
        <script>alert("Course Updated!");</script>
        <?php
    } else {
        ?>
        <script>alert("failed! to update");</script>
        <?php
    }
}
header("location:../Index.php");
        
    ?>