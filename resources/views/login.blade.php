<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login | IQ Game</title>

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
                        <li><a href="{{ route('index') }}" class="active">Home</a></li>
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
  <section class="login-form">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-4 mx-auto">
                <div class="custom-card">
                    <img class="brand-logo" src="img/logo.svg">
                    <a href="#" class="btn btn-lg btn-primary-i facebook">Login with Facebook</a>
                    <a href="#" class="btn btn-lg btn-primary-i google">Login with Google</a>
                    <form method="POST" action="{{ route('login.post') }}">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input placeholder="Email" type="email" name="email" id="email" class="{{ ($errors->first('email') ? "form-control error" : "form-control") }}" />
                                <p class="error-message">{{ $errors->first('email') }}</p>
                            </div>
                            <div class="col-md-12 form-group">
                                <input placeholder="Password" type="password" name="password" id="password" class="{{ ($errors->first('password') ? "form-control error" : "form-control") }}" />
                                <p class="error-message">{{ $errors->first('password') }}</p>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary-i login">Login</button>
                        <input type="hidden" name="_token" value="{{ Session::token() }}" />
                    </form>
                    <div class="d-flex justify-content-between">
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Remember me</label>
                        </div>
                        <a href="#" class="forgot-password">Forgot password?</a>
                    </div>
                    <div class="divider"></div>
                    <a href="{{ route('register') }}" class="register">Register now</a>
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
