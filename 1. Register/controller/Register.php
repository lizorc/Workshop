<?php
    include 'Extra/BD.php';
    include 'Extra/MSM.php';

    // Declarations
    $D = $_POST;
    $Name = $D['Name'];

    // Insert in the Table
    $insert = "INSERT INTO Person (ID, Name) VALUES (null, '$Name')";

    if( mysqli_query($connection, $insert)){

        $_SESSION['MSM'][] = 'This name was registered';
        header('Location: ../view/index.php');
        exit;

    } else {

        // Fail
        $_SESSION['MSM'][] = 'This name already exists';
        header('Location: ../view/index.php');
        exit;

    }

    $connection -> close();
?>