<?php include("db.php"); ?>

<!-- header -->
<?php include("includes/header.php"); ?>


<div class="container">

    <div class="row border">

        <div class="col-4 border">
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-success alert-dismissible fade show mt-3" tabindex="-1" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong> <?= $_SESSION['message'] ?> </strong>
                </div>
            <?php }
            session_unset(); ?>
            <div class="container mt-5">
                <h5 class="text-center mb-3 fw-bold fs-4">Agregar Usuario</h5>
                <form action="save_user.php" method="POST" class="fw-bold">
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" id="" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="form-label">lastName</label>
                        <input type="text" name="lastname" id="" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" id="" class="form-control" placeholder="example@example.com">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Age</label>
                        <input type="text" name="age" id="" class="form-control" placeholder="">
                    </div>
                    <input type="submit" class="btn btn-success mt-3" name="save_user" value=" Agregar Usuario">
                </form>
            </div>
        </div>

        <div class="col-8">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Edad</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM usuarios";
                    $result_user = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result_user)) { ?>
                        <tr class="text-center border-end">
                            <td class="fw-bold"><?php echo $row['ID'] ?></td>
                            <td><?php echo $row['NAME'] ?></td>
                            <td><?php echo $row['LASTNAME'] ?></td>
                            <td><?php echo $row['EMAIL'] ?></td>
                            <td><?php echo $row['AGE'] ?></td>
                            <td class="d-flex justify-content-around align-items-center text-center">
                                <a class="link-underline-light fw-bold" style="--bs-link-hover-color-rgb: 0, 200, 0;" href="edit.php?ID=<?php echo $row['ID'] ?>">
                                    Edit
                                    <span class="material-symbols-outlined d-flex justify-content-around align-items-center text-center">
                                        edit
                                    </span>
                                </a>
                                <a class="link-underline-light fw-bold" style="--bs-link-hover-color-rgb: 255, 55, 55;" href="delete_user.php?ID=<?php echo $row['ID'] ?>">
                                    Delete
                                    <span class="material-symbols-outlined d-flex justify-content-around align-items-center text-center">
                                        delete
                                    </span>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include("includes/footer.php"); ?>