<?php include 'include/conn.php' ?>

<?php 
  if (isset($_POST['submit'])) {

    // Get form data
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $eventtype = $_POST['eventtype'];
    $hear = $_POST['hear'];    
    $referral = $_POST['referral'];
    $planned = $_POST['planned'];
    $estimbudg = $_POST['estimbudg'];
    $estimguest = $_POST['estimguest'];
    $eventdate = $_POST['eventdate'];
    $addinfo = $_POST['addinfo'];
    $tellus = $_POST['tellus'];
    

    $sql = "INSERT INTO bookcons(name, email, eventtype, hear, referral, planned, estimbudg, estimguest, eventdate, addinfo, tellus) 
            VALUES ('$name', '$email', '$eventtype', '$hear', '$referral', '$planned', '$estimbudg', '$estimguest', '$eventdate', '$addinfo', '$tellus')";

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
    $eventtype = "";
    $hear = "";
    $referral = "";
    $planned = "";
    $estimbudg = "";
    $estimguest = "";
    $eventdate = "";
    $addinfo = "";
    $tellus = "";
}

?>

<?php include 'include/header.php' ?>
<div class="mainbody">

<!-- JUST WRITING -->
<div class="just_write m-3">
    <div class="col-md-12">
        <div class="container">
            <div class="headerr">
                <img src="images/justimg.png">
                <h2 class="m-3">LET'S GET THIS PARTY STARTED.</h2>
                <p class="mt-4">For general business, press, and career inquiries</p>
                <a href="Ekaamieventplanner@gmail.com" style="color: black;">Ekaamieventplanner@gmail.com</a>
                <p class="m-3">PH: 910.432.8496</p>
                <p class="mt-4">For event inquiries, please fill out the form below and one of our team members will get back to you within 48 hours.</p>
            </div>

        </div>
    </div>

<!-- !! JUST WRITING !! -->
<!-- FORM -->
<div class="just_write">
    <div class="col-md-12">
        <div class="container">
            <form action="Book-Consultation.php" method="POST">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">First Name <span class="text-muted">(required)</span></label>
                        <input type="text" name="fname" class="form-control" required>
                    </div>
                    <div class="col">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="lname" class="form-control">
                    </div>
                </div>
        
        <div class="mb-3">
                    <label class="form-label">Email <span class="text-muted">(required)</span></label>
                    <input type="email" name="email" class="form-control" required>
        </div>
        
        <div class="mb-3">
                    <label for="how-heard" class="form-label">
                        Event Type <span class="text-muted">(required)</span>
                    </label>
                    <select class="form-select" id="how-heard" name="eventtype" required>
                        <option selected disabled>Select an option</option>
                        <option value="Wedding Event">Wedding Event</option>
                        <option value="Corporate Event">Corporate Event</option>
                        <option value="Social & Community Event">Social & Community Event</option>
                        <option value="Educational Event">Educational Event</option>
                    </select>
        </div>
                
        
        <div class="mb-3">
            <label for="how-heard" class="form-label">
                How did you hear about us? <span class="text-muted">(required)</span>
            </label>
            <select class="form-select" name="hear" id="how-heard" required>
                <option selected disabled>Select an option</option>
                <option value="social-media">Social Media</option>
                <option value="friends">Friends</option>
                <option value="advertisement">Advertisement</option>
                <option value="other">Other</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Name of Referral <span class="text-muted">(required)</span></label>
            <input type="text" name="referral" class="form-control">
        </div>
        
        <div class="mb-3">
            <label class="form-label">Planning Needs <span class="text-muted">(required)</span></label>
            <input type="text" name="planned" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Estimated Budget <span class="text-muted">(required)</span></label>
            <input type="text" name="estimbudg" class="form-control" required> 
        </div>
        
        <div class="mb-3">
            <label class="form-label">Estimated Guest Count <span class="text-muted">(required)</span></label>
            <input type="text" name="estimguest" class="form-control" required>
        </div>
        
        <div class="mb-4 mt-3">
            <label class="form-label">Event Date (required)</label>
            <input type="date" name="eventdate" class="form-control w-auto" placeholder="dd-mm-yyyy">
        </div>
        
        <div class="mb-3">
            <label class="form-label">Additional Information <span class="text-muted">(required)</span></label>
            <p class="text-muted">Is there anything else that you would like to tell us about your planning needs or vision for your event?</p>
            <input type="text" name="addinfo" class="form-control">
        </div>
        
        <div class="mb-3">
            <label class="form-label">Tell us about your event <span class="text-muted">(required)</span></label>
            <p class="text-muted">Please share more about your vision for your wedding or event.</p>
            <input type="text" name="tellus" class="form-control" required>
        </div>

        <div class="mb-3">
            <input type="submit" class="btn btn-outline-dark mt-4" name="submit" value="Submit">
        </div>
        </form>
        <br>
    </div>
        </div>
    </div>
</div>
<!-- !! FORM !! -->

</div>

<?php include 'include/footer.php' ?>