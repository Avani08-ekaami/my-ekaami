<?php include 'include/header.php' ?>
<?php include 'include/conn.php' ?>
<div class="mainbody">

<!-- Container 1 -->
<div class="container my-5">
    <div class="row align-items-center">
                <?php
                            // Fetch users from the database
                            $sql = "SELECT title1, d1, image FROM servicegrid1";
                            $result = $conn->query($sql);
                            $i = 1;
                            while($row = $result->fetch_assoc()) {
                                if($i%2){
                ?>

        <div class="col-md-6">
            <img src="admin/pic/<?php echo $row["image"] ?>" class="img-fluid rounded" alt="Wedding Decoration">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold"><?php echo $row["title1"] ?></h2>
            <p><?php echo $row["d1"] ?>
                <!-- Every bride dreams of having the perfect wedding, but planning that can be quite a task. 
                Throw in all of the cultural nuances associated with ethnic weddings, and the task can become overwhelming. 
                We work directly with you and your families to handle all aspects of your wedding. 
                The result is an extraordinary event that is just as you envisioned. -->
            </p>
            <div class="mb-3">
                <a href="Wedding-Events.html" class="btn btn-outline-dark mt-4">VIEW GALLERY</a>
            </div>
        </div>
<?php } else{ ?>
    <div class="col-md-6">
            <h2 class="fw-bold"><?php echo $row["title1"] ?></h2>
            <p><?php echo $row["d1"] ?>
                <!-- Thailand, Bali, Dubai, Udaipur, Malaysiaare just a few of the locations around the world where we have planned
                 Destination Weddings and Events. We work directly with you to discover the perfect location and to ensure that 
                 all the details are in place for your big day. Our offices are located in the Thailand &Portland but our planning
                  takes us all over the world. -->
            </p>
            <div class="mb-3">
                <a href="Wedding-Events.html" class="btn btn-outline-dark mt-4">VIEW GALLERY</a>
            </div>
        </div>
        <div class="col-md-6">
        <img src="admin/pic/<?php echo $row["image"] ?>" class="img-fluid rounded" alt="Wedding Decoration">
        </div>
    <?php
}
    $i++;
        }
    ?>
    </div>
</div>



<!-- Container 2 -->
<!-- <div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2 class="fw-bold">CORPORATE EVENTS</h2>
            <p>
                Thailand, Bali, Dubai, Udaipur, Malaysiaare just a few of the locations around the world where we have planned
                 Destination Weddings and Events. We work directly with you to discover the perfect location and to ensure that 
                 all the details are in place for your big day. Our offices are located in the Thailand &Portland but our planning
                  takes us all over the world.
            </p>
            <div class="mb-3">
                <a href="Wedding-Events.html" class="btn btn-outline-dark mt-4">VIEW GALLERY</a>
            </div>
        </div>
        <div class="col-md-6">
            <img src="images/s2.jpg" class="img-fluid rounded" alt="Wedding Decoration">
        </div>
    </div>
</div> -->

<!-- Container 3 -->
<!-- <div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="images/s1.jpg" class="img-fluid rounded" alt="Wedding Decoration">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold">SOCIAL & COMMUNICATION EVENTS</h2>
            <p>
                We are at your service to execute your Corporate event, from simple luncheons to large black-tie galas. 
                We bring sharpness and flair to any corporate event to wow your clients and colleagues with an unforgettable event.
            </p>
            <div class="mb-3">
                <a href="Wedding-Events.html" class="btn btn-outline-dark mt-4">VIEW GALLERY</a>
            </div>
        </div>
    </div>
</div> -->

<!-- Conatiner 4 -->
<!-- <div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2 class="fw-bold">EDUCATIONAL EVENTS</h2>
            <p>
                Thailand, Bali, Dubai, Udaipur, Malaysiaare just a few of the locations around the world where we have planned
                 Destination Weddings and Events. We work directly with you to discover the perfect location and to ensure that 
                 all the details are in place for your big day. Our offices are located in the Thailand &Portland but our planning
                  takes us all over the world.
            </p>
            <div class="mb-3">
                <a href="Wedding-Events.html" class="btn btn-outline-dark mt-4">VIEW GALLERY</a>
            </div>
        </div>
        <div class="col-md-6">
            <img src="images/s2.jpg" class="img-fluid rounded" alt="Wedding Decoration">
        </div>
    </div>
</div> -->


<!-- WHAT WE OFFER -->

