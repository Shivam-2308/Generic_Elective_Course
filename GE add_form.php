<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './Action/link.php' ?>
    <?php include './Action/Connection.php' ?>
    <link rel="stylesheet" href="./Action/Style.css">
    <title>Add GE Form</title>
</head>
<body bgcolor="azure">
    <form action="./Action/Add Tab.php" method='POST'>
        <h1><img src="https://www.facultyplus.com/wp-content/uploads/2021/01/deshbandhu-college-logo.png" alt="Image" /> Deshbandhu College</h1>
        <fieldset class="add_form">
            <legend>--- General Elective Course Add Form ---</legend> 
            <label>
                Name<sup>*</sup>: <input type="text" name='name' required/>
            </label>
            <label>
                College Roll no.<sup>*</sup>: <input type="number" name='roll_no' style="width: 55%;" required/>
            </label>
            <label id="rad">
                <label><input type="radio" name="course_type" value="Hons" onclick='hons()' required/> Hons </label>
                <label><input type="radio" name="course_type" value="other" onclick='other()' required/> Other</label>
            </label>
            <label>
                Course<sup>*</sup>: <input type="text" name='course' required/>
            </label>
            <label>
                Year/Sem<sup>*</sup>: 
                <select id="select" name='year_sem'>
                    <option value="">--choose--</option>
                    <option value="I/I">I/I</option>
                    <option value="I/II">I/II</option>
                    <option value="II/III">II/III</option>
                    <option value="II/IV">II/IV</option>
                    <option value="III/V" class='ct' style='display:none' >III/V</option>
                    <option value="III/VI" class='ct' style='display:none' >III/VI</option>
                </select>
            </label>
            <label>
                GE Course<sup>*</sup>: 
                <input type="text" list="ge" name='ge_course' required/>
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
                Email<sup>*</sup>: <input type="email" name='email' style='text-transform:none;' required/>
            </label>
            <label>
                Phone No.<sup>*</sup>: <input type="number" name='mobile' min='1000000000' max='9999999999' required/>
            </label>
            <div class="sub">
                <button type="reset">Reset</button>
                <button type="submit" name='submit'>Add</button>
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


