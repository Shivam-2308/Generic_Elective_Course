<?php include './Action/Connection.php' ?>
<?php
if ($con) {
    ?> 
    <script>alert('Connection successfull');</script>
    <?php
} else {
    die ("no connection". mysqli_connect_error());
    ?>
    <script>alert('Connection Failed!');</script>
    <?php
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./Action/link.php" ?>
    <link rel="stylesheet" href="./Action/Style.css">
    <title>Home Page</title>
</head>
<body>
    <header>
        <img src="https://www.facultyplus.com/wp-content/uploads/2021/01/deshbandhu-college-logo.png" alt="Image" style="float: left;"/>
        <img src="https://upload.wikimedia.org/wikipedia/en/8/84/University_of_Delhi.png" alt="Image" style="float: right;" />
        <div class="c_title">
            <h1>देशबंधु महाविद्यालय</h1>
            <h2>(दिल्ली विश्वविद्यालय)</h2>
            <h1>Deshbandhu College</h1>
            <h2>(Delhi University)</h2>
        </div>
    </header>
    <main>
        <h1 style="color: brown; font-size: 2.5rem;">General Elective Course Selection</h1>
        <div class="btns">
            <a href="#admin_form" target='_self'><button>View Table</button></a>
            <a href="GE add_form.php" target='_blank'><button>Add GE Course</button></a>
            <a href="#login_form" target='_self'><button>Update GE Course</button></a>
        </div>
    </main><hr>
    <footer>
        <h1>GET IN TOUCH</h1>
        <h3>Address: Kalkaji Main Rd, Block H, Kalkaji, New Delhi, Delhi 110019</h3>
        <h3>Phone: 011- 26439565,011-26235542</h3>
        <h3>Email: dbcollege.du@gmail.com</h3>
    </footer>

    <div id="login_form">
      <form action='./GE update_form.php' method='GET' target='_blank' class="Modal_form">
        <div class="close"><a href="#">&times;</a></div>
        <div class="login_title">Login Form</div>
        <div class="detail">
          <label>
            Name :
            <input
              type="text"
              placeholder="Enter Username..."
              name="std_name" 
              style="text-transform:none;" 
              required
            /> </label
          >
          <label>
            Roll No. :
            <input
              type="number"
              placeholder="Enter your mobile number..."
              name="std_roll_no"
              required
            /> </label
          >
        </div></br>
        <button type="submit" name="sub" id='login'>Submit</button>
      </form>
    </div>
    <div id="admin_form">
      <form action='./Action/CheckAdmin.php' method='GET' target='_blank' class="Modal_form">
        <div class="close"><a href="#">&times;</a></div>
        <div class="login_title">Admin Login Form</div>
        <div class="detail">
          <label>
            Admin Name :
            <input
              type="text"
              placeholder="Enter Username..."
              name="admin_name" 
              style="text-transform:none;" 
              required
            /> </label
          >
          <label>
            Password. :
            <input
              type="password"
              placeholder="Enter your password..."
              name="admin_password"
              required
            /> </label
          >
        </div></br>
        <button type="submit" name="sub" id='login'>Submit</button>
      </form>
    </div>

</body>
</html>


