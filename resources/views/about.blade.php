<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>About Us | IQ Game</title>

  <!--Favicon-->
  <link rel="icon" href="img/favicon.png" />

  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/media.css" rel="stylesheet">
</head>

<body>
        <nav class="custom-nav fixed-top">
                <div class="container">
                  <div class="row w-100">
                    <div class="col-md-12">
                      <a href="{{ route('index') }}" class="brand-logo">
                        <img src="img/logo.svg" alt="IQ Game">
                      </a>
                      <div class="button_container" id="toggle">
                        <span class="top"></span>
                        <span class="middle"></span>
                        <span class="bottom"></span>
                      </div>
                      <ul>
                        <li><a href=""{{ route('index') }} class="active">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('faq') }}">Faq</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('login') }}" class="btn btn-transparent">Login</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
              <div class="overlay-navbar" id="overlay">
                <nav class="overlay-menu">
                  <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('faq') }}">Faq</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('login') }}" class="btn btn-transparent">Login</a></li>
                  </ul>
                </nav>
              </div>

  <header class="other-pages">
    <div class="container h-100">
      <div class="row">
          <div class="col-md-12">
            <div>
                <div class="header-text--stroke"></div>
                <h1>About Us</h1>
            </div>
            <div class="about-header-image">
              <img src="img/about/about-header-illustration.PNG" alt=""/>
            </div>
          </div>
        </div>
    </div>
  </header>
  <section class="about get-to-know-us">
    <div class="container">
      <div class="row align-items-center mb-5">
        <div class="col-sm-12 col-md-12 col-lg-6">
          <h2>GET TO KNOW ABOUT US</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur.</p>
          <a href="#" class="btn btn-primary-i">Read more</a>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="get-to-know-us-illustration">
              <img src="img/get-to-know-us.svg" alt="">
            </div>
          </div>
      </div>
    </div>
    <div class="about-us-overlay">
      <img src="img/about/about-us-overlay.png"/>
    </div>
  </section>

  <section class="about-cta">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4>Enjoy every moment of your experience</h4>
          <a href="#" class="btn btn-lg btn-primary">Register</a>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container h-100 d-flex justify-content-center flex-column">
      <div class="row mb-5">
        <div class="col-lg-8 mx-auto">
          <div class="subscribe">
            <input type="email" name="email" placeholder="yourmail@example.com">
            <button type="submit">Subscribe</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
          <h2>Enjoy every moment of your experience</h2>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
          <div class="support">
            <img src="img/envelope.svg" alt>
            <p>support@gamesoft.com</p>
          </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
          <div class="social-media-icons">
            <img src="img/facebook.svg" alt>
            <img src="img/google-plus.svg" alt>
            <img src="img/youtube.svg" alt>
            <img src="img/twitter.svg" alt>

          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$('.button_container').click(function () {
			$(this).toggleClass('active');
			$('#overlay').toggleClass('open');
    });
	</script>
</body>

</html>
