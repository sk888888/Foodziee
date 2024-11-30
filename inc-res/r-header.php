<!-- restaurant header -->

<header>
      <div class="container-fluid mb-3">
        <div class="row">
          <div class="col">
            <nav class="navbar navbar-expand-lg">
              <img src="Imgs/logo/final.png" alt=""  class="navbar-brand img-fluid" style="max-width: 50px; max-height: 45px;">
              <h4 style="font-family: 'Nerko One'; font-size:45px; color:orangered;">Foodziee</h4>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto gap-lg-4">
                  <!-- <li class="nav-item me-1"><a href="" class="nav-link"><i class="fa-solid fa-house px-2"></i>Home</a> </li> -->
                  <li class="nav-item me-1"><a href="" class="nav-link"><i class="fa-solid fa-cart-shopping px-2"></i>Orders</a> </li>
                  <li class="nav-item me-lg-2"><a href="" class="nav-link"><i class="fa-solid fa-person-chalkboard px-2"></i>About us</a></li>
                  <!-- <li class="nav-item me-lg-2"><a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fa-solid fa-user px-2"></i>Sign In</a></li> -->
                  <li class="nav-item me-lg-2"><a href="" class="nav-link"><i class="fa-solid fa-wallet px-2"></i>Wallet</a></li>
                  <li class="nav-item me-lg-2"><a href="" class="nav-link"><i class="fa-regular fa-pen-to-square px-2"></i>Menu</a></li>
                  <!-- <li class="nav-item me-lg-2"><a href="" class="nav-link"><i class="fa-solid fa-circle-user px-2"></i>Profile</a></li> -->
                  <?php
                  if(isset($_SESSION['login']) && $_SESSION['login']==true)
                  {
                    echo<<<data
                    <div class="btn-group">
                    <button type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                     <i class="fa-solid fa-user px-1">
                     </i> 
                     <span style="font-weight: bold;">$_SESSION[name]</span>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-lg-end">
                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                    <li><a class="dropdown-item" href="logoutr.php">Log-out</a></li>
                  </ul>
                </div>
                data;
                  }
                  ?>
                </ul>
              </div>
            </nav>


            <!-- modal -->
            <!-- <li class="nav-item me-lg-2"><a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fa-solid fa-user px-2"></i>Sign In</a></li> -->
            <!-- <div class="modal" id="loginModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form action="/login" method="post">
                    <div class="modal-header">
                      <h5 class="modal-title d-flex align-items-center">
                        <i class="fa-solid fa-circle-user fs-3 me-2"></i>
                        <span id="login-register-toggle">Login</span>
                        <a href="#" class="text-warning text-decoration-none" id="register-toggle" style="display: inline;">/ Register</a>
                      </h5>
                      <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div id="login-fields">
                        <div class="mb-3">
                          <label class="form-label">Email-id/Username</label>
                          <input type="text" name="username" required class="form-control shadow-none">
                        </div>
                        <div class="mb-4">
                          <label class="form-label">Password</label>
                          <input type="password" name="password" required class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                          <button type="submit" class="btn btn-dark shadow-none">Login</button>
                          <a href="/forgot-password" class="text-secondary text-decoration-none">Forgot password</a>
                        </div>
                      </div>
                      <div id="register-fields" style="display: none;">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                              <label class="form-label">Name</label>
                              <input type="text" name="name" required class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3">
                              <label class="form-label">Email-id</label>
                              <input type="email" name="email" required class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3">
                              <label class="form-label">Phone Number</label>
                              <input type="number" name="phone_number" required class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3">
                              <label class="form-label">Username</label>
                              <input type="text" name="username" required class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3">
                              <label class="form-label">Password</label>
                              <input type="password" name="password" required class="form-control shadow-none">
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Address</label>
                            <textarea name="address" required class="form-control shadow-none"></textarea>
                          </div>
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label class="form-label">Bank Name</label>
                              <input type="text" name="bank_name" required class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3">
                              <label class="form-label">Account No</label>
                              <input type="number" name="account_no" required class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3">
                              <label class="form-label">IFSC Code</label>
                              <input type="text" name="ifsc_code" required class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3">
                              <label class="form-label">Branch Name</label>
                              <input type="text" name="branch_name" required class="form-control shadow-none">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark shadow-none">Next</button>
                      </div>
                      <div id="business-fields" style="display: none;">
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label class="form-label">Restaurant Name</label>
                            <input type="text" name="restaurant_name" required class="form-control shadow-none">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">Restaurant Email ID</label>
                            <input type="email" name="restaurant_email" required class="form-control shadow-none">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">Restaurant Phone No</label>
                            <input type="number" name="restaurant_phone" required class="form-control shadow-none">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">FSSAI Number</label>
                            <input type="text" name="fssai_number" required class="form-control shadow-none">
                          </div>
                          <div class="col-md-12 mb-3">
                            <label class="form-label">Restaurant Address</label>
                            <textarea name="restaurant_address" required class="form-control shadow-none"></textarea>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">Bank Name</label>
                            <input type="text" name="bank_name" required class="form-control shadow-none">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">Account No</label>
                            <input type="number" name="account_no" required class="form-control shadow-none">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">Branch Name</label>
                            <input type="text" name="branch_name" required class="form-control shadow-none">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">IFSC Code</label>
                            <input type="text" name="ifsc_code" required class="form-control shadow-none">
                          </div>
                        </div>
                        <button type="submit" class="btn btn-dark shadow-none">submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

             <script>
                document.getElementById('register-toggle').addEventListener('click', function() {
                  document.getElementById('login-fields').style.display = 'none';
                  document.getElementById('register-fields').style.display = 'block';
                  document.getElementById('login-register-toggle').innerText = 'Register';
                  document.getElementById('register-toggle').style.display = 'none';
                  var backToLoginLink = document.createElement('a');
                  backToLoginLink.href = '#';
                  backToLoginLink.className = 'text-warning text-decoration-none';
                  backToLoginLink.id = 'login-link';
                  backToLoginLink.innerText = '/Login';
                  document.querySelector('.modal-title').appendChild(backToLoginLink);
                  document.getElementById('login-link').addEventListener('click', function() {
                    document.getElementById('login-fields').style.display = 'block';
                    document.getElementById('register-fields').style.display = 'none';
                    document.getElementById('business-fields').style.display = 'none';
                    document.getElementById('login-register-toggle').innerText = 'Login';
                    document.getElementById('register-toggle').style.display = 'inline';
                    document.getElementById('login-link').remove();
                  });
                });

                document.querySelector('#register-fields button[type="submit"]').addEventListener('click', function(event) {
                  event.preventDefault();
                  document.getElementById('register-fields').style.display = 'none';
                  document.getElementById('business-fields').style.display = 'block';
                  document.getElementById('login-fields').style.display = 'none';
                });

                document.querySelector('#business-fields button[type="submit"]').addEventListener('click', function(event) {
                  event.preventDefault();
                  document.getElementById('business-fields').style.display = 'none';
                  document.getElementById('login-fields').style.display = 'block';
                  document.getElementById('login-register-toggle').innerText = 'Login';
                  document.getElementById('register-toggle').style.display = 'none';
                  document.getElementById('login-link').remove();
                });
              </script> -->



          </div>
        </div>
      </div>
    </header>