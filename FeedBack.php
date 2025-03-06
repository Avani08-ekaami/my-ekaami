
<?php include 'include/conn.php' ?>

<?php 
  if (isset($_POST['Submit'])) {

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $attend = $_POST['attend'];
    $feedback = $_POST['feedback'];    

    $sql = "INSERT INTO feedback(name, email, attend, feedback) 
            VALUES ('$name', '$email', '$attend', '$feedback')";

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
    $attend = "";
    $feedback = "";
}
?>

<?php include 'include/header.php' ?>
<!---------------- FEEDBACK FORM ---------------->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                    <div class="feedback-form mt-3">
                        <h2 class="text-center">Event Feedback Form</h2>
                        <form action="FeedBack.php" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="event" class="form-label">Event Attended</label>
                                <select class="form-select" id="event" name="attend" required>
                                    <option selected disabled>Choose an event...</option>
                                    <option>Wedding Events</option>
                                    <option>Corporate Events</option>
                                    <option>Social & community Events</option>
                                    <option>Educational Events</option>
                                </select>
                            </div>
                                <!-- Star Rating System -->
                                <div class="mb-3">
                                    <label class="form-label">Rate the Event</label>
                                    <div class="star-rating">
                                        <input type="radio" name="rating" id="star5" value="5"><label for="star5">&#9733;</label>
                                        <input type="radio" name="rating" id="star4" value="4"><label for="star4">&#9733;</label>
                                        <input type="radio" name="rating" id="star3" value="3"><label for="star3">&#9733;</label>
                                        <input type="radio" name="rating" id="star2" value="2"><label for="star2">&#9733;</label>
                                        <input type="radio" name="rating" id="star1" value="1"><label for="star1">&#9733;</label>
                                    </div>
                                </div>
                
                                <div class="mb-3">
                                    <label for="message" class="form-label">Your Feedback</label>
                                    <textarea class="form-control" id="message" name="feedback" rows="4" placeholder="Write your feedback here..." required></textarea>
                                </div>
                                <div class="modal-footer">
                                <input type="Submit" class="btn btn-outline-dark mt-4" name="Submit" value="Submit">
                                </div>
                                </form>
                </div>
                </div>
                <!-- FORM -->
                
            </div>
        </div>
    </div>
</div>
<!---------------- FEEDBACK FORM ---------------->



<!---------------- FAQ ---------------->
<div class="container mt-5">
    <h2 class="text-center mb-4">Frequently Asked Questions</h2>
    <div class="accordion" id="faqAccordion">

        <!-- Question 1 -->
        <div class="accordion-item mt-3">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    >> What services does Ekaami Events offer?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Ekaami Events specializes in corporate events, weddings, birthdays, exhibitions, and more. We handle venue selection, decoration, catering, entertainment, and complete event planning.
                </div>
            </div>
        </div>

        <!-- Question 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                   >> How can I book an event with Ekaami Events?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    You can book an event by contacting us through our website, email, or phone. We recommend booking in advance to ensure availability.
                </div>
            </div>
        </div>

        <!-- Question 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    >> Do you provide customized event planning?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Yes, we tailor our event planning services to match your preferences, themes, and budget to create a unique experience.
                </div>
            </div>
        </div>
        
        <!-- Question 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        >> What types of events do you manage?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We manage a wide range of events, including corporate events, weddings, birthdays, conferences, and private parties.
                    </div>
                </div>
            </div>
        
        <!-- Question 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        >> How far in advance should I book your services?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We recommend booking our services at least 3-6 months in advance to ensure availability and proper planning.
                    </div>
                </div>
            </div>
        
        <!-- Question 6 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        >> Can you handle last-minute event planning?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, we offer last-minute event planning services based on availability. Contact us as soon as possible to discuss your requirements.
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>
<div class="mt-3"></div>
<!---------------- FAQ ---------------->



<?php include 'include/footer.php' ?>