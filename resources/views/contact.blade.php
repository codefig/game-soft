<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Contact Us | IQ Game</title>

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
                <h1>Contact Us</h1>
            </div>
            <div class="about-header-image">
              <img src="img/contact-us-illustration.jpg" alt=""/>
            </div>
          </div>
        </div>
    </div>
  </header>
  <section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="intro-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="custom-card">
                    <h4><span>Get in</span> touch with us!</h4>
                    <form>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input placeholder="Name" type="text" id="name" class="form-control" />
                            </div>
                            <div class="col-md-6 form-group">
                                <input placeholder="Email" type="email" id="email" class="form-control" />
                            </div>
                            <div class="col-md-12 form-group">
                                <input placeholder="Subject" type="text" id="subject" class="form-control" />
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea placeholder="Your message here" class="form-control" rows="6"></textarea>
                            </div>
                        </div>
                    </form>
                    <a href="#" class="btn btn-lg btn-primary-i">Send Message</a>
                </div>
            </div>
            <div class="col-md-6">
                    <div class="custom-card contact-details">
                        <h4><span>Get in</span> touch with us!</h4>
                        <p><img src="img/contact/mail.svg"/>prothemesgame@mail.com</p>
                        <p><img src="img/contact/location.svg"/>prothemesgame@mail.com</p>
                        <p><img src="img/contact/phone.svg"/>prothemesgame@mail.com</p>
                    </div>
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
