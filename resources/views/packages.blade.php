<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wider Destination</title>
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
    {{-- navbar --}}
    @include('site.partials.navbar')
    {{-- end navbar --}}
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/place-4.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Places to Travel</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>About us <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Best Place Destination</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate">
                    <div class="project-destination">
                        <a href="#" class="img" style="background-image: url(images/place-1.jpg);">
                            <div class="text">
                                <h3>Singapore</h3>
                                <span>8 Tours</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="project-destination">
                        <a href="#" class="img" style="background-image: url(images/place-2.jpg);">
                            <div class="text">
                                <h3>Canada</h3>
                                <span>2 Tours</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="project-destination">
                        <a href="#" class="img" style="background-image: url(images/place-3.jpg);">
                            <div class="text">
                                <h3>Thailand</h3>
                                <span>5 Tours</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="project-destination">
                        <a href="#" class="img" style="background-image: url(images/place-4.jpg);">
                            <div class="text">
                                <h3>Autralia</h3>
                                <span>5 Tours</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container">
	    	<div class="row">
					<div class="col-md-12 mb-5">
						<div class="search-wrap-1 search-wrap-notop ftco-animate p-4">
							<form action="#" class="search-property-1">
		        		<div class="row">
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Destination</label>
		          				<div class="form-field">
		          					<div class="icon"><span class="ion-ios-search"></span></div>
				                <input type="text" class="form-control" placeholder="Search place">
				              </div>
			              </div>
		        			</div>
		        			
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Price Limit</label>
		        					<div class="form-field">
		          					<div class="select-wrap">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="" id="" class="form-control">
		                        <option value="">$5,000</option>
		                        <option value="">$10,000</option>
		                        <option value="">$50,000</option>
		                        <option value="">$100,000</option>
		                        <option value="">$200,000</option>
		                        <option value="">$300,000</option>
		                        <option value="">$400,000</option>
		                        <option value="">$500,000</option>
		                        <option value="">$600,000</option>
		                        <option value="">$700,000</option>
		                        <option value="">$800,000</option>
		                        <option value="">$900,000</option>
		                        <option value="">$1,000,000</option>
		                        <option value="">$2,000,000</option>
		                      </select>
		                    </div>
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-self-end">
		        				<div class="form-group">
		        					<div class="form-field">
				                <input type="submit" value="Search" class="form-control btn btn-primary">
				              </div>
			              </div>
		        			</div>
		        		</div>
		        	</form>
		        </div>
					</div>
	    	</div>
	    </div>
    </section> --}}


    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Tour Destination</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($destinations as $destination)
                    <div class="col-md-4 ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/destination-2.jpg);">

                            </a>
                            <div class="text p-4">
                                <span class="price">
                                    {{ $destination->pricing }} / person
                                </span>
                                <span class="days">10 Days Tour</span>
                                <h3><a href="{{ route('desti.show', $destination->id) }}">
                                        {{ $destination->title }}
                                    </a></h3>
                                <ul>
                                    <p>
                                        {{ $destination->category->name }}
                                    </p>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $destinations->links() }}

        </div>
    </section>

    {{-- footer --}}
    @include('site.partials.footer')



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
