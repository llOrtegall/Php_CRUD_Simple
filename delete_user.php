<?php
include("db.php");

if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];
    $query = "DELETE FROM php_mysql_crud WHERE ID = $ID";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed");
    } else {
        $_SESSION['message'] = 'Información Eliminada Correctamente';
        header("Location: index.php");
    }
}

?>