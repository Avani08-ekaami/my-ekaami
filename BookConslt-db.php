<?php include 'include/conn.php' ?>

<?php 
  if (isset($_POST['submit'])) {

    // Get form data
    $name = $_POST['fname'] + $_POST['lname'];
    $email = $_POST['email'];
    $eventtype = $_POST['eventtype'];
    $hear = $_POST['hear'];    
    $referral = $_POST['referral'];
    $planned =  $_POST['planned'];
    $estimbudg =  $_POST['estimbudg'];
    $estimguest = $_POST['estimguest'];
    $eventdate =  $_POST['eventdate'];
    $addinfo =  $_POST['addinfo'];
    $tellus = $_POST['tellus'];

    $sql = "INSERT INTO signup(name, email, eventtype, hear, referral, planned, estimbudg, estimguest, eventdate, addinfo, tellus) 
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