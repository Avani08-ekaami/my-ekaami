<?php include 'include/conn.php' ?>

<?php 
  if (isset($_POST['Submit'])) {

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];    

    $sql = "INSERT INTO contactus(name, email, phone, msg) 
            VALUES ('$name', '$email', '$phone', '$msg')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully!')</script>";  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirect to another page
    header('Location: index.php');

    // Reset form fields
    $name = "";
    $email = "";
    $phone = "";
    $msg = "";
}
?>

<?php include 'include/header.php' ?>
<!---------------- MAIN BODY THINGS ---------------->
<!-- FOR STARTING BIG PAGE -->
        <div class="Mainbigimg">
            <div class="col-md-12">
                <div class="image-containerie">
                    <img src="images/meetContactus.jpg" alt="Background Image">
                    <div class="overlayy"></div>
                </div>
            </div>
        </div>
<!-- !! FOR ( END ) STARTING BIG PAGE !! -->

<!-- FOR HEADING -->
        <div class="justtext">
            <div class="col-md-12">
                <div class="m-4 text-center">
                    <div class="contact-textt">Contact Us Today !</div>
                </div>
            </div>
        </div>
<!-- !! FOR ( END ) HEADING !! -->

<!-- CONTACT US FORM -->
        <div class="contactusform">
            <div class="col-md-12">
                <div class="container mt-4">
                    <div class="container-box">
                        <!-- Contact Section (Left) -->
                        <div class="contact-section">
                            <div class="m-3 p-3">
                            <h4>Our Office</h4>
                            <p>123 Fifth Avenue, New York, NY 10160, USA</p>
                            </div>
                
                            <div class="m-3 p-3">
                            <h5>Contact us</h5>
                            <p>Email: contact@info.com<br>
                               Phone: 929-242-6868</p>
                            </div>
                
                            <div class="m-3 p-3">
                            <h5>Social Media</h5>
                            <div class="socialy-icons">
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-google"></i></a>
                            </div>
                            </div>
                        </div>
                
                        <!-- Form Section (Right) -->
                        <div class="form-section">
                            <h4 class="m-4 p-5">Start Plan Your Events With - Ekaami Events</h4>
                            <div class="m-4"></div>
                            <form action="ContactUs.php" method="POST">
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="text" class="form-control" name="name" placeholder="First Name">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="name" placeholder="Last Name">
                                    </div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone">
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" rows="3" name="msg" placeholder="Message"></textarea>
                                    </div>
                                    <input type="Submit" class="btn btn-outline-dark mt-4" name="Submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- !! CONTACT US FORM !! -->

<!-- MAP -->
<div class="map_m">
<div class="col-md-12">
<div class="container-fluid mt-3">
    <div class="map-container">
        <img src="images/map.png" alt="Google Map" class="map-image">
        <a href="https://www.google.co.in/maps/@22.3141836,73.1587416,18.2z?entry=ttu&g_ep=EgoyMDI1MDEyOS4xIKXMDSoASAFQAw%3D%3D" target="_blank" class="overlay-link">View larger map</a>
    </div>
</div>
</div>
</div>
<!-- !! MAP FINISH !! -->
<!---------------- MAIN BODY THINGS ---------------->


<?php include 'include/footer.php' ?>