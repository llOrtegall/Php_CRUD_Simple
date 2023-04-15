<?php

include ("db.php");

    if(isset($_POST['save_user'])){
        $userName = $_POST['name'];
        $userlastName = $_POST['lastname'];
        $userEmail= $_POST['email'];
        $userAge = $_POST['age'];
    }

    $query = "INSERT INTO usuarios(NAME, LASTNAME, EMAIL, AGE) 
    VALUES ('$userName', '$userlastName', '$userEmail', '$userAge')";

    $result = mysqli_query($conn, $query);
    
    if(!$result){
        die("Query Fail");
    }else{
        $_SESSION['message'] = 'Información enviada Correctamente';
        header("Location: index.php");
    }
