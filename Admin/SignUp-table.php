<?php include 'include/header.php'; ?>

<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="menu">
                    <?php include 'include/sidebar.php'; ?>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-8">
                <div class="row mt-4 mb-4">
                    <div class="col-md-5">
                        <h2 class="title text-center">Sign Up Form-Table</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <?php
                            // Fetch users from the database
                            $sql = "SELECT id, name, email, pnumber FROM signup";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                echo '<table class="table table-bordered" style="border: 2px solid black;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Full Name</th>
                                            <th>Email ID</th>
                                            <th>Phone Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>';

                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                           
                                            <td>". $row["id"] . "</td>
                                            <td>". $row["name"] . "</td>
                                            <td> ". $row["email"] . "</td>
                                            <td> ". $row["pnumber"] . "</td>
                                            <td>
                                                <a href='?edit_id=" . $row["id"] . "' class='btn btn-primary btn-sm'>Edit</a>
                                                <a href='?delete_id=" . $row["id"] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure?\");'>Delete</a>
                                            </td>
                                        </tr>";
                                }

                                echo '</tbody></table>';
                            } else {
                                echo '<p class="text-center">No record found!</p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>


<!-- Edit Form -->
<?php
    if (isset($_GET['edit_id'])) {
        $edit_id = $_GET['edit_id'];
        $edit_sql = "SELECT * FROM signup WHERE id = $edit_id";
        $edit_result = $conn->query($edit_sql);
        if ($edit_result->num_rows > 0) {
            $edit_row = $edit_result->fetch_assoc();
    ?>
            <div class="row">
                <div class="col-lg-12">
                    <h3>Edit Record</h3>
                    <form method="POST" action="" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $edit_row['id']; ?>">
                        <div class="mb-3">
                            <label class="form-label">Name:</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $edit_row['name']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">E-mail:</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $edit_row['email']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone number :</label>
                            <input type="number" name="pnumber" class="form-control" value="<?php echo $edit_row['pnumber']; ?>" required>
                        </div>
                        <button type="submit" name="update" class="btn btn-success">Update</button>
                        <a href="SignUp-table.php" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
    <?php
        }
    }
    ?>

    <?php
    // DELETE RECORD
    if (isset($_GET['delete_id'])) {
        $delete_id = $_GET['delete_id'];
        $del_sql = "DELETE FROM signup WHERE id = $delete_id";
        if ($conn->query($del_sql) === TRUE) {
            echo "<script>alert('Record deleted successfully!'); window.location.href='SignUp-table.php';</script>";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

    // UPDATE RECORD
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pnumber = $_POST['pnumber'];
    
        // Update Query
        $update_sql = "UPDATE signup SET name='$name', email='$email', pnumber='$pnumber' WHERE id=$id";
    
        if ($conn->query($update_sql) === TRUE) {
            echo "<script>alert('Record updated successfully!'); window.location.href='SignUp-table.php';</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }    
    ?>

<?php include 'include/footer.php' ?>
</div>
</div>
</div>


<?php include 'include/footer.php' ?>
