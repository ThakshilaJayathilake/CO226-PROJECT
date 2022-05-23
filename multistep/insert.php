<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "job_vacancy_management";

$conn = mysqli_connect($server, $username, $password, $dbname);

// first check if final submit button is pressed..................
if (isset($_POST['submit'])){

    //check if the form3 required fields were filled
    if (!empty($_POST['salaryexpected']) or !empty($_POST['projects'])){
        // $name = $_POST['name'];
        // $email = $_POST['email'];
        // $age = $_POST['age'];
        // If they filled get them to variables
        $talents = $_POST['talents'];
        $preferredcompanies = $_POST['preferredcompanies'];
        $salaryexpected = $_POST['salaryexpected'];
        $projects = $_POST['projects'];

        // if only form3 done,check if submitf2 button is pressed..............
        if (isset($_POST['submitf2'])){

            //check if the form2 required fields were filled
            if (!empty($_POST['degreecode']) or !empty($_POST['degreename']) or!empty($_POST['class']) or
            !empty($_POST['graduatedyear']) or!empty($_POST['gpa'])){
                // If they filled get them to variables
                $degreecode = $_POST['degreecode'];
                $degreename = $_POST['degreename'];
                $class = $_POST['class'];
                $graduatedyear = $_POST['graduatedyear'];
                $gpa = $_POST['gpa'];

                // if only form2 done,check if submitf1 button is pressed...............
                if (isset($_POST['submitf1'])){

                    //check if the form1 required fields were filled
                    if (!empty($_POST['fname']) or !empty($_POST['lname']) or!empty($_POST['studentID']) or
                        !empty($_POST['phone']) or!empty($_POST['location'])){
                        // If they filled get them to variables
                        $fname = $_POST['fname'];
                        $mname = $_POST['mname'];
                        $lname = $_POST['lname'];
                        $studentID = $_POST['studentID'];
                        $phone = $_POST['phone'];  
                        $location = $_POST['location'];  
                                                  
                        $query = "INSERT INTO project (StudentID, Project) VALUES ('$studentID', '$projects')";
                        $run = mysqli_query($conn, $query);

                        if ($run){
                            echo "Form submitted successfully !";
                        }else{
                            echo "Form not submitted !";
                        }
                
                    }else{
                        echo "Please fill all the required fields in step 1!";
                    }
                }
            }else{
                echo "Please fill all the required fields in step 2!";
            }
        }
    }else{
        echo "Please fill all the required fields in step 3!";
    }
}
?>