<?php include 'include/conn.php' ?>

<?php 
  if (isset($_POST['submit'])) {

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $attend = $_POST['attend'];
    $feedback = $_POST['feedback'];    

    $sql = "INSERT INTO feedback(name, email, attend, feedback) 
            VALUES ('$name', '$email', '$attend', '$pfeedback')";

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