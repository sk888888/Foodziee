<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Foodziee</title>
    <?php include 'inc-cus/link.php';?>
    
</head>
<!-- <script src="script.js"></script> -->

<body class="bg-light">
    
    <!-- navbar -->
    <?php
      include 'inc-cus/c-header.php';
      ?>
    <!-- navbar end -->
    
    <!-- carousel start -->
    <div class="container">
        <h2 class="mb-3" style="font-weight:bold;">Tasty items for you!!!</h2>
        <div class=" col-sm-6 owl-carousel owl-theme carousel slide" data-ride="carousel" id="carouselExampleControls">
            <div class="item">
                <a href=""><img src="Imgs/slider/burger.jpg" class="imgcircle" style="border-radius:50%;" alt=""></a>
                <h2 class="text-center">Burger</h2>
            </div>
            <div class="item">
                <a href=""><img src="Imgs/slider/sandwich.jpg" class="imgcircle" style="border-radius:50%;" alt=""></a>
                <h2 class="text-center">Sandwich</h2>
            </div>
            <div class="item">
                <a href=""><img src="Imgs/slider/pizza1.jpg" class="imgcircle" style="border-radius:50%;" alt=""></a>
                <h2 class="text-center">Pizza</h2>
            </div>
            <div class="item">
                <a href=""><img src="Imgs/slider/vadapav.jpg" class="imgcircle" style="border-radius:50%;" alt=""></a>
                <h2 class="text-center">Vada Pav</h2>
            </div>
            <div class="item">
                <a href=""><img src="Imgs/slider/frankie.jpg" class="imgcircle" style="border-radius:50%;" alt=""></a>
                <h2 class="text-center">Frankie</h2>
            </div>
            <div class="item">
                <a href=""><img src="Imgs/slider/frenchfries.jpg" class="imgcircle" style="border-radius:50%;"
                        alt=""></a>
                        <h2 class="text-center">French Fries</h2>
                    </div>
                    <div class="item">
                        <a href=""><img src="Imgs/slider/dosa.jpg" class="imgcircle" style="border-radius:50%;" alt=""></a>
                        <h2 class="text-center">Dosa</h2>
                    </div>
                    <div class="item">
                        <a href=""><img src="Imgs/slider/noodles.jpg" class="imgcircle" style="height:170px; border-radius:50%;"
                        alt=""></a>
                        <h2 class="text-center">Noodles</h2>
                    </div>
                    <div class="item">
                        <a href=""><img src="Imgs/slider/pasta.jpg" class="imgcircle" style="border-radius:50%;" alt=""></a>
                        <h2 class="text-center">Pasta</h2>
                    </div>
                    <!-- <div class="item"> 
                        <img src="Imgs/slider/burger.jpg" class="imgcircle" alt="">
                    </div> -->
                </div>
                <hr>
                <script>
        $('.owl-carousel').owlCarousel({
            // loop:true,
            margin: 10,
            nav: true,
            navText: [
                '<span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>',
                '<span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>'
            ],
            draggable: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
        </script>
        <!-- carousel end -->
        
        <!-- cards start -->
        <h3 class="mb-3">Top restaurant in Ahmedabad</h3>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="card border-0 shadow" style="max-width:300px;">
                        <img src="Imgs/card(restaurant)/lapi.jpg" class="card-img-top" style="max-height:250px;">
                        <div class="card-body">
                            <h5 class="card-title">Lapinoz Pizza</h5>
                            <h6 class="card-sub-title">&raquo;20-25mins</h6>
                            <p class="card-text"><i class="fa-solid fa-location-dot"></i>&nbsp;Shop
                            no.17,18 pusti mall,<br>relif-road,Ahmedabad</p>
                            <h6>&gt;PIZZA</h6>
                            <a href="#" class="btn btn-outline-dark">Visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="card border-0 shadow" style="max-width:300px;">
                        <img src="Imgs/card(restaurant)/shakti.jpg" class="card-img-top" style="max-height:250px;">
                        <div class="card-body">
                            <h5 class="card-title">Shakti Fastfood</h5>
                            <h6 class="card-sub-title">&raquo;10-15mins</h6>
                            <p class="card-text"><i class="fa-solid fa-location-dot"></i>&nbsp;Shop
                            no.20,21 rajesh mall,<br>relif-road,Ahmedabad</p>
                            <h6>&gt;SANDWICH</h6>
                            <a href="#" class="btn btn-outline-dark">Visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="card border-0 shadow" style="max-width:300px;">
                        <img src="Imgs/card(restaurant)/mc.jpg" class="card-img-top" style="max-height:250px;">
                        <div class="card-body">
                            <h5 class="card-title">MC Donald's</h5>
                            <h6 class="card-sub-title">&raquo;30-35mins</h6>
                            <p class="card-text"><i class="fa-solid fa-location-dot"></i>&nbsp;Shop
                            no.5,6 mansi mall,<br>relif-road,Ahmedabad</p>
                            <h6>&gt;BURGER,FRIES</h6>
                            <a href="#" class="btn btn-outline-dark">Visit</a>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card border-0 shadow" style="max-width:300px;">
                        <img src="Imgs/card(restaurant)/english.jpg" class="card-img-top" style="max-height:250px;">
                        <div class="card-body">
                            <h5 class="card-title">British Food</h5>
                            <h6 class="card-sub-title">&raquo;40-45mins</h6>
                            <p class="card-text"><i class="fa-solid fa-location-dot"></i>&nbsp;Shop
                            no.8,9 rushi mall,<br>relif-road,Ahmedabad</p>
                            <h6>&gt;FRANKIE</h6>
                            <a href="#" class="btn btn-outline-dark">Visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card border-0 shadow" style="max-width:300px;">
                        <img src="Imgs/card(restaurant)/vadkam.jpg" class="card-img-top" style="max-height:250px;">
                        <div class="card-body">
                            <h5 class="card-title">Vadakkam Dosa</h5>
                            <h6 class="card-sub-title">&raquo;35-40mins</h6>
                            <p class="card-text"><i class="fa-solid fa-location-dot"></i>&nbsp;Shop
                            no.1,2 anupam mall,<br>relif-road,Ahmedabad</p>
                            <h6>&gt;DOSA</h6>
                            <a href="#" class="btn btn-outline-dark">Visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card border-0 shadow" style="max-width:300px;">
                        <img src="Imgs/card(restaurant)/snackbar.jpg" class="card-img-top" style="max-height:250px;">
                        <div class="card-body">
                            <h5 class="card-title">Snack bar</h5>
                            <h6 class="card-sub-title">&raquo;20-25mins</h6>
                            <p class="card-text"><i class="fa-solid fa-location-dot"></i>&nbsp;Shop
                            no.8,9 rushi mall,<br>relif-road,Ahmedabad</p>
                            <h6>&gt;VADAPAV,NOODLES,PASTA</h6>
                            <a href="#" class="btn btn-outline-dark">Visit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cards end -->
    
    <!-- footer start -->
    
    <?php include 'inc-cus/c-footer.php';?>
    <!-- footer end -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>