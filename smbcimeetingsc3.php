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
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="https://conceptography.org/index.html">
              <img src="https://raw.githubusercontent.com/BlissBCI/BCI/refs/heads/main/assets/bci_bliss_logo_ed.jpg" alt="BCI logo " width="300" height="120"> 
            </a>
          </div>
          <div class="container"> 
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-itemtm">
                <a class="text-center text-primary fw-bold nav-link active" aria-current="page" href="https://conceptography.org/index.html">BCI Home</a>
                <li class="nav-itemtm">
                  <a class="text-center text-primary fw-bold nav-link" aria-current="page" href="https://conceptography.org/fcontactus.php">Contact BCI</a>
                </li>
                <li class="nav-itemtm">
                  <a class="text-center text-primary fw-bold nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Mailing List</a>
                </li>

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
              </li>
              <!-- End Modal -->

              <li class="nav-itemtm">
                <a class="text-center text-primary fw-bold nav-link" aria-current="page" href="https://conceptography.org/tmjoinbci.html">BCI Membership</a>
              </li>
              <li class="nav-itemtm">
                <a class="text-center text-primary fw-bold nav-link" aria-current="page" href="https://conceptography.org/tmbcicommunitysignup.php">BCI Community</a>
              </li>
              <li class="nav-itemtm">
                <a class="text-center text-primary fw-bold nav-link" aria-current="page" href="https://conceptography.org/tmbciadminlogin.php">BCI Admin</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit"><i class="fa fa-search"></i>
            </form>
          </div>
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
            <h2><a class="fw-bold nav-link active" aria-current="page" href="https://conceptography.org/mmbci.php"> About BCI</a></h2>
          </li>
          <li class="nav-item">
            <h2><a class="fw-bold nav-link" href="https://conceptography.org/mmbliss.php">About Blissymbolics</a></h2>
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

    <!-- BCI Sub Menu -->
    <div class="navsub">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <h4><a class="fw-bold nav-link" aria-current="page" href="https://conceptography.org/smbcimoreaboutbci.php">More About BCI</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="fw-bold nav-link" href="https://conceptography.org/smbcibm.php">BCI Board Members</a></h4>
         </li>
         <li class="nav-item">
          <h4><a class="fw-bold nav-link active" href="https://conceptography.org/smbcinews.php">BCI News</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="fw-bold nav-link" href="https://conceptography.org/smbciannouncements.php">BCI Announcements</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="fw-bold nav-link" href="https://conceptography.org/smbciinternationalpanel.php">BCI International Panel</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="fw-bold nav-link" href="https://conceptography.org/smbcimeetings.php">BCI Meetings</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="fw-bold nav-link" href="https://conceptography.org/smbcisupport.php">Support BCI</a></h4>
        </li>
      </ul>
    </div>      
    <!-- End BCI Sub Menu -->

    <!-- BCI Meetings Header --> 
    <div class = "textheading">
      <h2 class = "text-center mt-2">BCI Meetings</h2>
    </div>
    <!-- End BCI Meetings Header -->

    <!-- BCI Annual General Meeting March 28, 2023 -->
    <div> 
      <div class="textheading">
        <h2 class="text-center mt-2">BCI Annual General Meeting March 28, 2023</h2>
      </div>  
      <div>
        <img src="https://raw.githubusercontent.com/BlissBCI/BCI/refs/heads/main/assets/Team%20Meeting.jpg" class="rounded d-block mx-auto" alt="Meetings" width="400" height="250">
        <div class="articletext">
          <p class="fs-4 ml-10 mr-10 text-center"><b>March 28th 2023, BCI Annual General Meeting (AGM) will be held on Zoom<br>
            13:00 EDT, 17:00 GMT, 18:00 CET and 19:00 EET</b>
          </p>
          <p class="fs-5 ml-10 mr-10">The Zoom link and the Agenda and appropriate documents will be distributed to all     Members of 2023 one week before the meeting.<br>
            Motions from Members must be received by the Board no later than three weeks before the AGM thus on March 7th.<br>
            Members have the right to vote, To pay the Membership fee for 2023, see information under Membership in the left column. Whether you become a member for the first time or renew your membership you need to fill in the Membership form.
          </p>
        </div>
      </div>  
    </div>
    <!-- End BCI Annual General Meeting March 28, 2023 -->

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