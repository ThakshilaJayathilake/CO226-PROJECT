

<!DOCTYPE html>

<html>
    <head>
        <title>HOME PAGE</title>
    </head>
    <body>
        <h1>Login is failed</h1>
       

        <?php
            session_start();
            if(!isset($_SESSION['success2'])):       
        ?>
        <div>

            <h3>  

            
                <?php foreach($_SESSION['error2'] as $error):?>
                    <p><?php echo $error ?></p>
                <?php endforeach?>


            </h3>
        </div>

        <?php  endif?>

        
     
        <button type="submit" name="login"><a href="login.php">Login</a></button>



    </body>
</html>
