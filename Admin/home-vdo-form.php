<?php include 'include/header.php' ?>
<?php include 'conn.php' ?>

<?php 
if (isset($_POST['Submit'])) {

    // Get form data
    $title = $_POST['title'];
    
    $uploadDirectory = 'pic/'; 
    
    $video1 = '';
    $video2 = '';
    
    // Handle first video upload
    if (isset($_FILES['video1'])) {
        $randomNumber1 = mt_rand(1001, 9999);
        $video1 = $randomNumber1 . $_FILES['video1']['name']; 
        $video1TmpName = $_FILES['video1']['tmp_name'];
        $uploadPath1 = $uploadDirectory . basename($video1);

        if (move_uploaded_file($video1TmpName, $uploadPath1)) {
            echo "<script>alert('First video has been uploaded successfully.')</script>";
        } else {
            echo "<script>alert('Error uploading first video.')</script>";
        }
    }
    
    // Handle second video upload
    if (isset($_FILES['video2'])) {
        $randomNumber2 = mt_rand(1001, 9999);
        $video2 = $randomNumber2 . $_FILES['video2']['name']; 
        $video2TmpName = $_FILES['video2']['tmp_name'];
        $uploadPath2 = $uploadDirectory . basename($video2);

        if (move_uploaded_file($video2TmpName, $uploadPath2)) {
            echo "<script>alert('Second video has been uploaded successfully.')</script>";
        } else {
            echo "<script>alert('Error uploading second video.')</script>";
        }
    }

    // Insert data into database
    $sql = "INSERT INTO hvg(title, video1, video2) VALUES ('$title', '$video1', '$video2')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully!')</script>";  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirect to another page
    header('Location: home-vdo-table.php');
    exit();
}
?>
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
        <h2 class="text-center mb-4">Home Video Grid</h2>
        <div class="card">
            <div class="card-body">
                <form action="home-vdo-form.php" method="POST" enctype="multipart/form-data">
                    <!-- Title Input -->
                    <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter the title">
                    </div>

                    <!-- Image Upload -->
                    <div class="mb-3">
                    <label for="fileUpload" class="form-label">Video 1</label>
                    <input class="form-control" type="file" name="video1" id="fileUpload">
                    </div>

                    <div class="mb-3">
                    <label for="fileUpload" class="form-label">Video 2</label>
                    <input class="form-control" type="file" name="video2" id="fileUpload">
                    </div>

                    <!-- Submit Button -->
                    <div class="modal-footer">
                    <!-- <button type="submit" class="btn btn-primary"><a href="home-vdo-table.php"  style="text-decoration: none; color: #fff;">Submit</a></button> -->
                    <input type="submit" class="btn btn2" name="Submit" value="Submit">
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