<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EKAAMI EVENT</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="AboutUs.html">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body class="mainbody">

<!---------------- NAV BAR ---------------->

<!-- HERE , NAV BAR STARTS  -->
        <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    <div class="collapse navbar-collapse"  id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="AboutUs.php">About</a>
                            </li>
                            <li class="nav-item">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Services
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="Wedding-Events.php">Wedding Events</a></li>
                                      <li><a class="dropdown-item" href="Corporate-Events.php">Corporate Events</a></li>
                                      <li><a class="dropdown-item" href="Social&Communtication-Events.php">Social & community Events</a></li>
                                      <li><a class="dropdown-item" href="Educational-Events.php">Educational Events</a></li>
                                    </ul>
                                </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Portfolio.php">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ContactUs.php">Contact</a>
                            </li>
                        </ul>
        
                        
                        <a class="navbar-brand justify-content-center" href="#">
                            <img src="images/3.png" alt="logo" class="LOGO">
                        </a>
        
                        
                        <div class="d-flex align-items-center">
                            <div class="social-icons">
                                <a href="https://www.instagram.com/" class="bi bi-instagram"></a>
                                <a href="https://in.pinterest.com/" class="bi bi-pinterest"></a>
                                <a href="https://www.facebook.com/login.php/" class="bi bi-facebook"></a>
                            </div>   

                            <div class="justchk g-0">             
                            <a href="" class="btn btn-consultation ms-3" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                            </div> 
                        </div>

                        <!-- Login Modal -->
                        <div class="modal fade" id="loginModal" aria-labelledby="loginModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="loginModalLabel">Login</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="loginEmail" class="form-label">Email ID</label>
                                                <input type="email" class="form-control" id="loginEmail" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="loginPassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="loginPassword" required>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal" data-bs-dismiss="modal">Signup</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Signup Modal -->
                        <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="signupModalLabel">Signup</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="Signup-db.php" method="POST">
                                            <div class="mb-3">
                                                <label for="signupName" class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control" id="signupName" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="signupEmail" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control" id="signupEmail" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="signupPassword" class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control" id="signupPassword" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="signupPhone" class="form-label">Phone Number</label>
                                                <input type="text" name="pnumber" class="form-control" id="signupPhone" required>
                                            </div>
                                            <div class="text-center">
                                                <input type="submit" name="submit"  value="submit" class="btn btn-success">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3 p-4 justchk">             
                         <a href="Book-Consultation.php" class="btn btn-consultation ms-3">Book a Consultation</a>
                        </div>
                        </div>
                    </div>
                </div>
        </nav>
<!-- HERE , NAV BAR ENDS  -->
        
<!---------------- NAV BAR ---------------->