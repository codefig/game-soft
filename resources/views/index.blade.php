<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home | IQ Game</title>

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

  <header>
    <div class="container h-100">
      <div class="homepage-header">
        <div class="row w-100 align-items-center">
          <div class="col-md-12 col-lg-6">
            <div class="header-text--stroke"></div>
            <h1>An innovative IQ gaming platform<br>
              for best stages marques<br>
              implementation</h1>
            <p>Very important in the area of spectral aqutancancae for minimal<br>
              development of eltrocal cadets of based involvement</p>
            <div class="cta-button">
              <a href="#" class="btn btn-lg btn-primary">Register</a>
              <a href="#" class="btn btn-lg btn-transparent">Take Test</a>
            </div>
          </div>
          <div class="col-md-12 col-lg-6">
            <div class="homepage-illustration">
              <img src="img/homepage-header-illustration.svg" alt>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="get-to-know-us">
    <div class="container">
      <div class="row align-items-center mb-5">
        <div class="col-sm-12 col-md-12 col-lg-6">
          <div class="get-to-know-us-illustration">
            <img src="img/get-to-know-us.svg" alt="">
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
          <h2>GET TO KNOW ABOUT US</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur.</p>
          <a href="#" class="btn btn-primary-i">Read more</a>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-sm-12 col-md-12 col-lg-6">
          <h2>3 EXCLUSIVE GAMING CATEGORIES</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="row gaming-category">
        <div class="col-sm-10 col-md-4 col-lg-4 mx-auto">
          <div class="custom-card">
            <img src="img/basic-iq.jpg" alt="Basic IQ">
            <div class="custom-card-content">
              <h3>BASIC IQ</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua
              </p>
              <a href="#">Take Test...</a>
            </div>
          </div>
        </div>
        <div class="col-sm-10 col-md-4 col-lg-4 mx-auto">
          <div class="custom-card">
            <img src="img/sport.jpg" alt="Sports IQ" class="sport-img">
            <div class="custom-card-content">
              <h3>SPORTS IQ</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua
              </p>
              <a href="#">Take Test...</a>
            </div>
          </div>
        </div>
        <div class="col-sm-10 col-md-4 col-lg-4 mx-auto">
          <div class="custom-card">
            <img src="img/music.jpg" alt="Music/Movies IQ">
            <div class="custom-card-content">
              <h3>MUSIC/MOVIES IQ</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua
              </p>
              <a href="#">Take Test...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="referral">
    <div class="intro-text">
      <div class="container">
        <h1>DO YOU KNOW?</h1>
        <p>Our Special Referral Program Helps you to get back your register funds back.</p>
      </div>
    </div>
    <div class="container">
      <div class="referral-content">
        <div class="row">
          <h2>HOW OUR REFERRAL SYSTEM WORKS</h2>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <div class="referral-illustration">
              <img src="img/referral-illustration.svg" alt="Referral Method">
            </div>
          </div>
          <div class="col-lg-9">
            <div class="referral-steps">
              <div class="row">
                <div class="col-lg-6">
                  <div class="step i">1</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-lg-6">
                  <div class="step">2</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-lg-6">
                  <div class="step i">3</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-lg-6">
                  <div class="step">4</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="getting-started">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <h2>HOW TO GET STARTED AND PARTAKE OUT OF<br>THIS GAMING SYSTEM</h2>
      </div>
      <div class="getting-started-steps">
        <div class="row">
          <div class="col-lg-4">
            <div class="step">
              <div class="step-image">
                <img src="img/register.svg" alt>
              </div>
              <h3>STEP <span class="step-number">1</span></h3>
              <h3 class="s-heading">REGISTER / LOGIN</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="step">
              <div class="step-image">
                <img src="img/payment.svg" alt>
              </div>
              <h3>STEP <span class="step-number">2</span></h3>
              <h3 class="s-heading">PAYMENT</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="step">
              <div class="step-image">
                <img src="img/test.svg" alt>
              </div>
              <h3>STEP <span class="step-number">3</span></h3>
              <h3 class="s-heading">TEST</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mt-5">
        <a href="#" class="btn btn-primary-i btn-lg">Get Started</a>
      </div>
    </div>
  </section>
  <footer>
    <div class="container h-100 d-flex justify-content-center flex-column">
      <div class="row mb-5">
        <div class="col-lg-8 mx-auto">
        <form action="" class="subscribe">
            <input type="email" name="email" placeholder="yourmail@example.com">
            <button type="submit">Subscribe</button>
          </form>
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
