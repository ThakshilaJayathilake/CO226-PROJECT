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

$studentID = 12345;
$projects = "dummy";
if (isset($_POST['submitf1'])){
    // echo 
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $studentID = $_POST['studentID'];
    $phone = $_POST['phone'];  
    $location = $_POST['location']; 
}   

if (isset($_POST['submitf2'])){
    // echo 
    $degreecode = $_POST['degreecode'];
    $degreename = $_POST['degreename'];
    $class = $_POST['class'];
    $graduatedyear = $_POST['graduatedyear'];
    $gpa = $_POST['gpa'];  
} 
   
// first check if final submit button is pressed..................
if (isset($_POST['submitFinal'])){
    // echo    
    $talents = $_POST['talents'];
    $preferredcompanies = $_POST['preferredcompanies'];
    $salaryexpected = $_POST['salaryexpected'];
    $projects = $_POST['projects'];
    
    $query = "INSERT INTO project (StudentID, Project) VALUES ('$studentID', '$projects')";
    $run = mysqli_query($conn, $query);

    if ($run){
        echo "Form submitted successfully !";
    }else{
        echo "Form not submitted !";
    }
}

    // $query = "INSERT INTO project (StudentID, Project) VALUES ('$studentID', '$projects')";
    // $run = mysqli_query($conn, $query);

    // if ($run){
    //     echo "Form submitted successfully !";
    // }else{
    //     echo "Form not submitted !";
    // }

?>