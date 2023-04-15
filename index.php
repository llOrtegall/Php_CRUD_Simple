<?php include("db.php"); ?>

<!-- header -->
<?php include("includes/header.php"); ?>


<div class="row container-fluid border">
    <div class="col-4">

        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-success alert-dismissible fade show" tabindex="-1" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong> <?= $_SESSION['message'] ?> </strong>
            </div>
        <?php }
        session_unset(); ?>
        <form action="save_user.php" method="POST">
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
                <input type="email" name="email" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label class="form-label">Age</label>
                <input type="text" name="age" id="" class="form-control" placeholder="">
            </div>
            <input type="submit" class="btn btn-success" name="save_user" value=" Send Data">
        </form>
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

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Footer -->
<?php include("includes/footer.php"); ?>