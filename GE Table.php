<?php include './Action/Connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './Action/link.php' ?>
    <title>GE Table</title>
</head>
<body>
<style>
    #fc {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-style: oblique;
        width: 80%;
        margin: 0 auto;
	    border: 3px dashed forestgreen;
    }    
	#fc caption {
        font-family: cursive;
        font-size: 25px;
        color: forestgreen;
        margin: 1rem 0 2rem;
	}
    #fc thead th {
        text-align: center;
        background-color: yellowgreen;
        color: #ffffff;
        padding: 7px;
        border: 2px solid forestgreen;
    }
	#fc tbody tr th:last-child	{
	    text-align: center;
	    padding: 5px;
	    border: 2px dotted forestgreen;
	}
    #fc td {
        text-align: center;
        border: 2px solid forestgreen;
        padding: 5px;
        color: black;
    }
    #fc tr:nth-child(even) { 
        background-color: greenyellow;
    }
	#fc tr:nth-child(odd) {
	    background-color: white;
	}
    </style>

    <table id="fc" cellspacing="20px" >
			<caption>General Elective Table</caption>
        <thead>
			<tr>
                <th>Name</th>
                <th>College Roll No.</th>
                <th title='Hons/Other'>Course Type</th>
                <th>Course</th>
                <th>Year/Semester</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>GE Subject</th>
                <th colspan='2'>Operation</th>
            </tr>
        </thead>
        <tbody>

            <?php 
                $table_query = "SELECT * FROM `ge table`";
                $table = mysqli_query($con, $table_query);
                while ($tab = mysqli_fetch_array($table) ) {
                    ?>
                    <tr>
                        <td><?php echo $tab['Name'] ?></td>
                        <td><?php echo $tab['College Roll no'] ?></td>
                        <td><?php echo $tab['Course Type'] ?></td>
                        <td><?php echo $tab['Course'] ?></td>
                        <td><?php echo $tab['Year/Sem'] ?></td>
                        <td><?php echo $tab['Email'] ?></td>
                        <td><?php echo $tab['Phone No.'] ?></td>
                        <td><?php echo $tab['GE Subject'] ?></td>
                        <td><a href="GE%20update_form.php?std_roll_no=<?php echo $tab['College Roll no']; ?>" target='_blank' style='color:limegreen;' >Update</a></td>
                        <td><a href="./Action/Delete%20Table.php?roll_no=<?php echo $tab['College Roll no']; ?>" style='color:red;' >Delete</a></td>
                    </tr>
                    <?php
                }

            ?>
        </tbody>
    </table><br ><br />

</body>
</html>