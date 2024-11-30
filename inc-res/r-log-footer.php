<div class="section bg-light">
    
    <!-- <div class="row"> -->
        <div class="testimonials">
            <div id="mycarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <h2 class="header-section">
        Our Happy Partners
        <!-- <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat, eos.</span> -->
    </h2>
                        <div class="carousel-item active">
                            <div class="single-item">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="profile">
                                            <div class="img-area">
                                                <img src="Imgs/r-testi/ma.jpg" class="d-block w-100" alt=""> 
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus saepe expedita consequuntur iure pariatur praesentium, corporis eos quas, officia repudiandae molestias dolorum id.</p>
                                        </div>
                                        <div class="bio">
                                                <h2>Mansi</h2>
                                                <h4>Lapinoz</h4>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                        <div class="single-item">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="profile">
                                            <div class="img-area">
                                                <img src="Imgs/r-testi/m.jpg" class="d-block w-100" alt=""> 
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus saepe expedita consequuntur iure pariatur praesentium, corporis eos quas, officia repudiandae molestias dolorum id.</p>
                                        </div>
                                        <div class="bio">
                                                <h2>Meet</h2>
                                                <h4>Shakti sandwich</h4>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                        <div class="single-item">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="profile">
                                            <div class="img-area">
                                                <img src="Imgs/r-testi/kri.jpg" class="d-block w-100" alt=""> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus saepe expedita consequuntur iure pariatur praesentium, corporis eos quas, officia repudiandae molestias dolorum id.</p>
                                        </div>
                                        <div class="bio">
                                                <h2>Krishnan iyyer</h2>
                                                <h4>Vadakkam dosa</h4>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                </div>
                <a href="#mycarousel" class="carousel-control-prev" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a href="#mycarousel" class="carousel-control-next" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    <!-- </div> -->
</div>
<script>
let register_form = document.getElementById('r-user');

register_form.addEventListener('submit', function(e) {
    e.preventDefault();

    let data = new FormData();
    data.append('name', register_form.elements['name'].value);
    data.append('email', register_form.elements['email'].value);
    data.append('mobile', register_form.elements['mobile'].value);
    data.append('username', register_form.elements['username'].value);
    data.append('password', register_form.elements['password'].value);
    data.append('c_password', register_form.elements['c_password'].value);
    data.append('address', register_form.elements['address'].value);
    data.append('bank-name', register_form.elements['bank-name'].value);
    data.append('branch-name', register_form.elements['branch-name'].value);
    data.append('account-no', register_form.elements['account-no'].value);
    data.append('ifsc-code', register_form.elements['ifsc-code'].value);
    data.append('res-name', register_form.elements['res-name'].value);
    data.append('res-email', register_form.elements['res-email'].value);
    data.append('res-mobile', register_form.elements['res-mobile'].value);
    data.append('res-address', register_form.elements['res-address'].value);
    data.append('res-fssai', register_form.elements['res-fssai'].value);
    data.append('register', '');

    // Hide the modal
    // var myModal = document.getElementById("registerModal");
    // var modal = bootstrap.Modal.getInstance(myModal);
    // modal.hide();

    console.log('form.data',data);
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/login_register(r).php", true);

    xhr.onload = function() {
        console.log('Response received:',this.responseText)
    let responseText = this.responseText.split(' ').pop();
    // console.log(typeof responseText)
    switch (responseText) {
        case '1':
            alert("Password Mismatch!");
            break;
        case '2':
            alert("Email is already registered!");
            break;
        case '3':
            alert("Phone number is already registered!");
            break;
        case '4':
            alert("Inseration not done");
            break;
        case '5':
            alert("Register sucessful! Waiting for admin approval.");
            register_form.reset();
            break;
        default:
            alert("unknown occured.");
    }
};
xhr.onerror = function() {
        console.log('Error occurred:', this.statusText);
        alert('Error occurred. Please try again.');
    };
    xhr.send(data);
});
let login_form = document.getElementById('r-login');

login_form.addEventListener('submit', function(e) {
    e.preventDefault();

    let data = new FormData();

    data.append('email_mob', login_form.elements['email_mob'].value);
    data.append('password', login_form.elements['password'].value);
    data.append('login', '');

    var myModal = document.getElementById("loginModal");
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();


    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/login_register(r).php", true);

    xhr.onload = function() {
    let responseText = this.responseText.split(' ').pop();
    //console.log(responseText)
    switch (responseText) {
        case '0':
            alert("Invalid Email or Mobile Number!");
            break;
        case '2':
            alert("Account Suspended! Please contact Admin.");
            break;
        case '4':
            alert("Incorrect Password!");
            break;
        case '5':
            alert("Your account is not allowed to log in (pending or rejected). Please contact support.");
            break;
        default:
            alert('Login successfully');
            window.location.href='restaurant.php';
                

    }
};
    xhr.send(data);
});



</script>