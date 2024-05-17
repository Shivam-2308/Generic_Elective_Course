<?php

include './Connection.php';
$admin_name = $_GET['admin_name'];
$admin_password = $_GET['admin_password'];

if ($admin_name==='abc' && $admin_password='xyz123') {
    ?>
    <script>
        alert("Admin Login Successfully.");
    </script>
    <?php
    header("location:../GE Table.php");
} else {
    ?>
    <script>
        alert("Failed to Login!");
    </script>
    <?php
    header("location:../Index.php");
}


?>


