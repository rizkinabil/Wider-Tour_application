<!DOCTYPE html>
<html lang="en">

<head>
  <title>Wider Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="">Wider<span>Travel Agency</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="{{route('index')}}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{route('packages')}}" class="nav-link">Destination</a></li>
          <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
          <li class="nav-item active"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
          <li class="nav-item cta"><a href="{{route('login')}}" class="nav-link"> Travel</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/destination-12.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">Contact Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="">Home <i class="ion-ios-arrow-forward"></i></a></span>
            <span>Contact us <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pb contact-section">
    <div class="container">
      <div class="row d-flex contact-info">
        <div class="col-md-3 d-flex">
          <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="icon-map-signs"></span>
            </div>
            <h3 class="mb-2">Address</h3>
            <p style="color: black;"> <span style="font-weight: bold;"> Telkom University </span>  <br> Bojogsoang <br>Kab. Bandung <br> Jawa Barat - Indoensia
              </p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="icon-phone2"></span>
            </div>
            <h3 class="mb-2">Contact Number</h3>
            <p><a href="tel://1234567920">0821338377</a></p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="icon-paper-plane"></span>
            </div>
            <h3 class="mb-2">Email Address</h3>
            <p><a href="Faisaltsurya@gmail.com">Faisaltsurya@gmail.com</a></p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="icon-globe"></span>
            </div>
            <h3 class="mb-2">Website</h3>
            <p><a href="#">Wider.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-6 order-md-last d-flex">
          <!-- Success message -->
          @if(Session::has('success'))
          <div class="alert alert-success">
            {{Session::get('success')}}
          </div>
          @endif
          <form action="#" method="POST" action="{{route('contact.store')}}" class="bg-light p-5 contact-form">
            @csrf
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">

              <!-- Error -->
              @if ($errors->has('name'))
              <div class="error">
                {{ $errors->first('name') }}
              </div>
              @endif
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email"
                id="email">

              @if ($errors->has('email'))
              <div class="error">
                {{ $errors->first('email') }}
              </div>
              @endif
            </div>

            

            <div class="form-group">
              <label>Subject</label>
              <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                id="subject">

              @if ($errors->has('subject'))
              <div class="error">
                {{ $errors->first('subject') }}
              </div>
              @endif
            </div>

            <div class="form-group">
              <label>Message</label>
              <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                rows="4"></textarea>

              @if ($errors->has('message'))
              <div class="error">
                {{ $errors->first('message') }}
              </div>
              @endif
            </div>
            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
          </form>

        </div>

        <div class="col-md-6 d-flex">
          <div id="map" class="bg-white">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.30488293673!2d107.62610301564085!3d-6.973311156442808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adf177bf8d%3A0x437398556f9fa03!2sTelkom%20University!5e0!3m2!1sen!2sid!4v1649121321195!5m2!1sen!2sid" width="500" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Wider</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Categories</h2>
            @foreach ($categories as $category)
            <div class="col-6">
              <a href="#">
                {{$category->name}}
              </a>

            </div>
            @endforeach
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Tags</h2>
            @foreach ($tags as $tag)
            <div class="col-6">
              <a href="#">
                {{$tag->name}}
              </a>
            </div>
            @endforeach
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text"> <p> <span style="font-weight: bold;"> Telkom University </span>  <br> Bojogsoang <br>Kab. Bandung <br> Jawa Barat
              </p></span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">0821338377</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span
                      class="text">Faisaltsurya@gmail.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" /></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
  </script> -->
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
