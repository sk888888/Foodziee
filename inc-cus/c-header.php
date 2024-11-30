<header>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-light">
            <img src="Imgs/logo/final.png" alt="" class="navbar-brand img-fluid"
                style="max-width: 50px; max-height: 40px;">
            <h4 style="font-family: 'Nerko One'; font-size:40px; color:orangered;">Foodziee</h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto  gap-lg-2">
                    <li class="nav-item me-lg-2"><a href="" class="nav-link"><i
                                class="fa-solid fa-house px-2"></i>Home</a> </li>
                    <li class="nav-item me-lg-2"><a href="" class="nav-link"><i
                                class="fa-solid fa-magnifying-glass px-2"></i>Search</a> </li>
                    <li class="nav-item dropdown me-lg-2">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa-solid fa-handshake px-2"></i>Partnership</a>
                        <ul class="dropdown-menu">
                            <li><a href="res-lo.php" class="dropdown-item">Restaurant</a></li>
                            <li><a href="dev-lo.php" class="dropdown-item">Courier service</a></li>
                            <li><a href="admin/admin.php" class="dropdown-item">Admin login</a></li>
                        </ul>
                    </li>
                    <!-- <li c lass="nav-item me-lg-2"><a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fa-solid fa-user px-2"></i>Sign In</a></li> -->
                    <li class="nav-item me-lg-4"><a href="" class="nav-link"><i
                                class="fa-solid fa-cart-shopping px-2"></i>Cart</a></li>

                </ul>
                <div class="d-flex">
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
                      <li><a class="dropdown-item" href="logout.php">Log-out</a></li>
                    </ul>
                  </div>
                  data;
                  }
                  else {
                    echo <<<data
                <button type="submit" class="btn btn-outline-dark me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                <button type="submit" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#registerModal">Sign in</button>
                data;
                }
                  ?>

                </div>
            </div>
        </nav>
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="loginModalLabel">
                            <i class="fa-solid fa-circle-user fs-3 me-2"></i>Login
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id=login-form>
                            <div class="mb-3">
                                <label class="form-label">Phone/Email</label>
                                <input type="text" class="form-control" name="email_mob">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="pass">
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <button type="submit" class="btn btn-dark shadow-none">Login</button>
                                <a href="/forgot-password" class="text-secondary text-decoration-none">Forgot
                                    password</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="registerModalLabel">
                            <i class="fa-solid fa-circle-user fs-3 me-2"></i>Register
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="step-1">
                            <form id="register-form">
                                <div class="row">
                                    <div class="col-md-6 mb-1">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" />
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-1">
                                        <label class="form-label">Mobile No.</label>
                                        <input type="text" class="form-control" name="phone_number" />
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-1">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" />
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" name="c_password" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <textarea class="form-control" name="address"></textarea>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-md-6 mb-1">
                                        <label for="bank-name" class="form-label">Bank Name</label>
                                        <input type="text" class="form-control" id="bank-name" />
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <label for="account-no" class="form-label">Account No.</label>
                                        <input type="text" class="form-control" name="account_no" id="account-no" />
                                    </div>
                                </div> -->
                                <!-- <div class="row">
                                    <div class="col-md-6 mb-1">
                                        <label for="ifsc-code" class="form-label">IFSC Code</label>
                                        <input type="text" class="form-control" id="ifsc-code" />
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="branch-name" class="form-label">Branch Name</label>
                                        <input type="text" class="form-control" id="branch-name" />
                                    </div>
                                  </div> -->

                                <button type="submit" name="submit" class="btn btn-dark" id="submit-btn">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
</header>
<!-- <header>
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
                  <li class="nav-item me-1"><a href="" class="nav-link"><i class="fa-solid fa-house px-2"></i>Home</a> </li>
                  <li class="nav-item me-1"><a href="" class="nav-link"><i class="fa-solid fa-magnifying-glass px-2"></i>Search</a> </li>
                  <li class="nav-item dropdown me-lg-3">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-solid fa-handshake px-2"></i>Partnership</a>
                    <ul class="dropdown-menu">
                      <li><a href="res-lo.php" class="dropdown-item">Restaurant</a></li>
                      <li><a href="delivery.php" class="dropdown-item">Courier service</a></li>
                      <li><a href="" class="dropdown-item">Admin login</a></li>
                    </ul>
                  </li>
                  <li class="nav-item me-lg-2"><a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fa-solid fa-user px-2"></i>Sign In</a></li>
                  <li class="nav-item me-lg-2"><a href="" class="nav-link"><i class="fa-solid fa-cart-shopping px-2"></i>Cart</a></li>
                  
                </ul>
              </div>
            </nav> -->


<!-- modal -->

<!-- <div class="modal" id="loginModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form action="" method="POST">
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
                        <button type="submit" name="submit" class="btn btn-dark shadow-none">Register</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div> -->
<!-- <script>
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
                    document.getElementById('login-register-toggle').innerText = 'Login';
                    document.getElementById('register-toggle').style.display = 'inline';
                    document.getElementById('login-link').remove();
                  }); -->
<!-- // document.querySelector('#register-fields button[type="submit"]').addEventListener('click', function(event) {
                  //   event.preventDefault();
                  // document.querySelector('form').submit(); -->
<!-- });
        // }); -->
<!-- </script>
          </div>
        </div>
      </div>
    </header> -->
<!-- modal -->

<!-- <div class="modal" id="loginModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form action="" method="POST">
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
                        <button type="submit" name="submit" class="btn btn-dark shadow-none">Register</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div> -->

<!-- <script>
    var formSubmitted = false;
    window.onbeforeunload = function() {
        if (formSubmitted) {
            return "You have already submitted the form. Are you sure you want to refresh the page?";
        }
    };
    document.getElementById("myForm").addEventListener("submit", function() {
        formSubmitted = true;
    });
</script> -->