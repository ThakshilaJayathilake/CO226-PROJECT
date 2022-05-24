
<?php

    session_start();

    $USERNAME = "";
    $email = "";
    $category1 = "Student";
    $errors = array();
    $errors2 = array();


    $db = mysqli_connect('localhost','root','','job_vacancy_management') or die("could not connect to database");
    
    
    if( isset($_POST['register'])){
        
        $USERNAME = mysqli_real_escape_string($db,$_POST['username']) ;
        $email = mysqli_real_escape_string($db,$_POST['email']) ;
        $password1 = mysqli_real_escape_string($db,$_POST['password1']) ;
        $password2 = mysqli_real_escape_string($db,$_POST['password2']) ;

        $category =mysqli_real_escape_string($db,$_POST['category'])  ;
        
   
        
        if(empty($USERNAME)){
            array_push($errors,"Username is required");
        }
        if(empty($email)){
            array_push($errors,"Email is required");
        }
        if(empty($password1)){
            array_push($errors,"Password is required");
        }
        if($password1 != $password2){
            array_push($errors,"Passwords do not match");
        }
        
        //check existing user names
        $user_check_query = "SELECT * FROM logindetails WHERE UserName = '$USERNAME' or Email = '$email' LIMIT 1";
        $results = mysqli_query($db,$user_check_query);
        $user = mysqli_fetch_assoc($results);

        
        if($user){
            if($user['UserName'] == $USERNAME){
                array_push($errors,"Username already exists");
            }
            if($user['Email'] == $email){
                array_push($errors,"Email already exists");
            }
        }

        
        if(count($errors)==0){
            
            $password = md5($password1); //encrypting the password
            $query = "INSERT INTO logindetails (Email,UserName,Password,Category) VALUES ('$email','$USERNAME','$password','$category')";
            mysqli_query($db,$query);
            $_SESSION['username'] = $USERNAME;
            $_SESSION['success'] = "You are successfully logged in!";
            
           // header('location: login.php');
      

            if($category==$category1){
                 header('location: ../StudentOnestepForm.php');
            }
            else{
                 header('location: ../CompanyOnestepForm.php');

            }
                

        }
        else{
            $_SESSION['error'] = $errors;
            header('location: errorRegister.php');
        }
    }




    if(isset($_POST['login'])){
      
        $USERNAME = mysqli_real_escape_string($db,$_POST['username']) ;
        $password1 = mysqli_real_escape_string($db,$_POST['password1']) ;

        if(empty($USERNAME)){
            array_push($errors2,"Username is required");
        }
        if(empty($password1)){
            array_push($errors2,"Password is required");
        }
        if(count($errors2)==0){
            
            $password = md5($password1); //encrypting the password
            $query = "SELECT * FROM logindetails WHERE UserName = '$USERNAME' AND Password='$password'";
            $query2 = "SELECT Category FROM logindetails WHERE UserName = '$USERNAME' AND Password='$password'";
            $results2 = mysqli_query($db,$query);
            
            if(mysqli_num_rows($results2)){
                $_SESSION['username'] = $USERNAME;
                $_SESSION['success2'] = "You are successfully logged in!";
                echo   $query ;
                $row = mysqli_fetch_assoc($results2);
                $category2 = $row["Category"];

                $GLOBALS['z']=$GLOBALS['USERNAME'];
                $_SESSION['USERNAME'] =$USERNAME;
                function getUsername() {
                    $GLOBALS['z']=$USERNAME;
                    return $USERNAME;
                }
                

                header('location: ../profile/index.php');
                // if($category2==$category1){
                //     header('location: ../StudentOnestepForm.php');
                // }
                // else{
                //     header('location: ../CompanyOnestepForm.php');

                // }
                

            }
            else{
                array_push($errors2,"Wrong Username or Password ");
                $_SESSION['error2'] = $errors2;
                header('location: errorLogin.php');
          
            }
        }
        else{
            foreach($errors as $error):
                echo $error;
            endforeach;
        }


    }





?>

