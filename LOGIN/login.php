
<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" type="text/css" href="test.css" >
        <body>
            <div class ="loginbox">
                <img src="images.png" class="avatar">
                <h1>Login Here</h1>
                <form action="server.php" method="post">
                    <p>Username</p>
                    <input type="text" name="username" placeholder="Enter Username" required>
                    <p>Password</p>
                    <input type="password" name="password1" placeholder="Enter Password" required>
                    <input type="submit" name="login" value="Login">
                   
                    <a href="registration.php">Don't have an account?</a>

                </form>
                
            </div>
        </body>
    </head>
    <body>

    </body>



</html>
<?php
    session_start();
    if(isset($_SESSION['success'])):  
        unset($_SESSION['success']);     
?>

<?php  endif?>
