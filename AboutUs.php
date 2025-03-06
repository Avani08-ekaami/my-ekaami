<?php include 'include/header.php' ?>
<?php include 'include/conn.php' ?>
<!---------------- IMAGE & PARAGRAPH ---------------->
<div class="container-fluid" style="background-color: white;">
    <div class="row">
        <div class="col-lg-12">
            <!-- HERE , STARTS IMAGE & PARAGRAPH -->
            <div class="container py-5">
                <div class="row align-items-center">
                <?php
                            // Fetch users from the database
                            $sql = "SELECT title, descrpton, image FROM atu";
                            $result = $conn->query($sql);

                            // Check if there are any users
                            if ($result->num_rows > 0) { 
                                $row = $result->fetch_assoc();
                                $img = 'Admin/pic/'.$row["image"];
                                $title = $row["title"];
                                $descrpton = $row["descrpton"];
                            }
                ?>

                    <!-- Right Image -->
                    <div class="col-lg-4 col-md-12 text-center mb-3 mb-lg-0 order-lg-2">
                        <img src="<?php echo $img ?>" class="img-fluid rounded">
                    </div>
            
                    <!-- Text Content -->
                    <div class="col-lg-8 col-md-12 order-lg-1 text-center text-lg-start">
                        <h2 class="mb-4 fw-bold text-uppercase"><?php echo $title ?></h2>
                        <p>
                            <!-- At Ekaami Events, we help manage your big ideas and your smallest concerns
                            to ensure you are stress-free and enjoying every moment. For more than a decade,
                            we've been working with clients to create exceptional experiences for their nonprofit
                            fundraiser or social gathering. --> <?php echo $descrpton ?></p>
                        <p>
                        <!-- As a boutique company, we're driven by a childlike excitement for what we do and a love
                            of collaboration with our clients. It's our goal to leave you and your guests with an event
                            that exceeds expectations and lasts in your memories long after the last toast. -->
                        </p>
                        <div class="">
                        <!-- <button class="btn btn-outline-dark mt-4" >Book a Consultation</button> -->
                        <a href="Book-Consultation.php" class="btn btn-outline-dark mt-4">Book a Consultation</a>
                        </div>
                    </div>

                    
                </div>
            </div>
            <!-- HERE , ENDS IMAGE & PARAGRAPH -->
        </div>
    </div>
</div>
<!---------------- IMAGE & PARAGRAPH ---------------->

                <!--  -->
                            
                            <!-- echo "<tr>
                                    <h2>". $row["title"] . "</h2>
                                    <p>" . $row["descrpton"] . "</p>
                                    <td><img src='pic/" . $row["image"] . "' alt='' width='100px'></td>
                                    
                                 </tr>"; -->
                <!--  -->

<!---------------- ABOUT OUR TEAM MEMBERS ---------------->
<div class="container-fluid" style="background-color: white;">
    <div class="row">
        <div class="col-lg-12">
            <!-- HERE , STARTS ABOUT TEAM MEMBERS -->
            <div class="mt-5">
                <div class="row text-center">
                    <!-- Round Image -->
                    <div class="col-md-4 image-container2">
                        <img src="images/i1.jpg" class="rounded custom-rounded" alt="Round Image">
                        <div class="m-3">
                        <h3>VINEETA SINGH</h3>
                        <h6>PRESIDENT & FOUNDER</h6>
                        </div>
                    </div>
                    <!-- Circular Image -->
                    <div class="col-md-4 image-container2">
                        <img src="images/i2.jpg" class="rounded custom-rounded" alt="Circular Image">
                        <div class="m-3">
                        <h3>AMAN JAIN</h3>
                        <h6>VICE PRESIDENT</h6>
                        </div>
                    </div>
                    <!-- Thumbnail Image -->
                    <div class="col-md-4 image-container2">
                        <img src="images/i3.jpg" class="rounded custom-rounded" alt="Thumbnail Image">
                        <div class="m-3">
                        <h3>NAMITA THAPAR</h3>
                        <h6>EVENT DESIGNER & MARKETING MANAGER</h6>
                        </div>
                    </div>
                    <div class="col-md-4 image-container2">
                        <img src="images/i4.jpg" class="rounded custom-rounded" alt="Round Image">
                        <div class="m-3">
                        <h3>ANUPAM MITTAL</h3>
                        <h6>EVENT MANAGER</h6>
                        </div>
                    </div>
                    <!-- Circular Image -->
                    <div class="col-md-4 image-container2">
                        <img src="images/i5.jpg" class="rounded custom-rounded" alt="Circular Image">
                        <div class="m-3">
                        <h3>RADHIKA PANDYA</h3>
                        <h6>COMMUNICATIONS & EVENT DATA COORDINATOR</h6>
                        </div>
                    </div>
                    <!-- Thumbnail Image -->
                    <div class="col-md-4 image-container2">
                        <img src="images/i6.jpg" class="rounded custom-rounded" alt="Thumbnail Image">
                        <div class="m-3">
                        <h3>PEYUSH BANSAL</h3>
                        <h6>FINANCE MANAGER</h6>
                        </div>
                    </div>
                </div>
            </div>
             <!-- HERE , ENDS ABOUT TEAM MEMBERS -->
            </div>
        </div>
    </div>
    <div class="m-3"></div>
<!---------------- ABOUT OUR TEAM MEMBERS ---------------->
    


<!---------------- CONNECT ( GET IN TOUCH) ---------------->
<div class="connect_sec">
    <div class="container custom-section">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="content-box justify-content-center">
                    <p class="text-connect">CONNECT</p>
                    <h2 class="text-main">Let us help you<br>plan your perfect event!</h2>
                    <a href="#" class="btn btn-custom mt-4">GET IN TOUCH</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-box">
                    <img src="images/AboutUsimg.avif" alt="Event">
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="m-3"></div>
<!---------------- CONNECT ( GET IN TOUCH) ---------------->


<?php include 'include/footer.php' ?>