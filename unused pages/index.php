<!-- PHP -->
<?php
$alert_message = '';
$alert_class = '';

$conn = mysqli_connect("localhost", "concept_maria", "kx18ghS4u-SM", "concept_BCImaillist");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $alert_message = "Please enter a valid email address.";
        $alert_class = "alert-warning";
    } else {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT Email FROM mail WHERE Email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $alert_message = "This email is already in use.";
            $alert_class = "alert-danger";
        } else {
            // Insert into DB
            $stmt = $conn->prepare("INSERT INTO mail (Name, Email) VALUES (?, ?)");
            $stmt->bind_param("ss", $name, $email);
            if ($stmt->execute()) {
                $alert_message = "You've been added to the BCI mailing list!";
                $alert_class = "alert-success";
            } else {
                $alert_message = "Error: " . $stmt->error;
                $alert_class = "alert-danger";
            }
        }
    }
}
?>
<!-- End PHP -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Website CSS -->
    <link rel="stylesheet" href="https://conceptography.org/style.css">

    <!-- Search JS -->
    <script src="search.js" defer></script> 

    <!-- JavaScript -->
    <!-- jQuery, Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Responsive Viewport Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Load icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>BCI</title>
  </head>
  <body>
    
    <!-- Top Menu -->
    <div>
    <!--<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid"></div>-->
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <!--<div class="container-fluid align-items-center">-->
        <div class="container-fluid align-items-center d-flex justify-content-between">    
          <a class="navbar-brand" href="https://conceptography.org/index.php">
            <img src="https://raw.githubusercontent.com/BlissBCI/BCI/refs/heads/main/assets/bci_bliss_logo_whitebg.jpg" alt="BCI logo " width="300" height="120"> 
          </a>
        </div>
        <div class="container">
          <!--<div class="mx-auto order-0">
            <div class="position-absolute start-50 translate-middle-x">
              <ul class="navbar-nav flex-row"> 
                <li class="nav-itemtm">-->
                  <div class="mx-auto">
                    <ul class="navbar-nav d-flex flex-row gap-3 text-center">
                      <li class="nav-item">  
                  <h5><a class="text-center text-primary fw-bold nav-link active" aria-current="page" href="https://conceptography.org/index.php">BCI Home</a></h5>
                  <li class="nav-itemtm">
                    <h5><a class="text-center text-primary fw-bold nav-link" aria-current="page" href="https://conceptography.org/fcontactus.php">Contact BCI</a></h5>
                  </li>
                  <li class="nav-itemtm">
                    <h5><a class="text-center text-primary fw-bold nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Mailing List</a></h5>
                  </li>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                      
                      <!-- PHP -->  
                      <?php if (!empty($alert_message)): ?>
                        <div class="alert <?= $alert_class ?> alert-dismissible fade show mt-3" role="alert">
                          <?= $alert_message ?>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      <?php endif; ?>
                      <!-- End PHP --> 
                      
                        <div class="modal-header">
                          <h1 class="modal-title fs-5 text-primary" id="exampleModalLabel">Join The BCI Mailing List</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                          <form action="index.php" method="post"> 
                          Sign up for the BCI mailing list!
                          <div class="input-group mb-3 mt-3">
                            <span class="input-group-text" id="name">Name:</span>
                            <input type="name" class="form-control" placeholder="Name" aria-label="name" aria-describedby="basic-addon1" id="name" name="name" required>
                          </div>  
                          <div class="input-group mb-3 mt-3">
                            <span class="input-group-text" id="email">Email address:</span>
                            <input type="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="email" id="email" name="email" required>
                          </div>  
                          <div class="modalemailconsent mt-3">
                            <p>When you sign up for the list, your contact information will be stored in BCI's database so that we can send information to you. We will not use the information for any other purpose or share it with any third party. It is regulated in the Data Protection Act that we must have your approval in order to save your data. By signing up for the list, you agree that we will save your information in this way.</p>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                        </form>  
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- End Modal -->

                <li class="nav-itemtm">
                  <h5><a class="text-center text-primary fw-bold nav-link" aria-current="page" href="https://conceptography.org/tmjoinbci.html">BCI Membership</a></h5>
                </li>
                <li class="nav-itemtm">
                  <h5><a class="text-center text-primary fw-bold nav-link" aria-current="page" href="https://conceptography.org/tmbcicommunitysignup.php">BCI Community</a></h5>
                </li>
                <li class="nav-itemtm">
                  <h5><a class="text-center text-primary fw-bold nav-link" aria-current="page" href="https://conceptography.org/tmbciadminlogin.php">BCI Admin</a></h5>
                </li>
              </ul>
            </div>
          </div>
        </div>    
      </nav>
    </div>
    <!-- End Top Menu -->

    <!-- Search Menu -->
    <div>
      <div>  
        <nav class="navbar bg-transparent justify-content-center py-2">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit"><i class="fa fa-search"></i></button>
          </form>
        </nav>
      </div>
    </div>  
    <!-- End Search Menu -->

    <!-- Banner Message Carousel -->
    <div>
      <div>
        <div>
          <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-innerup">
              <div class="carousel-item active">
                <img src="https://raw.githubusercontent.com/BlissBCI/BCI/refs/heads/main/assets/Bliss%20Banner%20Photo1.png" class="d-block w-100" alt="Banner 1">
                <div class="carousel-caption text-primary">
                  <h6>Banner 1</h6>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://raw.githubusercontent.com/BlissBCI/BCI/refs/heads/main/assets/Bliss%20Banner%20Photo2.png" class="d-block w-100" alt="Banner 2">
                <div class="carousel-caption text-primary">
                  <h6>Banner 2</h6>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://raw.githubusercontent.com/BlissBCI/BCI/refs/heads/main/assets/Bliss%20Banner%20Photo3.png" class="d-block w-100" alt="Banner 3">
                <div class="carousel-caption text-primary">
                  <h6>Banner 3</h6>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://raw.githubusercontent.com/BlissBCI/BCI/refs/heads/main/assets/Bliss%20Banner%20Photo4.png" class="d-block w-100" alt="Banner 4">
                <div class="carousel-caption text-primary">
                  <h6>Banner 4</h6>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://raw.githubusercontent.com/BlissBCI/BCI/refs/heads/main/assets/Bliss%20Banner%20Photo5.png" class="d-block w-100" alt="Banner 5">
                <div class="carousel-caption text-primary">
                  <h6>Banner 5</h6>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://raw.githubusercontent.com/BlissBCI/BCI/refs/heads/main/assets/Bliss%20Banner%20Photo6.png" class="d-block w-100" alt="Banner 6">
                <div class="carousel-caption text-primary">
                  <h6>Banner 6</h6>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://raw.githubusercontent.com/BlissBCI/BCI/refs/heads/main/assets/Bliss%20Banner%20Photo7.png" class="d-block w-100" alt="Banner 7">
                <div class="carousel-caption text-primary">
                  <h6>Banner 7</h6>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://raw.githubusercontent.com/BlissBCI/BCI/refs/heads/main/assets/Bliss%20Banner%20Photo8.png" class="d-block w-100" alt="Banner 8">
                <div class="carousel-caption text-primary">
                  <h6>Banner 8</h6>
                </div>
              </div>
            </div>
            <button class="carousel-control-prevup btn btn-primary" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-nextup btn btn-primary" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            </div>
          </div>
        </div>
      </div>
    </div>  
    <!-- End Banner Message Carousel -->

    <!-- Photo Carousel -->
    <div>
      <div>
        <div>
          <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-innerph">
              <div class="carousel-itemph active">
                <img src="https://raw.githubusercontent.com/BlissBCI/BCI/refs/heads/main/assets/ISAAC2024.3.1.jpg" class="d-block w-100" alt="Banner 1">
                <div class="carousel-caption text-primary">
                  <h6>Samara at ISAAC 2024 Photo set 1</h6>
                </div>
              </div>
              <div class="carousel-itemph">
                <img src="https://raw.githubusercontent.com/BlissBCI/BCI/refs/heads/main/assets/ISAAC2024.3.2.jpg" class="d-block w-100" alt="Banner 2">
                <div class="carousel-caption text-primary">
                  <h6>Samara at ISAAC 2024 Photo set 2</h6>
                </div>
              </div>
                <button class="carousel-control-prevph btn btn-primary" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-nextph btn btn-primary" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </div>  
    <!-- End Photo Carousel -->
    
    <!-- Divider -->
    <div> 
      <div class="pagebreaktop" style="width: 98.85%">
        <hr class="bg-primary border-0 border-top border-primary"/>
      </div>
    </div>    
    <!-- End Divider -->

    <!-- Main Menu -->
    <div>
      <div class="navmain">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <h2><a class="nav-link active" aria-current="page" href="https://conceptography.org/mmbci.php">About BCI</a></h2>
          </li>
          <li class="nav-item">
            <h2><a class="nav-link active" aria-current="page" href="https://conceptography.org/mmbliss.html">About Blissymbolics</a></h2>
          </li>
        </ul>
      </div>
    </div>
    <!-- End Main Menu -->

    <!-- Divider -->
    <div> 
      <div class="pagebreak" style="width: 100%">
        <hr class="bg-primary border-0 border-top border-primary"/>
      </div>
    </div>  
    <!-- End Divider -->

    <!-- Welcome -->
    <div> 
      <div class="textheading">
        <h2 class="text-center mt-2">Welcome</h2>
      </div>  
      <div>
        <div class = "articletext">
          <p class="fs-5 ml-10 mr-10">Blissymbolics is a semantic graphical language that is currently composed of more than 5000 authorized symbols - Bliss-characters and Bliss-words. It is a generative language that allows its users to create new Bliss-words as needed. It is used by individuals with severe speech and physical impairments around the world, but also by others for language learning and support, or just for the fascination and joy of this unique language representation.</p>
          <p class="fs-5 ml-10 mr-10">Blissymbolics Communication International is a non-profit, charitable organization that holds the perpetual, worldwide rights for the use and publication of Blissymbols. BCI provides leadership in the development of the system of Blissymbolics. Blissymbolics is offered for all to use under a choice of two generous licensing schemes - either a free, copyleft license, or a proprietary license agreement. See under Licensing for more information.</p>
        </div>
      </div>  
    </div>  
    <!-- End Welcome -->

    <!-- Divider -->
    <div>
      <div class="pagebreak" style="width: 100%">
        <hr class="bg-primary border-0 border-top border-primary"/>
      </div>
    </div> 
    <!-- End Divider -->

    <!-- Footer -->
    <!-- Left Footer Menu -->
    <!-- Nav -->  
    <div class="row">
      <div class="col">
        <div class="footer">
          <div class="leftfooter ml-5">     
            <b><a class="nav-link text-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">BCI Mailing List</a></b>
            <!-- End Nav -->   

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5 text-primary" id="exampleModalLabel">Join The BCI Mailing List</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-center">
                    <form action="maillist.php" method="post"> 
                    Sign up for the BCI mailing list!
                    <div class="input-group mb-3 mt-3">
                      <span class="input-group-text" id="name">Name:</span>
                      <input type="text" class="form-control" placeholder="name" aria-label="name" aria-describedby="basic-addon1" id="name" name="name" required>
                    </div>  
                    <div class="input-group mb-3 mt-3">
                      <span class="input-group-text" id="email">Email address:</span>
                      <input type="text" class="form-control" placeholder="email" aria-label="email" aria-describedby="email" id="email" name="email" required>
                    </div>  
                    <div class="modalemailconsent mt-3">
                      <p>When you sign up for the list, your contact information will be stored in BCI's database so that we can send information to you. We will not use the information for any other purpose or share it with any third party. It is regulated in the Data Protection Act that we must have your approval in order to save your data. By signing up for the list, you agree that we will save your information in this way.</p>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                  </form>  
                  </div>
                </div>
              </div>
            </div>
            <!-- End Modal -->

            <!-- Nav --> 
            <b><a class="nav-link text-primary" href="https://conceptography.org/tmjoinbci.html">BCI Membership</a></b>
            <b><a class="nav-link text-primary" href="https://conceptography.org/tmbcicommunitysignup.php">BCI Community</a></b>
            <b><a class="nav-link text-primary" href="https://conceptography.org/tmbciadminlogin.php">BCI Admin</a></b>
          </div>
        </div>      
      </div>
      <!-- End Nav --> 
      <!-- Left Footer Menu -->
      <!-- Image --> 
      <div class="col">
        <div class="image" style="width: 25rem;"></div>
          <img src="https://blissymbolics.org/images/chelha.png" class="rounded mx-auto d-block" alt="...">
        </div>
        <!-- End Image -->
        <!-- Nav --> 
        <!-- Right Footer Menu -->
        <div class="col">
          <div class="footer">
            <div class="rightfooter ml-0">
              <b><a class="nav-link text-primary active" aria-current="page" href="https://conceptography.org/index.html">BCI Home</a></b>
              <b><a class="nav-link text-primary" href="https://conceptography.org/mmbci.html">BCI</a></b>
              <b><a class="nav-link text-primary" href="https://conceptography.org/mmbliss.html">Blissymbolics</a></b>
              <b><a class="nav-link text-primary" class="text-xxl-end" href="https://conceptography.org/fcontactus.php">Contact BCI</a></b>
            </div>
          </div>   
        </div>
      </div>
    </div>
    <!-- End Nav-->
    <!-- End Right Footer Menu -->
    <!-- End Footer -->

    <!-- Modal PHP -->                    
    <?php if (!empty($alert_message)): ?>
    <script>
      const myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
      window.addEventListener('load', () => {
        myModal.show();
      });
    </script>
    <?php endif; ?>
    <!-- End Modal PHP -->

  </body>
</html>