<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  		<link rel="stylesheet" href="assets/css/main.css" />
		  
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <style>

            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;

                text-transform: uppercase;
                 
            }
            .top-right{
               text-align: right;
               
            }
			.inner{
				text-align: left;
			}
	


        </style>
    </head>

   	<body class="is-preload">
		   @if (Route::has('login'))
		<div class="top-right links">
			@auth
				<a href="{{ url('/home') }}">Home</a>
			@else
				<a href="{{ route('login') }}">Login</a>

				@if (Route::has('register'))
					<a href="{{ route('register') }}">Register</a>
				@endif
			@endauth 
		
	@endif
		<!-- Header -->
			<section id="header">
				<header>
					<h1>I'm Mustafa Mohammadin</h1>
					<p>Wed Developer at Jahan Teck</p>
					

				</header>
				<footer>
					<a href="#banner" class="button style2 scrolly-middle">Proceed as anticipated</a>
				</footer>
			</section>

		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>About me</h2>
				</header>
				<p>Hi! I'm Mustafa Mohammadi.<br />
				Tortor faucibus ullamcorper nec tempus purus sed penatibus.<br />
				under the  Lacinia pellentesque eleifend vitae est elit tristique! </p>
				<footer>
					<a href="#first" class="button style2 scrolly">Act on this message</a>
				</footer>
			</section>

		<!-- Feature 1 -->
			<article id="first" class="container box style1 right">
				<a href="#" class="image fit"><img src="images/1.gif " alt="" /></a>
				<div class="inner">
					<header>
						<h2>Education<br />
						Detials</h2>
					</header>
					<p>Tortor faucibus ullamcorper nec tempus purus sed penatibus. Lacinia pellentesque eleifend vitae est elit tristique velit tempus etiam.</p>
				</div>
			</article>

		<!-- Feature 2 -->
			<article class="container box style1 left">
				<a href="#" class="image fit"><img src="images/2.gif" alt="" /></a>
				<div class="inner">
					<header>
						<h2>Work<br />
						Experince</h2>
					</header>
					<p>Rhoncus mattis egestas sed fusce sodales rutrum et etiam ullamcorper. Etiam egestas scelerisque ac duis magna lorem ipsum dolor.</p>
				</div>
			</article>
					<!-- Feature 3 -->
			<article id="first" class="container box style1 right">
				<a href="#" class="image fit"><img src="images/bg.gif " alt="" /></a>
				<div class="inner">
					<header>
						<h2>Deadline<br />
						dolor sit amet</h2>
					</header>
					<p>Tortor faucibus ullamcorper nec tempus purus sed penatibus. Lacinia pellentesque eleifend vitae est elit tristique velit tempus etiam.</p>
				</div>
			</article>
			
			

		<!-- Portfolio -->
			<article class="container box style2">
				<header>
					<h2>Magnis parturient</h2>
					<p>Justo phasellus et aenean dignissim<br />
					placerat cubilia purus lectus.</p>
				</header>
				<div class="inner gallery">
					<div class="row gtr-0">
						<div class="col-3 col-12-mobile"><a href="images/fulls/01.jpg" class="image fit"><img src="images/thumbs/01.jpg" alt="" title="Ad infinitum" /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/02.jpg" class="image fit"><img src="images/thumbs/02.jpg" alt="" title="Dressed in Clarity" /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/03.jpg" class="image fit"><img src="images/thumbs/03.jpg" alt="" title="Raven" /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/04.jpg" class="image fit"><img src="images/thumbs/04.jpg" alt="" title="I'll have a cup of Disneyland, please" /></a></div>
					</div>
					<div class="row gtr-0">
						<div class="col-3 col-12-mobile"><a href="images/fulls/05.jpg" class="image fit"><img src="images/thumbs/05.jpg" alt="" title="Cherish" /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/06.jpg" class="image fit"><img src="images/thumbs/06.jpg" alt="" title="Different." /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/07.jpg" class="image fit"><img src="images/thumbs/07.jpg" alt="" title="History was made here" /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/08.jpg" class="image fit"><img src="images/thumbs/08.jpg" alt="" title="People come and go and walk away" /></a></div>
					</div>
				</div>
			</article>

		<!-- Contact -->
			<article class="container box style3">
				<header>
					<h2>Contact Form</h2>
					<p>Please Submit Your Suggestion!</p>
				</header>
				<form method="post" action="#">
					<div class="row gtr-50">
						<div class="col-6 col-12-mobile"><input type="text" class="text" name="name" placeholder="Name" /></div>
						<div class="col-6 col-12-mobile"><input type="text" class="text" name="email" placeholder="Email" /></div>
						<div class="col-12">
							<textarea name="message" placeholder="Message"></textarea>
						</div>
						<div class="col-12">
							<ul class="actions">
								<li><input type="submit" value="Send Message" /></li>
							</ul>
						</div>
					</div>
				</form>
			</article>
		<section id="footer">
			<ul class="icons">
				<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon brands fa-google-plus-g"><span class="label">Google+</span></a></li>
				<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
				<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy;All rights reserved.</li><li>Design: <a href="http://html5up.net">Mustafa Mohammadi</a></li>
				</ul>
			</div>
		</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
