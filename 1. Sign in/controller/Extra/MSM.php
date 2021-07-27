<?php
    session_start();

    // Si no hay mensaje que mandar
    if(empty($_SESSION['MSM'])){
        return;
    }

    // Se manda el mensaje 
    $messages = $_SESSION['MSM'];
    unset($_SESSION['MSM']);
?>

<!-- Forma de como se mostraran los mensajes -->
<p>
    <?php foreach($messages as $message): ?>
    <p> <?php echo $message; ?> </p>
    <?php endforeach; ?>
</p>