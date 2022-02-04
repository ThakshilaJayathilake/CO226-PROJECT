

<!DOCTYPE html>

<html>
    <head>
        <title>HOME PAGE</title>
    </head>
    <body>
        <h1>Registration is failed</h1>
       

        <?php
            session_start();
            if(!isset($_SESSION['success'])):       
        ?>
        <div>

            <h3>  

            
                <?php foreach($_SESSION['error'] as $error):?>
                    <p><?php echo $error ?></p>
                <?php endforeach?>


            </h3>
        </div>

        <?php  endif?>

        
     
        <button type="submit" name="register"><a href="registration.php">Register</a></button>



    </body>
</html>
