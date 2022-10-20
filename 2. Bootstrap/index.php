<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .nav-item{
            padding-right: 50px;
        }
        .carousel-item img{
            height: 100vh;
        }

        @media screen and (max-width: 576px){
            .carousel-item img{
            height: 50vh;
            }
        }

        section#info, section#about, section#home, section#location{
            padding-bottom: 50px;
        }
        p {
            text-align: justify;
        }
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
  <nav id="navbar-custom" class="navbar navbar-expand-lg fixed-top navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Resa Auliana Risyan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#info">Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#location">Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section id="home">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img1.webp" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="img/img2.webp" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="img/img3.webp" class="d-block w-100">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
<section id="info">
    <div class="container" data-aos="fade-up">
        <h1 class="text-center">Information</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about">
<div class="container-fluid">
        <h1 class="text-center">About</h1>
        <div class="row pb-3">
            <div class="col-md-6" data-aos="fade-up">
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores, beatae fugiat maiores autem impedit quam consequuntur. Error odio incidunt, placeat repellat quaerat ab, nobis esse voluptate cupiditate a, similique adipisci?</p>
            </div>
            <div class="col-md-6" data-aos="fade-down">
            <img src="img/person.webp" class="img-rounded" width="100%">
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-md-6" data-aos="fade-up">
            <img src="img/person.webp" class="img-rounded" width="100%">
            </div>
            <div class="col-md-6" data-aos="fade-down">
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores, beatae fugiat maiores autem impedit quam consequuntur. Error odio incidunt, placeat repellat quaerat ab, nobis esse voluptate cupiditate a, similique adipisci?</p>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-md-6" data-aos="fade-up">
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores, beatae fugiat maiores autem impedit quam consequuntur. Error odio incidunt, placeat repellat quaerat ab, nobis esse voluptate cupiditate a, similique adipisci?</p>
            </div>
            <div class="col-md-6" data-aos="fade-down">
            <img src="img/person.webp" class="img-rounded" width="100%">
            </div>
        </div>
    </div>
</section>
<section id="location" data-aos="fade-up">
    <div class="container">
    <h1 class="text-center">Location</h1>
        <div class="row">
        <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Universitas%20Suryakancana,%20Jalan%20Pasirgede%20Raya,%20Bojongherang,%20Kabupaten%20Cianjur,%20Jawa%20Barat&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>
</section>
<section id="contact" class="bg-primary" data-aos="fade-down">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-white">
                <h1>Contact</h1>
                <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, maxime reprehenderit enim porro nam voluptatum sunt accusamus in rerum, commodi culpa fuga corrupti optio iste, fugiat consectetur autem voluptate nostrum.</p>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container-fluid" style="height: 50px">
        <div class="row text-center">
            <span class="pt-2">Copyright@2022</span>
        </div>
    </div>
</footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        $(document).ready(function(){
            $(window).scroll(function(){
            if($(this).scrollTop()>=50){
                $('#navbar-custom').addClass( "bg-primary" );  
                $('#navbar-custom').addClass( "navbar-dark" );
                $('#navbar-custom').removeClass( "navbar-light" );                              
            } else{
                $('#navbar-custom').removeClass( "bg-primary" );  
                $('#navbar-custom').removeClass( "navbar-dark" );
                $('#navbar-custom').addClass( "navbar-light" );             
            }
        });
        });
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>