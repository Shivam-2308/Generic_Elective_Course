<?php

include './Connection.php';
$roll_no = $_GET['roll_no'];

$delete_query = "DELETE FROM `ge table` WHERE `College Roll no`='$roll_no'";
$del = mysqli_query($con, $delete_query);

if ($del) {
    ?>
    <script>
        alert("Deleted Successfully.");
    </script>
    <?php
} else {
    ?>
    <script>
        alert("Failed to delete!");
    </script>
    <?php
}
header("location:../GE Table.php");
?>


