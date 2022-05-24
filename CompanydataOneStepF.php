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
    $companyID = $_POST['companyID'];
    $companyName = $_POST['companyName'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];

    // echo 
    $vacancyID = $_POST['vacancyID'];
    $jobtitle = $_POST['jobtitle'];
    $noOfVacancies = $_POST['noOfVacancies'];
    $allocatedSalary = $_POST['allocatedSalary'];
    $requirements = $_POST['requirements'];  


    $query1 = "INSERT INTO REQUIREMENT (VacancyID, Requirement) VALUES ('$vacancyID', '$requirements')";
    $run1 = mysqli_query($conn, $query1);


    // // MULTI VALUE attribute >>>>>>>>>> check
    // $query2 = "INSERT INTO TALENT (StudentID, Talent) VALUES ('$studentID', '$talents')";
    // $run2 = mysqli_query($conn, $query2);

    // // ID not given should be auto increment or any????? 
    // $query3 = "INSERT INTO LOCATION (Location) VALUES ('$location')";
    // $run3 = mysqli_query($conn, $query3);

    // $query4 = "INSERT INTO DEGREE (DegreeCode, Name, Class, GraduatedYear, GPA) VALUES ('$degreecode', '$degreename', '$class', '$graduatedyear', '$gpa')";
    // $run4 = mysqli_query($conn, $query4);

    // $query5 = "INSERT INTO project (StudentID, Project) VALUES ('$studentID', '$projects')";
    // $run5 = mysqli_query($conn, $query5);

    // $query6 = "INSERT INTO project (StudentID, Project) VALUES ('$studentID', '$projects')";
    // $run6 = mysqli_query($conn, $query6);

    // $query7 = "INSERT INTO project (StudentID, Project) VALUES ('$studentID', '$projects')";
    // $run7 = mysqli_query($conn, $query7);
    //  AND $run2 AND $run3 AND $run4 AND $run5
    if ($run1){
        echo "Form submitted successfully !";
        header('location: home.php');
    }else{
        echo "Form not submitted !";
    }
}
?>