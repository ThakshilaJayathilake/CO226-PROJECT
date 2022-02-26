<?php

$dbcon = mysqli_connect('localhost','root','','job_vacancy_management') or die("could not connect to database");


  $sqlget="SELECT Name,AvgRating FROM company ORDER BY AvgRating DESC";
  
  $sqlget2="UPDATE company SET AvgRating =(SELECT AVG(RatingNumber) FROM rates WHERE rates.CompanyID==company.CompanyID) ";
  $sqldata = mysqli_query($dbcon,$sqlget) or die('error getting');
 
  $count=1;
  $names;
  $avg;
  foreach($sqldata as $sqldata1):
    
    $names[$count]=$sqldata1['Name'];
    $avg[$count]=$sqldata1['AvgRating'];

    $count++;
    if($count>10){
      return;
    }
  endforeach; 
 

  




?>