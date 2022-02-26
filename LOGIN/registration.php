


<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" type="text/css" href="test.css" >
        <body class="reg">
            <div class ="loginbox2">
                <img src="icon.jpg" class="avatar">
                <h1>Registration</h1>
                <form action="server.php" method="post">
                    <p>Username</p>
                    <input type="text" name="username" placeholder="Enter Username" required>
                    <p>Email</p>
                    <input type="email" name="email" placeholder="Enter email" required>
                    <p>Password</p>
                    <input type="password" name="password1" placeholder="Enter Password" required>
                    <p>Confirm Password</p>
                    <input type="password" name="password2" placeholder="Enter Password" required>
                    <input type="submit" name="register" value="Register">
                   
                    <a href="login.php">Already a user?</a>

                </form>
                
            </div>
            <a href="javascript:history.go(-1)"onMouseOver"self.status.referrer:return true"><button type="submit" class="back"> <img src="back.png" height ="50" width="50" /></button></a>
        </body>
    </head>
    <body>

    </body>



</html>




