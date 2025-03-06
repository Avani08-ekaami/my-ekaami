<?php include 'include/header.php' ?>
<?php include 'include/conn.php' ?>
<div class="mainbody">

<!-- MAIN SCREEN BIG WALLPAPER -->
<div class="container-relative">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
        <!-- HERE , START WALLPAPER -->
        <div class="Relative" style="position: relative;">
            <div class="custom-cover d-flex align-items-center justify-content-center">
                <div class="w-100 image-container-fluid">
                <img src="images/mainimg.jpg" alt="Your Image" class="imgmn">
                <div class="overlay">
                  <div class="slide-down text">
                    <b><p class="heart">Planning With Heart</p></b>
                    <hr class="my-3" style="width: 50%; margin: auto; border-color: white;">
                    <b><p >Woman-owned Event Planning Company Serving Kansas City and Beyond</p></b>
                  </div>
                </div>
                </div>
            </div>
        </div>
        <!-- HERE , ENDS WALLPAPER -->
        </div>
    </div>
</div>
</div>
<!-- MAIN SCREEN BIG WALLPAPER -->


<!-- ABOUT US  -->
<div class="container-fluid">
    <div class="row">
    <?php
        // Fetch users from the database
        $sql = "SELECT title, descrpton, descrpton2, image FROM hgrid";
        $result = $conn->query($sql);

        // Check if there are any users
        if ($result->num_rows > 0) { 
            $row = $result->fetch_assoc();
            $image = 'Admin/pic/'.$row["image"];
            $title = $row["title"];
            $descrpton = $row["descrpton"];
            $descrpton2 = $row["descrpton2"];
        }
    ?>
        <div class="col-lg-12">
<!-- HERE , STARTS ABOUT US-->
<div class="slide-down container-fluid p-0">
    <div class="row no-gutters">
        <div class="col-lg-6 d-flex align-items-center">
            <div class="text-center text-lg-left text-black p-5">
                <h1><?php echo $title ?></h1>
                <p class="lead m-3"><?php echo $descrpton ?></p>
                <p class="lead"><?php echo $descrpton2 ?></p>
                <a href="AboutUs.html" class="btn btn-outline-dark mt-4">Learn About Us</a>
            </div>
        </div>
        <div class="col-lg-6 p-5">
            <img src="<?php echo $image ?>" alt="Event Image" class="img-fluid"> 
        </div>
    </div>
</div>
<!-- HERE , ENDS ABOUT US -->
        </div>
    </div>
</div>
<!-- ABOUT US -->

<!-- WHAT WE BRING  -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
<!-- HERE , STARTS WHAT WE BRING -->
    <div class="row align-items-center">
        <!-- Image Section -->
        <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 text-center">
            <img src="images/planner.jpg" alt="Event Image" class="imgpn">
        </div>

        <!-- Text and Accordion Section -->
        <div class="col-lg-6 col-md-12">
            <h2 class="mb-4">WHAT WE BRING TO THE TABLE.. </h2>
            <div class="accordion p-4" id="eventAccordion">
                <div class="accordion-item">
                    <hr class="my-2" style="width: 100%; margin: auto; border-color: black;">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            PLANNING
                        </button>
                        <hr class="my-2" style="width: 100%; margin: auto; border-color: black;">
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#eventAccordion">
                        <div class="accordion-body">
                            "Strategic and detailed, our planning process ensures every aspect of your event is flawlessly coordinated. From Timelines, we takecare of everything so you can focus on enjoying your day."
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            DESIGN
                        </button>
                        <hr class="my-2" style="width: 100%; margin: auto; border-color: black;">
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#eventAccordion">
                        <div class="accordion-body">"With a creative eye and a passion for aesthetics, our design team brings your vision to life."Stunning visual designs to elevate the ambiance of your event.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            PRODUCTION
                        </button>
                        <hr class="my-2" style="width: 100%; margin: auto; border-color: black;">
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#eventAccordion">
                        <div class="accordion-body">
                            "Our production team transforms plans into action, managing evry detail with precision."
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            FULFILLMENT
                        </button>
                        <hr class="my-2" style="width: 100%; margin: auto; border-color: black;">
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#eventAccordion">
                        <div class="accordion-body">
                            "We go above and beyond to deliver not just a sucessful event but a memorable experience. Our team ensures that every promise is kept, leaving you and your guests delighted"
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
            <button class="btn btn-outline-dark mt-4">Learn More</button>
            </div>
        </div>
    </div>
