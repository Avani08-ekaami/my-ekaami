<?php include 'include/header.php' ?>

<div class="wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-4">
          <div class="menu">
  
            <?php include 'include/sidebar.php' ?> 

          </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-8">
        
        <div class="row mt-4 mb-4">
            <div class="col-md-5">
                <h2 class="title">Home Page Video</h2>
            </div>
            <div class="col-md-7">
                <button  class="btn btn-primary" style="float: right;"><a href="home-vdo-form.php" style="text-decoration: none; color: #fff;">Add</a></button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                <!-- <table class="table border border-primary">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Video 1</th>
                            <th>Video 2</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1.</th>
                            <td>IN THE SPOTLIGHT</td>
                            <td>
                                <video autoplay="true" muted loop class="w-100">
                                    <source src="images/S1.mp4" type="video/mp4">
                                </video>
                            </td>
                            <td>
                                <video autoplay="true" muted loop class="w-100">
                                    <source src="images/S2.mp4" type="video/mp4">
                                </video>
                            </td>
                            
                            <td>
                                <button><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg></button>
                                <button><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                </svg></button>
                            </td>
                        </tr>
                    </tbody>
                </table> -->
                <?php
                            // Fetch users from the database
                            $sql = "SELECT id, title, video1, video2 FROM hvg";
                            $result = $conn->query($sql);

                            // Check if there are any users
                            if ($result->num_rows > 0) {
                         
                        echo '<table class="table table-bordered" style="border: 2px solid black;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>video1</th>
                                    <th>video2</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>';
                            while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>". $row["id"] ."</td>
                                    <td>". $row["title"] . "</td>
                                    <td><video src='pic/" . $row["video1"] . "' width='100px'></td>
                                    <td><video src='pic/" . $row["video2"] . "' width='100px'></td>
                                    <td>
                                        <a href='?edit_id=" . $row["id"] . "' class='btn btn-primary btn-sm'>Edit</a>
                                        <a href='?delete_id=" . $row["id"] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure?\");'>Delete</a>
                                    </td>
                                </tr>";
                            }
                           echo '</tbody>
                        </table>';
                    }else {
                        echo 'No record found!';  
                    }
                    ?>
            </div>
        </div>
    </div>

<!-- Edit Form -->
<?php
    if (isset($_GET['edit_id'])) {
        $edit_id = $_GET['edit_id'];
        $edit_sql = "SELECT * FROM hvg WHERE id = $edit_id";
        $edit_result = $conn->query($edit_sql);
        if ($edit_result->num_rows > 0) {
            $edit_row = $edit_result->fetch_assoc();
    ?>
            <div class="row">
    <div class="col-lg-12">
        <h3>Edit Record</h3>
        <form method="POST" action="" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $edit_row['id']; ?>">
            <input type="hidden" name="video1" value="<?php echo $edit_row['video1']; ?>">
            <input type="hidden" name="video2" value="<?php echo $edit_row['video2']; ?>">

            <div class="mb-3">
                <label class="form-label">Title:</label>
                <input type="text" name="title" class="form-control" value="<?php echo $edit_row['title']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">New Video 1 (optional):</label>
                <input type="file" name="new_video1" class="form-control" accept="pic/*">
                <?php if (!empty($edit_row['video1'])): ?>
                    <p>Current Video 1: <a href="pic/<?php echo $edit_row['video1']; ?>" target="_blank"><?php echo $edit_row['video1']; ?></a></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label class="form-label">New Video 2 (optional):</label>
                <input type="file" name="new_video2" class="form-control" accept="pic/*">
                <?php if (!empty($edit_row['video2'])): ?>
                    <p>Current Video 2: <a href="pic/<?php echo $edit_row['video2']; ?>" target="_blank"><?php echo $edit_row['video2']; ?></a></p>
                <?php endif; ?>
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
        $del_sql = "DELETE FROM hvg WHERE id = $delete_id";
        if ($conn->query($del_sql) === TRUE) {
            echo "<script>alert('Record deleted successfully!'); window.location.href='home-vdo-table.php';</script>";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

     // UPDATE RECORD
     if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
    
        // Retrieve existing video names
        $video1 = $_POST['video1']; // Existing video1 (hidden field in form)
        $video2 = $_POST['video2']; // Existing video2 (hidden field in form)
    
        // Video 1 Upload Handling
        if (!empty($_FILES['new_video1']['name'])) {
            $video1 = $_FILES['new_video1']['name'];
            $target1 = "pic/" . basename($video1);
            move_uploaded_file($_FILES['new_video1']['tmp_name'], $target1);
        }
    
        // Video 2 Upload Handling
        if (!empty($_FILES['new_video2']['name'])) {
            $video2 = $_FILES['new_video2']['name'];
            $target2 = "pic/" . basename($video2);
            move_uploaded_file($_FILES['new_video2']['tmp_name'], $target2);
        }
    
        // Update query
        $update_sql = "UPDATE hvg SET title='$title', video1='$video1', video2='$video2' WHERE id=$id";
    
        if ($conn->query($update_sql) === TRUE) {
            echo "<script>alert('Record updated successfully!'); window.location.href='home-vdo-table.php';</script>";
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
</div>