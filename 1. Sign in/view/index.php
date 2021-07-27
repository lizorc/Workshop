<!DOCTYPE html>
<html lan = "en">
    <head>
        <meta charset="UTF-8">
        <title> Sign in </title>
    </head>

    <body>

        <form action = "../controller/Register.php" method = "POST">

            <label> User: </label>
            <input type = "text" name = "User" required/>

            <label> Password: </label>
            <input type = "password" name = "Pass" required/>

            <input class = "submit" type = "submit" value = "Register"/>

            <div>
                        <?php include '../controller/Extra/MSM.php'; ?>
            </div>

        </form>

    </body>

</html>