<!-- HERE , ENDS WHAT WE BRING -->
        </div>
    </div>
</div>
<!-- WHAT WE BRING -->


<!-- VIEW GALLERY -->
<div class="container-fluid">
    <div class="row">
    <?php
                            // Fetch users from the database
                            $sql = "SELECT title, video1, video2 FROM hvg";
                            $result = $conn->query($sql);

                            // Check if there are any users
                            if ($result->num_rows > 0) { 
                                $row = $result->fetch_assoc();
                                $video1 = 'Admin/pic/'.$row["video1"];
                                $video2 = 'Admin/pic/'.$row["video2"];
                                $title = $row["title"];
                            }
                ?>
        <div class="col-lg-12">
<!-- HERE , STARTS VIEW GALLERY -->
<div class="container text-center my-5">
    <h1 class="mb-4 p-3"><?php echo $title ?></h1>
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="">
          <video src="<?php echo $video1 ?>" class="card-img-top" alt="Heart of Inclusion Gala" autoplay="true" muted loop></video>
          <div class="card-body m-3">
            <a href="#" class="btn btn-outline-dark">View Gallery</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="">
          <video src="<?php echo $video2 ?>" class="card-img-top" alt="Event Stage"  autoplay="true" muted loop></video>
          <div class="card-body m-3">
            <a href="#" class="btn btn-outline-dark">View Gallery</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- HERE , ENDS VIEW GALLERY -->
        </div>
    </div>
</div>
<!-- VIEW GALLERY -->


<!---------- REVIEW (press & Review) ---------->
<div class="col-lg-12">
             <!-- HERE , STARTS REVIEW  -->
            <div class="reviews_sec">
                 <!-- Background Image -->
                 <!-- Content Over Image -->
                <div class="container-review text-center">
                    <!-- Header -->
                    <div class="header">Press & Reviews</div>
                </div>
            </div>
            </div>
            <div class="container-fluid">
            <div class="row">
            <?php
                // Fetch users from the database
                $sql = "SELECT id, title1, date1, decrption1, an1 FROM homecardform";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    ?>
                    
                        <div class="col-md-4">
                            <div class="review-card">
                                <div class="review-date"><?php echo $row["date1"] ?></div>
                                <a href="#" class="review-link"><?php echo $row["title1"] ?></a>
                                <p class="review-text"><?php echo $row["decrption1"] ?></p>
                                <div class="review-author"><?php echo $row["an1"] ?></div>
                            </div>
                        </div>

                    <?php
                }
            ?>
            <!-- Leave a Review Button -->
            <div class="text-center">
            <a href="FeedBack.php" class="btn btn-outline-dark mt-4">Leave Feedback !</a>
            </div>
            </div>
            </div>
            </div>
            <!-- HERE , ENDS REVIEW -->
    </div>
    </div>
    </div>
<!---------- REVIEW  ---------->


<!---------- GET IN TOUCH ---------->
        <div class="container">
                <div class="row">
                    <div class="col-lg-12">
            <!-- HERE , STARTS GET IN TOUCH -->
            <div class="container-fluid">
    <div class="row form-container m-5">
        <div class="col-md-6 p-0">
            <img src="images/cheers.jpg" class="m-5 img-fluid" alt="Two hands holding champagne glasses in a toast">
        </div>
        <div class="col-md-6 form-content text-lg-left d-flex align-items-center">
            <div class="w-100">
                <h1>Get in touch</h1>
                <p>Let's Toast</p>
                <form id="contactForm">
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="text-lg-left">
                        <button type="submit" class="btn btn-primary w-40 mb-2">Submit</button>
                    </div>
                    <div class="text-lg-left">
                        <a href="Book-Consultation.php" class="btn btn-outline-secondary w-70">Book a Consultation</a>
                    </div>
                </form>
                <div id="thankYouMessage" class="text-center mt-4 d-none">
                    <p class="alert alert-success">Thank you! We will be in touch soon.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("contactForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent actual form submission
        
        // Hide the form and show the thank-you message
        document.getElementById("contactForm").classList.add("d-none");
        document.getElementById("thankYouMessage").classList.remove("d-none");
    });
</script>

            <!-- HERE , ENDS GET IN TOUCH -->
                    </div>
                </div>
        </div>
<!---------- GET IN TOUCH ---------->
</div>

<?php include 'include/footer.php' ?>

