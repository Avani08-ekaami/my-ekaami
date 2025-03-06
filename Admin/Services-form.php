<?php include 'include/header.php' ?>
<?php include 'conn.php' ?>

<?php 
  if (isset($_POST['Submit'])) {

    // Get form data
    $title1 = $_POST['title1'];
    $d1 = htmlspecialchars($_POST['d1']);
   
    $fileName = '';

    if (isset($_FILES['file'])) {
        $uploadDirectory = 'pic/'; 

        $randomNumber = mt_rand(1001, 9999);
        $fileName = $randomNumber . $_FILES['file']['name']; 
        $fileTmpName = $_FILES['file']['tmp_name'];

        $uploadPath = $uploadDirectory . basename($fileName);

        if (move_uploaded_file($fileTmpName, $uploadPath)) {
            echo "<script>alert('File has been uploaded successfully.')</script>";
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
        }
    } else {
        echo "<script>alert('No file was uploaded or there was an error with the file.')</script>";
    }

    $sql = "INSERT INTO servicegrid1(title1, d1, image) VALUES('$title1' , '$d1' , '$fileName')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully!')</script>";  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirect to another page
    header('Location: Services-table.php');

    // Reset form fields
    $title = "";
    $d1 = "";
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
        <h2 class="text-center mb-4">Service Grid - Form</h2>
        <div class="card">
            <div class="card-body">
                <form action="Services-form.php" method="POST" enctype="multipart/form-data">
                   <!-- 1 -->
                    <!-- Title Input -->
                    <h2 class="text-center mb-4">section1</h2>
                    <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title1" id="title" placeholder="Enter the title">
                    </div>

                    <!-- Sub Title & Description Input -->
                    <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="d1" rows="4" placeholder="Enter description"></textarea>
                    </div>

                    <!-- Image Upload -->
                    <div class="mb-3">
                    <label for="fileUpload" class="form-label">Upload Image</label>
                    <input class="form-control" type="file" name="file" id="fileUpload">
                    </div>

                    <!-- Submit Button -->
                    <div class="modal-footer">
                    <input type="Submit" class="btn btn2" name="Submit" value="Submit">
                    <!-- <button type="submit" class="btn btn-primary"><a href="Services-table.php"  style="text-decoration: none; color: #fff;">Submit</a></button> -->
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
</div>

<?php include 'include/footer.php' ?>