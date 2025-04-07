<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- JavaScript -->
    <!-- jQuery, Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Responsive Viewport Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Website CSS -->
    <link rel="stylesheet" href="https://conceptography.org/style.css">

    <!-- Load icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>BCI</title>
  </head>
  <body>
    
    <!-- Top Menu -->
    <div>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="https://conceptography.org/index.html">
              <img src="https://raw.githubusercontent.com/BlissBCI/BCI/refs/heads/main/assets/bci_bliss_logo_ed.jpg" alt="BCI logo " width="300" height="120"> 
            </a>
          </div>
          <div class="container"> 
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-itemtm">
                <h5><a class="text-center text-primary nav-link active" aria-current="page" href="https://conceptography.org/index.html">BCI Home</a></h5>
                <li class="nav-itemtm">
                <h5><a class="text-center text-primary nav-link" aria-current="page" href="https://conceptography.org/fcontactus.php">Contact Us</a></h5>
                </li>
                <!--<h5> <a class="text-center text-primary nav-link active" aria-current="page" href="#">Join BCI Mailing List</a> </h5>-->
                <li class="nav-itemtm">
                <h5><a class="text-center text-primary nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Join BCI Mailing List</a></h5>
                </li>
                <!-- Button trigger modal -->
                <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Launch demo modal
                </button>-->
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5 text-primary" id="exampleModalLabel">Join BCI Mailing List</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body text-center">
                        <form action="maillist.php" method="post"> 
                        Sign up for the BCI email list!
                        <div class="input-group mb-3 mt-3">
                          <span class="input-group-text" id="basic-addon1">Email address:</span>
                          <!-- <input type="text" class="form-control" placeholder="email" aria-label="Email" aria-describedby="basic-addon1"> -->
                          <input type="text" class="form-control" placeholder="email" aria-label="Email" aria-describedby="basic-addon1" id="maillist" name="maillist">
                        </div>  
                        <div class="modalemailconsent mt-3">
                          <p>When you sign up for the list, your contact information will be stored in BCI's database so that we can send information to you. We will not use the information for any other purpose or share it with any third party. It is regulated in the Data Protection Act that we must have your approval in order to save your data. By signing up for the list, you agree that we will save your information in this way.</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <!--<button type="button" class="btn btn-primary">Save</button>-->
                        <button class="btn btn-primary" type="submit">Submit</button>
                      </form>  
                      </div>
                    </div>
                  </div>
                </div>
              </li>
                <!-- End Modal -->
              <li class="nav-itemtm">
                <h5><a class="text-center text-primary nav-link" aria-current="page" href="https://conceptography.org/tmjoinbci.html">Join BCI</a></h5>
              </li>
              <li class="nav-itemtm">
                <h5><a class="text-center text-primary nav-link" aria-current="page" href="https://conceptography.org/tmmemberlogin.php">BCI Member Log In</a></h5>
              </li>
              <li class="nav-itemtm">
                <h5><a class="text-center text-primary nav-link" aria-current="page" href="#">BCI Admin</a></h5>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <h5><input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"></h5>
              <h5><button class="btn btn-outline-primary" type="submit"><i class="fa fa-search"></i></h5>
            </form>
          </div>
        </div>
      </nav>
    </div>
    <!-- End Top Menu -->

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

    <!-- Photo Carousel Basic -->
    <div>
    <div>
      <div>
        <div>
          <div id="carouselExampleRide" class="carousel slide">
            <div class="carousel-innerph">
              <div class="carousel-item active">
                <img src="https://raw.githubusercontent.com/BlissBCI/BCI/refs/heads/main/assets/ISAAC20243ed.jpg" class="d-block w-100" alt="Samara at ISAAC 2024 Photo set 1">
                <div class="carousel-captionph text-primary">
                  <h5>Samara at ISAAC 2024 Photo set 1</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://raw.githubusercontent.com/BlissBCI/BCI/refs/heads/main/assets/ISAAC20242ed.jpg" class="d-block w-100" alt="Samara at ISAAC 2024 Photo set 2">
                <div class="carousel-captionph text-primary">
                  <h5>Samara at ISAAC 2024 Photo set 2</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://raw.githubusercontent.com/BlissBCI/BCI/refs/heads/main/assets/ISAAC20241ed.jpg" class="d-block w-100" alt="Samara at ISAAC 2024 Photo set 3">
                <div class="carousel-captionph text-primary">
                  <h5>Samara at ISAAC 2024 Photo set 3</h5>
                </div>
              </div>
            </div>
            <button class="carousel-control-prevph btn btn-primary" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-nextph btn btn-primary" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Photo Carousel Basic -->

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
            <h2><a class="nav-link active" aria-current="page" href="https://conceptography.org/mmbci.html">BCI</a></h2>
          </li>
          <li class="nav-item">
            <h2><a class="nav-link" href="https://conceptography.org/mmbliss.html">Blissymbolics</a></h2>
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

    <!-- BCI Community Member Log In -->
    <div> 
      <div class="cardcommunitylogin">
        <div class="card-body">
          <!-- text in card body -->
          <form action="https://conceptography.org/communitylogin.php" method="post" class="form">
            <div class="textheading">
              <h2 class="text-center mt-2">BCI Community Member Log In</h2>
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control border-primary" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="text" class="form-control border-primary" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="btnlogin">
              <!-- <button type="button" class="btn btn-primary" name="btnsend">Send message</button> -->
              <button class="btn btn-primary" type="submit" name="submit">Log In</button>
            </div>
          </form>
          <div class="link">
              <p class="fs-5 ml-10 mr-10 text-center">Don't have an account?<a class="link" aria-current="page" href="https://conceptography.org/tmbcicommunitysignup.php">Sign Up Now!</a></p>
          </div> 
        </div>
      </div>
    </div>
    <!-- End BCI Community Member Log In-->


    <!-- Divider -->
    <div>
      <div class="pagebreak" style="width: 100%">
        <hr class="bg-primary border-0 border-top border-primary"/>
      </div>
    </div> 
    <!-- End Divider -->
  
    <!-- Footer -->
    <!-- Left Footer Menu -->
    <div class="row">
      <div class="col">
        <div class="footer">
          <div class="leftfooter ml-5">
          <!--<nav class="nav flex-column">-->      
            <h5><a class="nav-link text-primary active" data-bs-toggle="modal" data-bs-target="#exampleModal">Join BCI Mailing List</a></h5>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5 text-primary" id="exampleModalLabel">Join BCI Mailing List</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-center">
                    Sign up for the BCI email list!
                    <div class="input-group mb-3 mt-3">
                      <span class="input-group-text" id="basic-addon1">Email address:</span>
                      <input type="text" class="form-control" placeholder="email" aria-label="Email" aria-describedby="basic-addon1">
                    </div>  
                    <div class = "modalemailconsent mt-3">
                      <p>When you sign up for the list, your contact information will be stored in BCI's database so that we can send information to you. We will not use the information for any other purpose or share it with any third party. It is regulated in the Data Protection Act that we must have your approval in order to save your data. By signing up for the list, you agree that we will save your information in this way.</p>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            <h5><a class="nav-link text-primary" href="https://conceptography.org/tmjoinbci.html">Join BCI</a></h5>
            <h5><a class="nav-link text-primary" href="https://conceptography.org/tmmemberlogin.php">BCI Member Log In</a></h5>
            <h5><a class="nav-link text-primary" href="#">BCI Admin</a></h5>
            <!--</nav>-->
          </div>
        </div>      
      </div>
      <!-- Left Footer Menu -->
      <!-- Image --> 
      <div class="col">
        <div class="image" style="width: 25rem;"></div>
          <img src="https://blissymbolics.org/images/chelha.png" class="rounded mx-auto d-block" alt="...">
        </div>
        <!-- End Image --> 
        <!-- Right Footer Menu -->
        <div class="col">
          <div class="footer">
            <div class="rightfooter ml-0">
              <h5><a class="nav-link text-primary" aria-current="page" href="https://conceptography.org/index.html">BCI Home</a></h5>
              <h5><a class="nav-link text-primary" href="https://conceptography.org/mmbci.html">BCI</a></h5>
              <h5><a class="nav-link text-primary" href="https://conceptography.org/mmbliss.html">Blissymbolics</a></h5>
              <h5><a class="nav-link text-primary" class="text-xxl-end" href="https://conceptography.org/fcontactus.php">Contact Us</a></h5>
            <!--</nav>-->
            </div>
          </div>   
        </div>
      </div>
    </div>
    <!-- End Right Footer Menu -->
    <!-- End Footer -->
    </body>
  </html>