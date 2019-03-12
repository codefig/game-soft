<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Register | IQ Game</title>

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
          <a href="index.html" class="brand-logo">
            <img src="img/logo.svg" alt="IQ Game">
          </a>
          <div class="button_container" id="toggle">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
          </div>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="faq.html">Faq</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="login.html" class="btn btn-transparent">Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="overlay-navbar" id="overlay">
    <nav class="overlay-menu">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="faq.html">Faq</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="login.html" class="btn btn-transparent">Login</a></li>
      </ul>
    </nav>
  </div>
  <section class="login-form">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-6 mx-auto">
                <div class="custom-card">
                    <img class="brand-logo" src="img/logo.svg">
                    <form>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input placeholder="First name" type="text" id="firstname" class="form-control" />
                            </div>
                            <div class="col-md-6 form-group">
                                <input placeholder="Last name" type="text" id="lastname" class="form-control" />
                            </div>
                            <div class="col-md-6 form-group">
                                <input placeholder="Username" type="text" id="username" class="form-control" />
                            </div>
                            <div class="col-md-6 form-group">
                                <input placeholder="Email" type="email" id="email" class="form-control" />
                            </div>
                            <div class="col-md-12 form-group">
                                <input placeholder="Password" type="password" id="password" class="form-control" />
                            </div>
                            <div class="col-md-12 form-group">
                                <input placeholder="Confirm password" type="password" id="confirm-password" class="form-control" />
                            </div>
                        </div>
                    </form>
                    <a href="#" class="btn btn-lg btn-primary-i">Register</a>
                    <div class="divider"></div>
                    <p class="text-center">Already a member? <a href="login.html" class="register">Login</a></p>
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