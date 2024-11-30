<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <?php include 'inc-cus/link.php';?>
    <style>
      .nav-item + .nav-item {
          margin-left: 10px;
        }
        .imagem-container {
    position: relative;
}

.image-text {
    position: absolute;
    top: 50%; 
    left: 26%; 
    transform: translate(-50%, -50%);
    color: black; 
    text-align: center; 
    font-size: 2.5vw;
    font-weight: bold; 
    line-height: 1.5; 
    padding: 20px; 
}
.section{
  display:grid;
  place-items:center;
  height:387px;
  /* background-color: pink; */
}
.header-section{
  position:relative;
  /* padding-bottom:10px; */
  text-align:center;
  font-weight:900;
  /* padding-top:79px; */
  color:black;
  margin-top:27px;
}
.header-section:after{
  content:'';
  position:absolute;
  height:3px;
  width:200px;
  bottom:0;
  left:cal(50% - 100px)
}
.header-section span{
  display:block;
  font-size:15px;
  font-weight:300;
}
.testimonials{
  max-width:1000px;
  padding:0 15px 0px;
  margin:0 auto 0px auto;
}
.single-item{
  background-color: #fff;
  color:#111;
  padding:14px;
  margin:19px 52px;
  height:259px;
}
.profile{
  margin-bottom: 30px;
  text-align:center;
}
.img-area{
  margin: 0 15px 15px 15px;
}
.img-area img{
  height:200px;
  width:200px;
  border-radius:50%;
  border:7px solid white;
}
.content{
  font-size:18px;
}
.content p{
  text-align:justify;
}
.bio h4{
  font-family:berkshire swash;
}
.carousel-control-prev-icon,
.carousel-control-next-icon{
  background-color: black;
}
@media (max-width:768px) {
            .single-item{
                height:511px;
            }
        }


    </style>
</head>
<body class="bg-light">
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2Q75FHbPTYL4tbdvFcLHhQrJh7xnt+VYyjQaQ7FhR" crossorigin="anonymous"></script> -->
    <?php include 'inc-res/r-log-header.php';?>
    
    <div class="imagem-container">
        <img src="https://www.kotak.com/content/dam/Kotak/article-images/hero-banners/partnership-deed-d.jpg" style="width:100%; height:270px"alt="">
        <div class="image-text">Join with Foodziee!!!<br>
                Increase Your online orders<br>
                Access Foodziee tools
        </div>
    </div>


    
    <?php include 'inc-res/r-log-footer.php';?>
    
</body>
</html>