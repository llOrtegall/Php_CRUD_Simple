<?php

include "./db.php";

if (isset($_POST["update_user"])) {
  $id = $_GET['ID'];
  $names = $_POST['name'];
  $lastNames = $_POST['lastNames'];
  $email = $_POST['email'];
  $document_id = $_POST['document_id'];

  $query = "UPDATE employees SET 
  _NAMES = '$names', 
  _LASTNAMES = '$lastNames',
  _DOCUMENT_ID = '$document_id',
  _EMAIL = '$email' 
  WHERE ID='$id'";

  mysqli_query($conn, $query);
  header("Location: index.php");
}
  ?>
