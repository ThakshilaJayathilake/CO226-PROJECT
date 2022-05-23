<!DOCTYPE html>
<html>
    <head>
        <title>JOB VACANCY MANAGEMENT SYSTEM FOR GRADUATED STUDENTS</title>
        <link rel="stylesheet" type="text/css" href="stepOneStyle.css">
    </head>
    <body>
        <div class="container">

            <form id="form1" action="CompanydataOneStepF.php" method="post">           
                <h1>Company Registration Form</h1><br>
                <p>Fill this form if want to register your company.</p><br><br>

                <h3>COMPANY INFO</h3>
                <hr>
                <label><b>CompanyID:</b></label><input type="number" placeholder="Enter the registered ID of your company here.." name="companyID" id="companyID" required ><br>
                <label><b>Company Name:</b></label><input type="text" placeholder="Enter your company's legal name here.." name="companyName" id="companyName" required><br>
                <label><b>ContactNo:</b></label>               
                <input type="tel" placeholder="Enter the companyt phone number here staring with 0"  id="phone" name="phone" pattern="[0-9]{10}" required><br>
                <label><b>Location:</b></label><input type="text" placeholder="Enter company location here.." name="location" id="location" required ><br>
                <br><br>



                <h3>VACANY INFO</h3>
                <hr>
                <label><b>VacancyID:</b></label><input type="number" placeholder="Enter the ID of the vacancy here.." name="vacancyID" id="vacancyID" required ><br>
                <label><b>Job Title:</b></label><input type="text" placeholder="Enter the title of the job here.." name="jobtitle" id="jobtitle" required><br>
                <label><b>Number of Vacancies:</b></label><input type="text" placeholder="Enter available number of vacancies here.." name="noOfVacancies" id="noOfVacancies" required ><br>
                <label><b>Allocated Salary:</b></label><input type="number" placeholder="Enter the allocated salary for the vacancy here.." name="allocatedSalary" id="allocatedSalary" required ><br>
                <label><b>Requirements / Skills:</b></label><input type="text" placeholder="Enter expected requirements for the job here.." name="requirements" id="requirements" required><br>
                <br><br>
                          


                <p>By submitting the form you agree to our <a href="#">Terms & Privacy</a>.</p><br>
                
                <button type="submit" class="buttons" name="submitFinal" id="submitFinal" ><b>Submit</b></button>
            </form>

        </div>



    </body>
</html>