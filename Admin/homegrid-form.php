<?php include 'include/header.php' ?>
<?php include 'conn.php' ?>

<?php 
if (isset($_POST['Submit'])) {
    include 'conn.php'; // Database connection

    // Get form data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $descrpton = mysqli_real_escape_string($conn, htmlspecialchars($_POST['descrpton']));
    $descrpton2 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['descrpton2']));

    // File Upload Setup
    $fileName = '';

    if (isset($_FILES['file']) && $_FILES['file']['error'] === 0) {
        $uploadDirectory = 'pic/'; // Folder for storing images

        // Ensure the folder exists
        if (!is_dir($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }

        // Generate unique filename
        $randomNumber = mt_rand(1001, 9999);
        $originalFileName = basename($_FILES['file']['name']);
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $fileName = $randomNumber . "_" . time() . "." . $fileExtension;

        $fileTmpName = $_FILES['file']['tmp_name'];
        $uploadPath = $uploadDirectory . $fileName;

        // Move uploaded file
        if (move_uploaded_file($fileTmpName, $uploadPath)) {
            echo "<script>alert('File uploaded successfully.')</script>";
        } else {
            echo "<script>alert('Error uploading file.')</script>";
            $fileName = ''; // Reset fileName if upload fails
        }
    }

    // Insert into database
    $sql = "INSERT INTO hgrid (title, descrpton, descrpton2, image) VALUES ('$title', '$descrpton', '$descrpton2', '$fileName')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully!')</script>";  
        header('Location: homegrid-table.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


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
    <div class="container mt-5">
        <h2 class="text-center mb-4">Home Grid</h2>
        <div class="card">
            <div class="card-body">
            <form action="homegrid-form.php" method="POST" enctype="multipart/form-data">
    <!-- Title Input -->
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" required>
    </div>

    <!-- Description Input -->
    <div class="mb-3">
        <label for="description" class="form-label">Description - 1</label>
        <textarea class="form-control" id="description" name="descrpton" rows="4" required></textarea>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description - 2</label>
        <textarea class="form-control" id="description" name="descrpton2" rows="4" required></textarea>
    </div>

    <!-- Image Upload -->
    <div class="mb-3">
        <label for="fileUpload" class="form-label">Upload Image</label>
        <input class="form-control" name="file" type="file" id="fileUpload" accept="image/*" required>
    </div>

    <!-- Submit Button -->
    <div class="modal-footer">
        <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
    </div>
</form>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

<?php include 'include/footer.php' ?>