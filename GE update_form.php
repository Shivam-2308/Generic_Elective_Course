<?php include "./Action/Connection.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './Action/link.php' ?>
    <link rel="stylesheet" href="./Action/Style.css">
    <title>Update GE Form</title>
</head>
<body bgcolor="azure">

<?php 
        $roll_no_c = $_GET['std_roll_no'];
        $check = "SELECT * FROM `ge table` WHERE `College Roll no`='$roll_no_c'";
        $check_query = mysqli_query($con, $check);

        if (mysqli_num_rows($check_query)<1) {
            ?>
            <script>alert("Sorry this name and roll_no is not found!");</script>
            <?php
        }
        $pre = mysqli_fetch_array($check_query);
?>

    <form action="Action/Update%20Tab.php?roll_no_c=<?php echo $roll_no_c; ?>" method='POST'>
        <h1><img src="https://www.facultyplus.com/wp-content/uploads/2021/01/deshbandhu-college-logo.png" alt="Image" /> Deshbandhu College</h1>
        <fieldset class="add_form">
            <legend>--- General Elective Course Add Form ---</legend> 
            <label>
                Name<sup>*</sup>: <input type="text" name='name' value="<?php echo $pre['Name']; ?>" required/>
            </label>
            <label>
                College Roll no.<sup>*</sup>: <input type="number" name='roll_no' style="width: 55%;" value="<?php echo $pre['College Roll no']; ?>" contentEditable="false" title='roll number cannot be changed' required/>
            </label>
            <label id="rad" value="">
                <label><input type="radio" name="courseType" value="Hons" onclick='hons()'  
                <?php
                    if ($pre['Course Type'] == "Hons") {
                        echo "checked";
                    }
                ?>  
                required/> Hons </label>
                <label><input type="radio" name="courseType" value="other" onclick='other()' 
                <?php
                    if ($pre['Course Type'] == "other") {
                        echo "checked";
                    }
                ?> 
                required/> Other</label>
            </label>
            <label>
                Course<sup>*</sup>: <input type="text" name='course' value="<?php echo $pre['Course']; ?>" required/>
            </label>
            <label>
                Year/Sem<sup>*</sup>: 
                <select id="select" name='year_sem' >
                    <option value="">--choose--</option>
                    <option value="I/I" 
                    <?php 
                        if ($pre['Year/Sem']=='I/I') {
                            echo "selected";
                        }
                    ?> 
                    >I/I</option>
                    <option value="I/II" 
                    <?php 
                        if ($pre['Year/Sem']=='I/II') {
                            echo "selected";
                        }
                    ?>
                    >I/II</option>
                    <option value="II/III" 
                    <?php 
                        if ($pre['Year/Sem']=='II/III') {
                            echo "selected";
                        }
                    ?>
                    >II/III</option>
                    <option value="II/IV" 
                    <?php 
                        if ($pre['Year/Sem']=='II/IV') {
                            echo "selected";
                        }
                    ?>
                    >II/IV</option>
                    <option value="III/V" class='ct' style='display:none' 
                    <?php 
                        if ($pre['Year/Sem']=='III/V') {
                            echo "selected";
                        }
                    ?>
                    >III/V</option>
                    <option value="III/VI" class='ct' style='display:none' 
                    <?php 
                        if ($pre['Year/Sem']=='III/VI') {
                            echo "selected";
                        }
                    ?>
                    >III/VI</option>
                </select>
            </label>
            <label>
                GE Course<sup>*</sup>: 
                <input type="text" list="ge" name='ge_course' value="<?php echo $pre['GE Subject']; ?>" required/>
                <datalist id="ge">
                    <option value="English"></option>
                    <option value="Hindi"></option>
                    <option value="Maths"></option>
                    <option value="Economics"></option>
                    <option value="History"></option>
                    <option value="E.V.S."></option>
                    <option value="Zeology"></option>
                    <option value="Botany"></option>
                    <option value="Chemistry"></option>
                    <option value="Physics"></option>
                    <option value="Computer science"></option>
                    <option value="Sanskrit"></option>
                </datalist>
            </label>
            <label>
                Email<sup>*</sup>: <input type="email" name='gmail' value="<?php echo $pre['Email']; ?>" style='text-transform:none;' required/>
            </label>
            <label>
                Phone No.<sup>*</sup>: <input type="number" name='number' value="<?php echo $pre['Phone No.']; ?>" min='1000000000' max='9999999999' required/>
            </label>
            <div class="sub">
                <button type="reset">Reset</button>
                <button type="submit" name='submit'>Update</button>
            </div>
        </fieldset>
    </form>
    <script>
        var y = document.getElementsByClassName('ct');
        
        const hons = () => {
            y[0].style.display='none';
            y[1].style.display='none';
        }
        const other = () => {
            y[0].style.display='block';
            y[1].style.display='block';
        }
    </script>
</body>
</html>


