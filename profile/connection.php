<?php

    $servername = "localhost";
    $database = "Job_Vacancy_Management";
    $username = "root";
    $password = "";

    $StudentID = 966672212;

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_errno());
    }

    $query = "SELECT S.FirstName,S.MiddleName,S.LastName,S.ContactNumber,S.SalaryExpected,D.Name,D.Class,D.GraduatedYear,D.GPA,A.AboutMe,A.ImgName FROM GRADUATED_STUDENT S, DEGREE D, ABOUT A WHERE S.DegreeCode = D.DegreeCode AND S.StudentID = " . $StudentID . " AND A.StudentID = " . $StudentID;
    $result = mysqli_query($conn, $query);
    $arr = mysqli_fetch_assoc($result);
    mysqli_free_result($result);

    $Fname = $arr['FirstName'];
    $Mname = $arr['MiddleName'];
    $Lname = $arr['LastName'];
    $Contact = $arr['ContactNumber'];
    $Salary = $arr['SalaryExpected'];
    $DegreeName = $arr['Name'];
    $DegreeeClass = $arr['Class'];
    $DegreeGYear = $arr['GraduatedYear'];
    $DegreeGPA = $arr['GPA'];
    $AboutMe = $arr['AboutMe'];
    $ImgName = $arr['ImgName'];

    // mysqli_close($conn);

?>