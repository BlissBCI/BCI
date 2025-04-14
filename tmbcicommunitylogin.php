<?php
  
?>
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
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid align-items-center d-flex justify-content-between">    
          <a class="navbar-brand" href="https://conceptography.org/index.html">
            <img src="https://raw.githubusercontent.com/BlissBCI/BCI/refs/heads/main/assets/bci_bliss_logo_whitebg.jpg" alt="BCI logo " width="300" height="120"> 
          </a>
        </div>
        <div class="container">
          <div class="mx-auto">
            <ul class="navbar-nav d-flex flex-row gap-3 text-center">
              <li class="nav-item">  
          <h5><a class="text-center text-primary fw-bold nav-link" aria-current="page" href="https://conceptography.org/index.html">BCI Home</a></h5>
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
                
                <!-- Alert -->
                <div id="modalalert"></div>
                <div class="modal-header">
                  <h1 class="modal-title fs-5 text-primary" id="exampleModalLabel">Join The BCI Mailing List</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                  <form action="maillist.php" method="post">
                    Sign up for the BCI mailing list!
                    <div class="input-group mb-3 mt-3">
                      <span class="input-group-text" id="name">Name:</span>
                      <input type="text" class="form-control" placeholder="Name" name="name" required>
                    </div>
                    <div class="input-group mb-3 mt-3">
                      <span class="input-group-text" id="email">Email address:</span>
                      <input type="email" class="form-control" placeholder="Email" name="email" required>
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

          <!-- Show modal if needed -->
          <script>
            const urlParams = new URLSearchParams(window.location.search);
            const alert = urlParams.get('alert');
            const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
          
            const messages = {
              'success': {
                class: 'alert-success',
                text: "You've been added to the BCI mailing list!"
              },
              'email_exists': {
                class: 'alert-danger',
                text: "This email is already in use."
              },
              'invalid_email': {
                class: 'alert-danger',
                text: "Please enter a valid email address."
              },
              'error': {
                class: 'alert-danger',
                text: "Something went wrong. Please try again."
              }
            };
          
            if (messages[alert]) {
              document.getElementById('modalalert').innerHTML =
                `<div class="alert ${messages[alert].class} alert-dismissible fade show m-3" role="alert">
                  ${messages[alert].text}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>`;
              window.addEventListener('load', () => modal.show());
            }
          </script>  
          <!-- End Modal -->

          <li class="nav-itemtm">
            <h5><a class="text-center text-primary fw-bold nav-link" aria-current="page" href="https://conceptography.org/tmjoinbci.html">BCI Membership</a></h5>
          </li>
          <li class="nav-itemtm">
            <h5><a class="text-center text-primary fw-bold nav-link active" aria-current="page" href="https://conceptography.org/tmbcicommunitysignup.php">BCI Community</a></h5>
          </li>
          <li class="nav-itemtm">
            <h5><a class="text-center text-primary fw-bold nav-link" aria-current="page" href="https://conceptography.org/tmbciadminlogin.php">BCI Admin</a></h5>
          </li>
        </ul>   
      </nav>
    </div>
    <!-- End Top Menu -->

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
            <h2><a class="nav-link active" aria-current="page" href="https://conceptography.org/mmbci.html">About BCI</a></h2>
          </li>
          <li class="nav-item">
            <h2><a class="nav-link" href="https://conceptography.org/mmbliss.html">ABout Blissymbolics</a></h2>
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
      <div class="cardlogin">
        <div class="card-body">
          <!-- text in card body -->
          <form action="https://conceptography.org/tmbcicommunitylogout.php" method="post" class="form">
            <div class="textheading">
              <h2 class="text-center mt-2">BCI Community Member Log In</h2>
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="username" class="form-control border-primary" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control border-primary" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="btnlogin">
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
    <!-- Nav -->  
    <div class="row">
      <div class="col">
        <div class="footer">
          <div class="leftfooter ml-5">     
            <b><a class="nav-link text-primary active" data-bs-toggle="modal" data-bs-target="#exampleModal">BCI Mailing List</a></b>
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
              <b><a class="nav-link text-primary" aria-current="page" href="https://conceptography.org/index.html">BCI Home</a></b>
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
    </body>
  </html>