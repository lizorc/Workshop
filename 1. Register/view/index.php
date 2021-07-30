<!DOCTYPE html>
<html lan = "en">
    <head>
        <meta charset="UTF-8">
        <title> Sign in </title>
    </head>

    <body>

        <div class = "Box-White">
            <form action = "../controller/Register.php" method = "POST">

                <div class = "Text" > Insert the Name </div>
                <input type = "text" name = "Name" required/>

                <div>
                    <input class = "submit" type = "submit" value = "Register"/>
                </div>

                <div>
                            <?php include '../controller/Extra/MSM.php'; ?>
                </div>

            </form>
        </div>

    </body>

</html>