<?php

include("./db.php");

if (isset($_GET['ID'])) {
  $id = $_GET['ID'];
  $query = "SELECT * FROM employees WHERE ID = $id";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_array($result);
    $names = $row['_NAMES'];
    $lastNames = $row['_LASTNAMES'];
    $email = $row['_EMAIL'];
    $document_id = $row['_DOCUMENT_ID'];
  }
}

if (isset($_POST["update_user"])) {
  $id = $_GET['ID'];
  $names = $_POST['name'];
  $lastNames = $_POST['lastNames'];
  $email = $_POST['email'];
  $document_id = $_POST['document_id'];


  $query = "UPDATE employees SET 
  _NAMES='$names',
  _LASTNAMES='$lastNames',
  _DOCUMENT_ID='$document_id',
  _EMAIL='$email' WHERE ID = '$id'";

  mysqli_query($conn, $query);
  
}

?>

<?php include("includes/header.php"); ?>

<div class="d-flex flex-column m-5 p-5">

  <h5 class="text-center fw-bold fs-4">Actualizar Usuario</h5>
  <form action="edit.php?ID=<? echo $_GET['ID']; ?>" method="POST" class="fw-bold">
    <div class="form-group">
      <label class="form-label">Name</label>
      <input type="text" name="name" value="<?php echo $names ?>" class="form-control" placeholder="">
    </div>
    <div class="form-group">
      <label class="form-label">lastName</label>
      <input type="text" name="lastNames" value="<?php echo $lastNames ?>" class="form-control" placeholder="">
    </div>
    <div class="form-group">
      <label class="form-label">Email</label>
      <input type="email" name="email" value="<?php echo $email ?>" class="form-control" placeholder="example@example.com">
    </div>
    <div class="form-group mb-3">
      <label class="form-label">Document ID</label>
      <input type="text" name="document_id" value="<?php echo $document_id ?>" class="form-control" placeholder="">
    </div>
    <input type="submit" class="btn btn-success mt-3" name="update_user" value="update_user">
  </form>
</div>

<?php include("includes/footer.php"); ?>