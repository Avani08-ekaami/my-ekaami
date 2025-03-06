<?php include 'include/header.php'; ?>
<?php include 'conn.php'; ?>

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
                        <h2 class="title text-center">About Us TABLE</h2>
                    </div>

                    <div class="col-md-7">
                        <button class="btn bttn" style="float: right;">
                            <a href="Aboutus-form.php" style="text-decoration: none; color: #fff;">Add</a>
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <?php
                            $sql = "SELECT id, title, descrpton, image FROM atu";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                echo '<table class="table table-bordered" style="border: 2px solid black;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>';

                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                            <td>". $row["id"] . "</td>
                                            <td>". $row["title"] . "</td>
                                            <td>". $row["descrpton"] . "</td>
                                            <td><img src='pic/" . $row["image"] . "' width='100px'></td>
                                            <td>
                                                <a href='?edit_id=" . $row["id"] . "' class='btn btn-primary btn-sm'>Edit</a>
                                                <a href='?delete_id=" . $row["id"] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure?\");'>Delete</a>
                                            </td>
                                        </tr>";
                                }
                                echo '</tbody>
                                </table>';
                            } else {
                                echo 'No records found!';
                            }
                            ?>
                        </div>
                    </div>
                </div>


        <!-- Edit Form -->
        <?php
        if (isset($_GET['edit_id'])) {
            $edit_id = $_GET['edit_id'];
            $edit_sql = "SELECT * FROM atu WHERE id = $edit_id";
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
                                <label class="form-label">Title:</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $edit_row['title']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description :</label>
                                <textarea name="descrpton" class="form-control" required><?php echo $edit_row['descrpton']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Current Image:</label><br>
                                <img src='pic/<?php echo $edit_row["image"]; ?>' width='100px'><br>
                                <label class="form-label">New Image (optional):</label>
                                <input type="file" name="new_image" class="form-control">
                            </div>
                            <button type="submit" name="update" class="btn btn-success">Update</button>
                            <a href="aboutus.php" class="btn btn-secondary">Cancel</a>
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
            $del_sql = "DELETE FROM atu WHERE id = $delete_id";
            if ($conn->query($del_sql) === TRUE) {
                echo "<script>alert('Record deleted successfully!'); window.location.href='Aboutus-table.php';</script>";
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        }

        // UPDATE RECORD
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $descrpton1 = $_POST['descrpton1'];

            // Image Handling
            if (!empty($_FILES['new_image']['name'])) {
                $image = $_FILES['new_image']['name'];
                $target = "pic/" . basename($image);
                move_uploaded_file($_FILES['new_image']['tmp_name'], $target);
                $update_sql = "UPDATE atu SET title='$title', descrpton='$descrpton', image='$image' WHERE id=$id";
            } else {
                $update_sql = "UPDATE atu SET title='$title', descrpton='$descrpton' WHERE id=$id";
            }

            if ($conn->query($update_sql) === TRUE) {
                echo "<script>alert('Record updated successfully!'); window.location.href='Aboutus-table.php';</script>";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
        ?>

    </div>
</div>
</div>
</div>

<?php include 'include/footer.php'; ?>