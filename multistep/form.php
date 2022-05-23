<!DOCTYPE html>
<html>
    <head>
        <title>JOB VACANCY MANAGEMENT SYSTEM FOR GRADUATED STUDENTS</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">

            <form id="form1" action="data.php" method="post">           
                <h1>Student Registration Form</h1>
                <p>Fill this form if you are a student.</p>
                <h3>PERSONAL INFO</h3>
                <hr>
                <label><b>First Name:</b></label><input type="text" placeholder="Enter your first name here.." name="fname" id="fname" required><br>
                <label><b>Middle Name:</b></label><input type="text" placeholder="Enter your middle name here.." name="mname" id="mname" ><br>
                <label><b>Last Name:</b></label><input type="text" placeholder="Enter your last name here.." name="lname" id="lname" required><br>
                <label><b>StudentID:</b></label><input type="text" placeholder="Enter your StudentID here.." name="studentID" id="studentID" required ><br>
                <label><b>ContactNo:</b></label>               
                <input type="tel" placeholder="Enter your 10 digit phone number staring with 0"  id="phone" name="phone" pattern="[0-9]{10}" required><br>
                <label><b>Location:</b></label><input type="text" placeholder="Enter your location here.." name="location" id="location" required ><br>
                <button type="submit" form="form1" id="submitf1" class="buttons" name="submitf1" ><b>SUBMIT YOUR STEP </b></button>
                <button type="button" id="clickme" class="buttons" name="clickme" onclick="myFunction(next1)" ><b>click me! </b></button>
                <hr>
                <button type="button" id="next1" class="buttons" name="next" style="display: none;" ><b>Next</b></button> 
                <!-- -->
            </form>

            <form id="form2" action="data.php" method="post">           
                <h3>DEGREE RELATED INFO</h3>
                <hr>
                <label><b>Degree code:</b></label><input type="text" placeholder="Enter your Degree code here.." name="degreecode" id="degreecode" required><br>
                <label><b>Degree Name:</b></label><input type="text" placeholder="Enter your Degree Name here.." name="degreename" id="degreename" required><br>
                <label><b>Class:</b></label><input type="text" placeholder="Enter your class here.." name="class" id="class" required><br>
                <label><b>Graduated year:</b></label><input type="number" placeholder="Enter your Graduated year here.." name="graduatedyear" id="graduatedyear" required><br>
                <label><b>GPA:</b></label><input type="text" placeholder="Enter your GPA here.." name="gpa" id="gpa" required><br>
                <button type="submit" class="buttons" name="submitf2"><b>SUBMIT YOUR STEP </b></button>
                <hr>
            
                <button type="button" id="back1" class="buttons" name="back"><b>Back</b></button>
                <button type="button" id="next2" class="buttons" name="next"><b>Next</b></button>
            </form>

            <form id="form3" action="data.php" method="post">           
                <h3>PREFERENCES</h3>
                <hr>
                <label><b>Talents:</b></label><input type="text" placeholder="Enter your talents here.." name="talents" id="talents" ><br>
                <label><b>Preferred Companies:</b></label><input type="text" placeholder="Enter your Preferred Companies here.." name="preferredcompanies" id="preferredcompanies" ><br>
                <label><b>Salary Expected:</b></label><input type="text" placeholder="Enter your Expected Salary here.." name="salaryexpected" id="salaryexpected" required><br><br>
                <label><b>Projects:</b></label><input type="text" placeholder="Enter your involved projects here.." name="projects" id="projects" required><br>
                <!-- <button type="submit" class="buttons" name="submitf3"><b>SUBMIT YOUR STEP </b></button> -->
                <hr>

                <p>By submitting the form you agree to our <a href="#">Terms & Privacy</a>.</p>
                <button type="button" id="back2" class="buttons" name="back"><b>Back</b></button>
                <button type="submit" class="buttons" name="submitFinal" id="submitFinal" ><b>Submit</b></button>
            </form>

            <dvi class="step-row">
                <div id="progress"></div>
                <div class="step-col"><small><b>Step 1</b></small></div>
                <div class="step-col"><small><b>Step 2</b></small></div>
                <div class="step-col"><small><b>Step 3</b></small></div>
            </dvi>
        </div>

    <script>
        function myFunction(id) {

            id.style.display = "block";

        }
    </script>

    <script>
        var form1 = document.getElementById("form1");
        var form2 = document.getElementById("form2");
        var form3 = document.getElementById("form3");
        var next1 = document.getElementById("next1");
        var next2 = document.getElementById("next2");
        var back1 = document.getElementById("back1");
        var back2 = document.getElementById("back2");
        var progress = document.getElementById("progress");

        // var emptyfname = document.forms["form1"]["fname"].value;
        // var emptymname = document.forms["form1"]["mname"].value;
        // var emptylname = document.forms["form1"]["lname"].value;
        // var emptystudentID = document.forms["form1"]["studentID"].value;
        // var empty = document.forms["form1"]["fname"].value;
        // var empty = document.forms["form1"]["fname"].value;

    
        next1.onclick = function(){
            form1.style.left = "-850px";
            form2.style.left = "30px";
            progress.style.width = "440px";
        
        }

        
        back1.onclick = function(){
            form1.style.left = "30px";
            form2.style.left = "850px";
            progress.style.width = "220px";
        }

        next2.onclick = function(){
            form2.style.left = "-850px";
            form3.style.left = "30px";
            progress.style.width = "660px";
        }

        back2.onclick = function(){
            form2.style.left = "30px";
            form3.style.left = "850px";
            progress.style.width = "440px";
        }
    </script>
    </body>
</html>