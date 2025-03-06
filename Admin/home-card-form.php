<?php include 'include/header.php' ?>
<?php include 'conn.php' ?>

<?php 
  if (isset($_POST['Submit'])) {

    // Get form data
    $title1 = $_POST['title1'];
    $date1 = $_POST['date1'];
    $decrption1 = $_POST['decrption1'];
    $an1 = $_POST['an1'];

    $sql = "INSERT INTO homecardform(title1, date1, decrption1, an1) 
            VALUES ('$title1', '$date1', '$decrption1' , '$an1')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully!')</script>";  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirect to another page
    header('Location: home-card-table.php');

    // Reset form fields
    $title1 = "";
    $date1 = "";
    $decrption1 = "";
    $an1 = "";
    }
?>
<!-- 
  -->
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
        <h2 class="text-center mb-4">Home - Card</h2>
        <div class="card">
            <div class="card-body">
                <form action="home-card-form.php" method="POST">
                    <!-- card -->
                    <h1 class="text-center mb-4">Press & Review</h2>
                    <div class="card">
                        <div class="card-body">
                        
                        
                        <h2 class="text-center mb-4">card-1</h2>
                        <div class="mb-3">
                            <label for="title" class="form-label">Sub_Title-1</label>
                            <input type="text" class="form-control" name="title1" id="title" placeholder="Enter the title">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title_Date-1</label>
                            <input type="text" class="form-control" name="date1" id="title" placeholder="Enter the title">
                        </div>
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">Description-1</label>
                            <input type="text" class="form-control" name="decrption1" id="title" placeholder="Enter the title">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Auther_Name-1</label>
                            <textarea class="form-control" name="an1" id="description" rows="4" placeholder="Enter description"></textarea>
                        </div>
                    
                        <div class="modal-footer">
                            <input type="Submit" class="btn btn2" name="Submit" value="Submit">  
                        </div>
                </div>
                </div>
            </form>
    </div>
    </div>
    </div>
    </div>

<?php include 'include/footer.php' ?>
