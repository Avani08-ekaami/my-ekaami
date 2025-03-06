<?php include 'include/header.php' ?>
<?php include 'conn.php' ?>

<?php 
  if (isset($_POST['Submit'])) {

    // Get form data
    $title1 = $_POST['title1'];
    $sb1 = $_POST['sb1'];

    $sql = "INSERT INTO servicegrid2(title1, sb1) 
            VALUES ('$title1', '$sb1')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully!')</script>";  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirect to another page
    header('Location: Service-Cards-table.php');

    // Reset form fields
    $title1 = "";
    $sb1 = "";
   }
?>

<!--  -->

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
        <h2 class="text-center mb-4">service (Grid)</h2>
        <div class="card">
            <div class="card-body">
                <form action="Service-Cards-form.php" method="POST">
                    <!-- card -->
                    <h2 class="text-center mb-4">card-1</h2>
                    <div class="card">
                        <div class="card-body">
                            
                                
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title1" id="title" placeholder="Enter the title">
                        </div>

                        

                    <div class="mb-3">
                            <label for="title" class="form-label">Sub_Title</label>
                            <input type="text" class="form-control" name="sb1" id="title" placeholder="Enter the title">
                        </div>
                   
                </div>
                </div><br>
                    <div class="modal-footer">
                    <input type="Submit" class="btn btn2" name="Submit" value="Submit">
                    <!-- <button type="submit" class="btn btn-primary"><a href="Service-Cards-table.php"  style="text-decoration: none; color: #fff;">Submit</a></button> -->
                    </div>
                </div>
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