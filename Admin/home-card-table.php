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
                        <h2 class="title">Home Cards - Table</h2>
                    </div>
                    <div class="col-md-7">
                        <button class="btn btn-primary" style="float: right;">
                            <a href="home-card-form.php" style="text-decoration: none; color: #fff;">Add</a>
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <?php
                                $sql = "SELECT id, title1, date1, decrption1, an1 FROM homecardform";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    echo '<table class="table table-bordered" style="border: 2px solid black;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th>Author Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                                    
                                    while($row = $result->fetch_assoc()) {

                                        echo "<tr>
                                                <td>". $row["id"] ."</td>
                                                <td>". $row["title1"] . "</td>
                                                <td>" . $row["date1"] . "</td>
                                                <td>" . $row["decrption1"] . "</td>
                                                <td>" . $row["an1"] . "</td>
                                                <td>
                                                    <a href='?edit_id=" . $row["id"] . "' class='btn btn-primary btn-sm'>Edit</a>
                                                    <a href='?delete_id=" . $row["id"] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure?\");'>Delete</a>
                                                </td>
                                            </tr>";
                                    }
                                    echo '</tbody></table>';
                                } else {
                                    echo '<p>No records found!</p>';
                                }
                            ?>
                        </div>
                    </div>
                </div>


<!-- Edit Form -->
<?php
    if (isset($_GET['edit_id'])) {
        $edit_id = $_GET['edit_id'];
        $edit_sql = "SELECT * FROM homecardform WHERE id = $edit_id";
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
                            <label class="form-label">Title :</label>
                            <input type="text" name="title1" class="form-control" value="<?php echo $edit_row['title1']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date :</label>
                            <input type="text" name="date1" class="form-control" value="<?php echo $edit_row['date1']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description :</label>
                            <textarea name="decrption1" class="form-control" required><?php echo $edit_row['decrption1']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Auther Name :</label>
                            <textarea name="an1" class="form-control" required><?php echo $edit_row['an1']; ?></textarea>
                        </div>
                        
                        <button type="submit" name="update" class="btn btn-success">Update</button>
                        <a href="homegrid-table.php" class="btn btn-secondary">Cancel</a>
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
        $del_sql = "DELETE FROM homecardform WHERE id = $delete_id";
        if ($conn->query($del_sql) === TRUE) {
            echo "<script>alert('Record deleted successfully!'); window.location.href='home-card-table.php';</script>";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

    // UPDATE RECORD
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $title1 = $_POST['title1'];
        $date1 = $_POST['date1'];
        $decrption1 = $_POST['decrption1'];
        $an1 = $_POST['an1'];
    
        // Update Query
        $update_sql = "UPDATE homecardform SET title1='$title1', date1='$date1', decrption1='$decrption1', an1='$an1' WHERE id=$id";
    
        if ($conn->query($update_sql) === TRUE) {
            echo "<script>alert('Record updated successfully!'); window.location.href='home-card-table.php';</script>";
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
            </div>
        </div>
    </div> 
</div>

