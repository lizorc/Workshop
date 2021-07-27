<?php
    include 'Extra/BD.php';

    // Declarations
    $D = $_POST;
    $User = $D['User'];
    $Pass = $D['Pass'];

    // Insert in the Table
    $insert = "INSERT INTO Person (ID, User, Pass) VALUES (null, '$User', '$Pass')";

    if( mysqli_query($connection, $insert)){

        header('Location: ../view/Welcome.php');
        exit;

    } else {

        // Fail
        $_SESSION['MSM'][] = 'This user already exists';
        header('Location: ../view/index.php');
        exit;

    }

    $connection -> close();
?>