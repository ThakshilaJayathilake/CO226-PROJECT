<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "job_vacancy_management";

$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";

$studentID = 0;
if (isset($_POST['submitFinal'])){
    // echo 
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $studentID = $_POST['studentID'];
    $phone = $_POST['phone'];  
    $location = $_POST['location']; 

    // echo 
    $degreecode = $_POST['degreecode'];
    $degreename = $_POST['degreename'];
    $class = $_POST['class'];
    $graduatedyear = $_POST['graduatedyear'];
    $gpa = $_POST['gpa'];  

    // echo    
    $talents = $_POST['talents'];
    $preferredcompanies = $_POST['preferredcompanies'];
    $salaryexpected = $_POST['salaryexpected'];
    $projects = $_POST['projects'];
    
    $query4 = "INSERT INTO DEGREE (DegreeCode, Name, Class, GraduatedYear, GPA) VALUES ('$degreecode', '$degreename', '$class', '$graduatedyear', '$gpa')";
    $run4 = mysqli_query($conn, $query4);
    $query1 = "INSERT INTO GRADUATED_STUDENT (StudentID, FirstName, MiddleName, LastName, ContactNumber, SalaryExpected, DegreeCode) VALUES 
                ('$studentID', '$fname', '$mname', '$lname', '$phone', '$salaryexpected', '$degreecode')";
    $run1 = mysqli_query($conn, $query1);


    // MULTI VALUE attribute >>>>>>>>>> check
    $query2 = "INSERT INTO TALENT (StudentID, Talent) VALUES ('$studentID', '$talents')";
    $run2 = mysqli_query($conn, $query2);

    // ID not given should be auto increment or any????? 
    $query3 = "INSERT INTO LOCATION (Location) VALUES ('$location')";
    $run3 = mysqli_query($conn, $query3);

 

    $query5 = "INSERT INTO project (StudentID, Project) VALUES ('$studentID', '$projects')";
    $run5 = mysqli_query($conn, $query5);

    $query6 = "INSERT INTO project (StudentID, Project) VALUES ('$studentID', '$projects')";
    $run6 = mysqli_query($conn, $query6);

    $query7 = "INSERT INTO project (StudentID, Project) VALUES ('$studentID', '$projects')";
    $run7 = mysqli_query($conn, $query7);
    // 
    if ($run1 && $run2 && $run4 ){
        echo "Form submitted successfully !";
        header('location: home.php');
    }else{
        echo "Form not submitted !";
    }
}
?>