<?php

include ("db.php");

    if(isset($_POST['save_user'])){
        $userName = $_POST['name'];
        $userlastName = $_POST['lastname'];
        $userEmail= $_POST['email'];
        $userDocument = $_POST['document_id'];
    }

    $query = "INSERT INTO employees(_NAMES, _LASTNAMES, _EMAIL, _DOCUMENT_ID) 
    VALUES ('$userName', '$userlastName', '$userEmail', '$userDocument')";

    $result = mysqli_query($conn, $query);
    
    if(!$result){
        die("Query Fail");
    }else{
        $_SESSION['message'] = 'Información enviada Correctamente';
        header("Location: index.php");
    }
