<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            session_start();
            if(!isset($_SESSION['success2'])):  
                
        ?>
        <div>

            <h1>You Have to Login to access the HOME PAGE</h1>
            
            <button type="submit" name="login"><a href="login.php">LogIn</a></button>
                
        </div>
        <?php  endif?>

        <?php
            
            if(isset($_SESSION['success2'])):  
                unset($_SESSION['success2']);     
        ?>
        <div>

            <h1>You are in HOME PAGE</h1>
            <h1>successfully Logged in! </h1> 
            <button type="submit" name="logout"><a href="login.php">LogOut</a></button>
                
        </div>
        <?php  endif?>
        

    </body>
</html>