<div class="offer-section">
    <div class="offer-overlay"></div>
    <div class="container offer-content">
        <h2 class="forh1 fw-bold">WHAT WE OFFER</h2>
        <div class="row g-3">
        <?php
                // Fetch users from the database
                $sql = "SELECT id, title1, sb1 FROM servicegrid2";
                $result = $conn->query($sql);
               
                while($row = $result->fetch_assoc()) {
                    ?>
                    
                        <div class="col-md-4">
                            <div class="offer-card p-3">
                                
                                <h5 class="forh5 fw-bold"><?php echo $row["title1"] ?></h5>
                                <p class=""><?php echo $row["sb1"] ?></p>
                            </div>
                        </div>
                    <?php
                    
                }
            ?>
        
            <!-- <div class="col-md-4">
                <div class="offer-card p-3">
                    <h5 class="forh5 fw-bold">Floral Services</h5>
                    <p>"Ekaami Floral Creations - Where Blooms Tell Your Story"</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="offer-card p-3">
                    <h5 class="forh5 fw-bold">Catering and Decor</h5>
                    <p>"Ekaami Catering & Decor - Savor the Flavor, Adore the Ambiance"</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="offer-card p-3">
                    <h5 class="forh5 fw-bold">Photos & Videos</h5>
                    <p>"Ekaami Photos & Videos - Capturing Moments, Creating Memories"</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="offer-card p-3">
                    <h5 class="forh5 fw-bold">Invitation Cards</h5>
                    <p>"Ekaami Invitations - The First Impression of Your Grand Celebrations!"</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="offer-card p-3">
                    <h5 class="forh5 fw-bold">Entertainment</h5>
                    <p>"Ekaami Entertainment - Unleashing Magic, One Show at a Time!"</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="offer-card p-3">
                    <h5 class="forh5 fw-bold">Venue Selection</h5>
                    <p>"Ekaami Venue Selection - Perfect Spaces For Unforgettable Moments"</p>
                </div>
            </div> -->
        </div>
    </div>
</div>

<!-- WHAT WE OFFER DONE -->


<!-- Our Process Section -->
<section class="process-section">
    <div class="container">
        <h2 class="mb-4">OUR PROCESS</h2>
        <div class="row">
            <div class="col-md-4">
                <h4>Step 1 :</h4>
                <h5>INTRODUCTION</h5>
                <p>During our initial consultation, we take the time to understand your vision, event goals, and expectations.
                     This helps us create a strong foundation for planning your perfect event..</p>
            </div>
            <div class="col-md-4">
                <h4>Step 2 :</h4>
                <h5>CUSTOMIZATION</h5>
                <p>Based on our discussion, we craft a personalized event strategy, including themes, logistics, 
                    and vendor coordination, ensuring every detail aligns with your vision.</p>
            </div>
            <div class="col-md-4">
                <h4>Step 3 :</h4>
                <h5>ACTIVATION</h5>
                <p>Once everything is set, we bring your event to life with seamless coordination and 
                    real-time management, ensuring a flawless and memorable experience.</p>
            </div>
        </div>
    </div>
</section>
</div>


<!--  HEADING  -->
<div class="containerp">
    <div class="heading-containerp">
        <h1>What exactly does full-service planning include?</h1>
        <p>OUR SIGNATURE PROCESS</p>
    </div>
</div>
<!--  -->

<!-- FOUR PHASE -->
<div class="container my-5">
    <div class="accordionn" id="eventPhases">

        <!-- Phase 1 -->
        <div class="accordionn-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                    PHASE 1 | CONNECTION:
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#eventPhases">
                <div class="accordion-body">
                    <strong>Getting To Know You:</strong> Our signature process makes planning enjoyable from the beginning...
                </div>
            </div>
        </div>

        <!-- Phase 2 -->
        <div class="accordionn-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                    PHASE 2 | DESIGN:
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#eventPhases">
                <div class="accordion-body">
                    <strong>Design Process:</strong> We help curate the perfect look and feel for your event...
                </div>
            </div>
        </div>

        <!-- Phase 3 -->
        <div class="accordionn-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                    PHASE 3 | LOGISTICS:
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#eventPhases">
                <div class="accordion-body">
                    <strong>Logistics Management:</strong> Coordinating schedules, vendor timelines, and budgets...
                </div>
            </div>
        </div>

        <!-- Phase 4 -->
        <div class="accordionn-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                    PHASE 4 | TRANSFORMATION:
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#eventPhases">
                <div class="accordion-body">
                    <strong>Event Execution:</strong> Bringing everything together for a seamless and magical event...
                </div>
            </div>
        </div>

    </div>
</div>
<!-- FOUR PHASE COMPLETE !! -->


<!-- WHAT EXACTLY WE OFFER PART -->
<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6 content">
            <h2>PHASE I | CONNECTION:</h2>
            <p><strong><i>Getting To Know You</i></strong></p>
            <p>Our signature process makes planning enjoyable from the beginning. Our proprietary planning dashboard, planning and design workbook, and other foundational documents provide a strong starting point to produce an event that reflects your personality, entertainment style, and overall vision.</p>

            <p><strong><i>Venue Scouting + Site Tours</i></strong></p>
            <p>We’ll help you determine which city, resort, or tented lawn is perfect for hosting your personalized celebration through scouting and insights for every possible destination, in-person site tours, and budget analysis.</p>

            <p><strong><i>Vendor Recommendations</i></strong></p>
            <p>We’ll provide a thoughtfully curated recommendation of creative partners from our local and national network to fit your budget and aesthetic.</p>

            <p><strong><i>Communications & Guest Experience</i></strong></p>
            <p>From proofing stationery, procuring room blocks, booking transportation, and day-of concierge-style assistance, your guests will feel thought of and cared for.</p>
        </div>
        <div class="col-md-6 image">
            <img src="image.png" alt="Wedding Event">
        </div>
    </div>
</div>


</div>
<?php include 'include/footer.php' ?>
