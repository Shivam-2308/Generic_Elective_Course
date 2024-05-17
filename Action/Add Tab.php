<?php 

include "./Connection.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $course_type = $_POST['course_type'];
    $year_sem = $_POST['year_sem'];
    $course = $_POST['course'];
    $ge_course = $_POST['ge_course'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $insert_query = "INSERT INTO `ge table`(`Name`, `College Roll no`, `Course Type`, `Course`, `Year/Sem`, `Email`, `Phone No.`, `GE Subject`) VALUES ('$name','$roll_no','$course_type','$course','$year_sem','$email','$mobile','$ge_course')";

    $check = "SELECT * FROM `ge table` WHERE `College Roll no`='$roll_no'";
    $check_query = mysqli_query($con, $check);

    if (mysqli_num_rows($check_query)>0) {
        ?>
        <script>alert("This roll number is already exist\nSo Failed! to add");</script>
        <?php
    } else {
        $add = mysqli_query($con, $insert_query);
        if ($add) {
            ?>
            <script>alert("Course added");</script>
            <?php
        } else {
            ?>
            <script>alert("failed!");</script>
            <?php
        }
    }
}
header("location:../Index.php");

?>