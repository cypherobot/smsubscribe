<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Thank You</title>
        <!-- Fonts -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<link href="/css/style.css" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">
		

    </head>
    <body>

        <header class="showcase">
			<div class="showcase-content">
				<h1>Thank You</h1>
				<p> for your feedback on Airtel Xstream Fiber services.</p>
				</br>
                <h3>Please expect our network health expert to call soon to assist you</h3>
			</div>
		</header>

		<div class="responsive-buttons">
			<div class="button-section">
			<div class="card">
				<a href="https://www.airtel.in/mobile/terms-conditions" class="btn btn-large-screen">Terms and condition</a>
			</div>
			<div class="card">
				<a href="https://www.airtel.in/forme/privacy-policy" class="btn btn-large-screen">Privacy policy</a>
			</div>
			<div class="card">
				<a href="https://www.airtel.in/contact-us" class="btn btn-large-screen">Contact Us</a>
			</div>
			</div>
		</div>

		
		{{-- <div class="container">
			<div class="wrapper1">
				<h1>Download The App</h1>
				</br>
				<h3>The Application is available for the iOS & Android smartphones</h3>
				</br>
				<a href="https://www.airtel.in/5/dweb/">
					<div class="parent" >
						<div class="child bg-one"></div>
					</div>
				</a>

				<a href="https://www.airtel.in/5/dweb/">
					<div class="parent right">
						<div class="child bg-two"></div>
					</div>
				</a>
			</div>
		</div> --}}

		<h1>Hello</h1>

		<section class="tabs">
			<div class="container">
				<div id="tab-1" class="tab-item tab-border">
					<i class="fas fa-door-open fa-3x"></i>
					<p>Registered Office</p>
				</div>
			</div>
		</section>

		<section class="tab-content">
			<div class="container">
				<!-- Tab Content 1 -->
				<div id="tab-1-content" class="tab-content-item show">
					<div class="tab-1-content-inner">
						<div>
							<h3>Bharti Crescent, 1, Nelson Mandela Road, Vasant Kunj, Phase II, New Delhi - 110 070, India</h3>
						</div>
					</div>
                </div>
			</div>
		</section>


        <section class="tabs">
			<div class="container">
				<div id="tab-1" class="tab-item tab-border">
					<i class="fas fa-door-open fa-3x"></i>
					<p>Disclaimer</p>
				</div>
			</div>
		</section>

		<section class="tab-content">
			<div class="container">
				<!-- Tab Content 1 -->
				<div id="tab-1-content" class="tab-content-item show">
					<div class="tab-1-content-inner">
						<div>
						<h3> © 2019 Airtel India. All Rights Reserved.</h3>
				</div>
				</div>
                </div>
			</div>
		</section>

		<footer class="footer">
			<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
			<div class='demopadding'>
			<div class='icon social fb'><a href="https://www.facebook.com/AirtelIndia"><i class='fa fa-facebook'></i></a></div>
			<div class='icon social tw'><a href="https://twitter.com/airtelindia"><i class='fa fa-twitter'></i></a></div>
			<div class='icon social in'><a href="https://www.youtube.com/user/INAirtel"><i class='fa fa-youtube'></i></a></div>
			</div>
		</footer>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
