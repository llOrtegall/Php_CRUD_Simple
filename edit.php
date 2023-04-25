<?php

include("./db.php");

if(isset($_GET['ID'])){
  $id = $_GET['ID'];
  $query = "SELECT * FROM `employees` WHERE `ID` = $id";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_array($result);
    $names = $row['_NAMES'];
    $lastNames = $row['_LASTNAMES'];
    $email = $row['_EMAIL'];
    $document_id = $row['_DOCUMENT_ID'];

    echo " Nombre = $names, Apellido = $lastNames, Email =  $email, Dcoument ID = $document_id";
  }
}

?>