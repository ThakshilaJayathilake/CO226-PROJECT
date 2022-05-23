<!DOCTYPE html>
<html>
    <head>
        <title>JOB VACANCY MANAGEMENT SYSTEM FOR GRADUATED STUDENTS</title>
        <link rel="stylesheet" type="text/css" href="stepOneStyle.css">
    </head>
    <body>
        <div class="container">

            <form id="form1" action="StudentdataOneStepF.php" method="post">           
                <h1>Student Registration Form</h1><br>
                <p>Fill this form if you are a student.</p><br><br>
                
                <h3>PERSONAL INFO</h3>
                <hr>
                <label><b>First Name:</b></label><input type="text" placeholder="Enter your first name here.." name="fname" id="fname" required><br>
                <label><b>Middle Name:</b></label><input type="text" placeholder="Enter your middle name here.." name="mname" id="mname" ><br>
                <label><b>Last Name:</b></label><input type="text" placeholder="Enter your last name here.." name="lname" id="lname" required><br>
                <label><b>StudentID:</b></label><input type="number" placeholder="Enter your StudentID here.." name="studentID" id="studentID" required ><br>
                <label><b>ContactNo:</b></label>               
                <input type="tel" placeholder="Enter your 10 digit phone number staring with 0"  id="phone" name="phone" pattern="[0-9]{10}" required><br>
                <label><b>Location:</b></label><input type="text" placeholder="Enter your location here.." name="location" id="location" required ><br>
                <br><br>



                <h3>DEGREE RELATED INFO</h3>
                <hr>
                <label><b>Degree code:</b></label><input type="text" placeholder="Enter your Degree code here.." name="degreecode" id="degreecode" required><br>
                <label><b>Degree Name:</b></label><input type="text" placeholder="Enter your Degree Name here.." name="degreename" id="degreename" required><br>
                <label><b>Class:</b></label><input type="text" placeholder="Enter your class here.." name="class" id="class" required><br>
                <label><b>Graduated year:</b></label><input type="number" placeholder="Enter your Graduated year here.." name="graduatedyear" id="graduatedyear" required><br>
                <label><b>GPA:</b></label><input type="text" placeholder="Enter your GPA here.." name="gpa" id="gpa" required><br>
                <br><br>
                          

                <h3>PREFERENCES</h3>
                <hr>
                <label><b>Talents:</b></label><input type="text" placeholder="Enter your talents here.." name="talents" id="talents" ><br>
                <label><b>Preferred Companies:</b></label><input type="text" placeholder="Enter your Preferred Companies here.." name="preferredcompanies" id="preferredcompanies" ><br>
                <label><b>Salary Expected:</b></label><input type="text" placeholder="Enter your Expected Salary here.." name="salaryexpected" id="salaryexpected" required><br><br>
                <label><b>Projects:</b></label><input type="text" placeholder="Enter your involved projects here.." name="projects" id="projects" required><br>
                <!-- <button type="submit" class="buttons" name="submitf3"><b>SUBMIT YOUR STEP </b></button> -->
                <br><br>

                <p>By submitting the form you agree to our <a href="#">Terms & Privacy</a>.</p><br>
                
                <button type="submit" class="buttons" name="submitFinal" id="submitFinal" ><b>Submit</b></button>
            </form>

        </div>



    </body>
</html>