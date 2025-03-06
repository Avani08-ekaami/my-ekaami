<?php include 'include/conn.php' ?>

<?php 
  if (isset($_POST['submit'])) {

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pnumber = $_POST['pnumber'];    

    $sql = "INSERT INTO signup(name, email, password, pnumber) 
            VALUES ('$name', '$email', '$password', '$pnumber')";

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
    $password = "";
    $pnumber = "";
}

?>