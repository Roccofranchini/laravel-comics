<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header id="header">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<img src="{{ asset('img/dc-logo.png') }}" alt="" />
				</div>
				<div class="col-6 d-flex align-items-center">
					<ul class="mb-0">
						<li><a href="">CHARACTERS</a></li>
                        <li><a href=""  class="active">COMICS</a></li>
                        <li><a href="">MOVIES</a></li>
                        <li><a href="">TV</a></li>
                        <li><a href="">GAMES</a></li>
                        <li><a href="">COOLECTIBLES</a></li>
                        <li><a href="">VIDEOS</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
    <main>
        <section id="content">
		    <section id="cartoon">
			    <span class="current-series">CURRENT SERIES</span>
		    </section>
		    <div class="container">
			    <div class="row">
				    <p>a</p>
			    </div>
		    </div>
	    </section>
    </main>
    <footer>
		<div class="container">
			<div class="d-flex h-100 align-items-center justify-content-between">
				<div class="sing-up">
					<a href="">SING-UP NOW!</a>
				</div>
				<div>
					<div class="social d-flex">
						<a href=""> FOLLOW US</a>
						<img src="{{ asset('img/footer-facebook.png') }}" alt="" />
						<img src="{{ asset('img/footer-twitter.png') }}" alt="" />
						<img src="{{ asset('img/footer-youtube.png') }}" alt="" />
						<img src="{{ asset('img/footer-pinterest.png') }}" alt="" />
						<img src="{{ asset('img/footer-periscope.png') }}" alt="" />
					</div>
				</div>
			</div>
		</div>
	</footer>
    <script src="asset('js/app.js')"></script>
</body>
</html>