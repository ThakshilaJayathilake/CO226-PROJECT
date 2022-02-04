
<?php

    session_start();

    $username = "";
    $email = "";
    $errors = array();
    $errors2 = array();
   
/*
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password1 = $_POST["password1"];
    $password2= $_POST["password2"];
        
        
       

    $conn = new mysqli('localhost','root','','project');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);

    }
    else{

        //check existing user names
        $user_check_query = "SELECT * FROM logindetails WHERE UserName = '$username' or Email = '$email' LIMIT 1";
        $results = mysqli_query($conn,$user_check_query);
        $user = mysqli_fetch_assoc($results);

    
        if($user){
            
            if($user['UserName'] === $username){
                array_push($errors,"Username already exists");
                echo "Username already exists";
            }
            if($user['Email'] === $email){
                array_push($errors,"Email already exists");
                echo "Email already exists";
            }
        }



        if(count($errors)==0){
            $password = md5($password1); 
        $stmt = $conn->prepare("insert into logindetails(UserName,Email,Password)
        values(?,?,?)");
        
        $stmt->bind_param("sss",$username,$email,$password);
        echo "success";
        
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are successfully logged in!";

        //header('location: index.php');
        $stmt->execute();
        $stmt->close();
        header('location: login.php');
        }
        else{
            echo "unsuccess"; 
        }
        $conn->close();
    }

    if(isset($_POST['login'])){
        $username = mysqli_real_escape_string


    }


*/
    

    $db = mysqli_connect('localhost','root','','project') or die("could not connect to database");
    
    
    if( isset($_POST['register'])){
        
        $username = mysqli_real_escape_string($db,$_POST['username']) ;
        $email = mysqli_real_escape_string($db,$_POST['email']) ;
        $password1 = mysqli_real_escape_string($db,$_POST['password1']) ;
        $password2 = mysqli_real_escape_string($db,$_POST['password2']) ;
        
    //  $db = mysqli_connect('localhost','root','','project') or die("could not connect to database");

    /*  $username = $_POST['username'];
        $email = $_POST['email'] ;
        $password1 = $_POST['password1'] ;
        $password2 = $_POST['password2'] ;
        $db = mysqli_connect('localhost','root','','project') or die("could not connect to database");
        */
        
        if(empty($username)){
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
        $user_check_query = "SELECT * FROM logindetails WHERE UserName = '$username' or Email = '$email' LIMIT 1";
        $results = mysqli_query($db,$user_check_query);
        $user = mysqli_fetch_assoc($results);

        
        if($user){
            if($user['UserName'] == $username){
                array_push($errors,"Username already exists");
            }
            if($user['Email'] == $email){
                array_push($errors,"Email already exists");
            }
        }

        
        if(count($errors)==0){
            
            $password = md5($password1); //encrypting the password
            $query = "INSERT INTO logindetails (UserName,Email,Password) VALUES ('$username','$email','$password')";
            mysqli_query($db,$query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are successfully logged in!";
        
            header('location: login.php');
        }
        else{
            $_SESSION['error'] = $errors;
            header('location: errorRegister.php');
        }
    }




    if(isset($_POST['login'])){
      
        $username = mysqli_real_escape_string($db,$_POST['username']) ;
        $password1 = mysqli_real_escape_string($db,$_POST['password1']) ;

        if(empty($username)){
            array_push($errors2,"Username is required");
        }
        if(empty($password1)){
            array_push($errors2,"Password is required");
        }
        if(count($errors2)==0){
            
            $password = md5($password1); //encrypting the password
            $query = "SELECT * FROM logindetails WHERE UserName = '$username' AND Password='$password'";
            $results2 = mysqli_query($db,$query);
            
            if(mysqli_num_rows($results2)){
                $_SESSION['username'] = $username;
                $_SESSION['success2'] = "You are successfully logged in!";
                echo   $query ;
                header('location: index.php');

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

<html>
<button type="submit" name="logout"><a href="login.php">LogIn</a></button>
    </html>
