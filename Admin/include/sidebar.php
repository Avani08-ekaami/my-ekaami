<?php include 'conn.php' ?>

<?php 
    session_start();

    // if(isset($_SESSION['email'])){
    //     echo "<script>alert('Welcome to Admin!')</script>";
    // }else {
    //     header('Location: login.php');
    // }
?>
<style>
body{
    background-color: #f1ede9;
}
</style>
   <!-- Sidebar -->
   <nav class="sidebar">
    <h2 class="text-black"><?php echo $_SESSION['name']; ?></h2>
    <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link justchek" href="homegrid-form.php">Home-Grid-Form</a></li>
        <li class="nav-item"><a class="nav-link justchek" href="homegrid-table.php">Home-Grid-Table</a></li>
        <li class="nav-item"><a class="nav-link justchek" href="home-vdo-form.php">Home-2-Videos-Form</a></li>
        <li class="nav-item"><a class="nav-link justchek" href="home-vdo-table.php">Home-2-Videos-Table</a></li>
        <li class="nav-item"><a class="nav-link justchek" href="home-card-form.php">Home-Cards-Form</a></li>
        <li class="nav-item"><a class="nav-link justchek" href="home-card-table.php">Home-Cards-Table</a></li>
        <li class="nav-item"><a class="nav-link justchek" href="AboutUs-form.php">About-Us-Form</a></li>
        <li class="nav-item"><a class="nav-link justchek" href="Aboutus-table.php">About-Us-Table</a></li>
        <li class="nav-item"><a class="nav-link justchek" href="Services-form.php">Services-Form</a></li>
        <li class="nav-item"><a class="nav-link justchek" href="Services-table.php">Services-Table</a></li>
        <li class="nav-item"><a class="nav-link justchek" href="Service-Cards-form.php">Service-Cards-Form</a></li>
        <li class="nav-item"><a class="nav-link justchek" href="Service-Cards-table.php">Service-Cards-Table</a></li>
        <li class="nav-item"><a class="nav-link justchek" href="Contact-table.php">Contact-Form (Table)</a></li>
        <li class="nav-item"><a class="nav-link justchek" href="BookConslt-table.php">Consultation-Form (Table)</a></li>
        <li class="nav-item"><a class="nav-link justchek" href="feedback-table.php">FeedBack-Form (Table)</a></li>
        <li class="nav-item"><a class="nav-link justchek" href="SignUp-table.php">Sign-Up Form (Table)</a></li>
    </ul>

    <!-- Logout Button -->
    <div class="logout-container">
        <form action="logout.php" method="POST">
            <input type="submit" class="btn btn1" name="Logout" value="Logout">
        </form>
    </div>
</nav>


          
          
