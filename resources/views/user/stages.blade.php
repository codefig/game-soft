<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Dashboard | IQ Game</title>

  <!--Favicon-->
  <link rel="icon" href={{ URL::to("img/favicon.png")}}/>

  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href={{ URL::to("css/bootstrap.min.css") }} />
  <link href={{ URL::to("css/style.css") }} rel="stylesheet">
  <link href={{ URL::to("css/media.css") }} rel="stylesheet">

  <style type="text/css">
    footer {
      position: absolute;
      width: 100%;
      left: 0;
    }
  </style>
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
            <li><a href="dashboard-index.html" class="active">Dashboard</a></li>
            <li><a href="index.html" class="btn btn-transparent">Log out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="overlay-navbar" id="overlay">
    <nav class="overlay-menu">
      <div class="user-info">
        <img src="img/user-image.jpg" alt="User Name">
        <div>
          <h4>Samantha David</h4>
          <div class="amount-in-account">
            <span>&#8358;500</span>
          </div>
        </div>
      </div>
      <div class="dashboard-activity">
        <a href="#" class="btn btn-primary-i">Activate Dashboard</a>
        <a href="#" class="btn btn-primary withdraw">Withdraw</a>
      </div>
      <div class="divider"></div>
      <div class="dashboard-link d-flex my-3">
        <input type="text" class="form-control mb-0" value="https://www.prothemesgame.coom/samantha-david0098acd3" />
        <a class="btn btn-primary-i">Copy</a>
      </div>
      <div class="divider"></div>
      <div class="dashboard-list">
        <ul>
          <li><a href="#"><img src="img/dashboard/categories.svg" />Categories</a></li>
          <li><a href="#"><img src="img/dashboard/notifications.svg" /><span class="notifications">5</span>Notifications</a></li>
          <li><a href="#"><img src="img/dashboard/referrals.svg" />Referrals</a></li>
          <li><a href="index.html" class="btn btn-transparent">Log out</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <section class="dashboard">
    <div class="dashboard-sidenav">
      <div class="user-info">
        <img src="img/user-image.jpg" alt="User Name">
        <div>
          <h4>Samantha David</h4>
          <div class="amount-in-account">
            <span>&#8358;500</span>
          </div>
        </div>
      </div>
      <div class="dashboard-activity">
        <a href="#" class="btn btn-primary-i">Activate Dashboard</a>
        <a href="#" class="btn btn-primary withdraw">Withdraw</a>
      </div>
      <div class="divider"></div>
      <div class="dashboard-link d-flex my-3">
        <input type="text" class="form-control mb-0" value="https://www.prothemesgame.coom/samantha-david0098acd3" />
        <a class="btn btn-primary-i">Copy</a>
      </div>
      <div class="divider"></div>
      <div class="dashboard-list">
        <ul>
          <li><a href="#"><img src="img/dashboard/categories.svg" />Categories</a></li>
          <li><a href="#"><img src="img/dashboard/notifications.svg" /><span class="notifications">5</span>Notifications</a></li>
          <li><a href="#"><img src="img/dashboard/referrals.svg" />Referrals</a></li>
        </ul>
      </div>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-md-8 col-lg-4 mx-auto">
          <h3>STAGE</h3>
          <div class="custom-card stage">
            <div class="stage-number">1</div>
            <div class="scored">
              <h5>SCORED</h5>
              <p>46</p>
            </div>
            <div class="attempted">
              <h5>ATTEMPTED QUESTIONS</h5>
              <p>12</p>
            </div>
            <div class="d-flex justify-content-between">
              <a href="test-interface.html" class="btn btn-primary-i">START</a>
              <span class="pill passed">PASSED</span>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-4 mx-auto">
          <h3>STAGE</h3>
          <div class="custom-card stage">
            <div class="stage-number">2</div>
            <div class="scored">
              <h5>SCORED</h5>
              <p>46</p>
            </div>
            <div class="attempted">
              <h5>ATTEMPTED QUESTIONS</h5>
              <p>12</p>
            </div>
            <div class="d-flex justify-content-between">
              <a href="test-interface.html" class="btn btn-primary-i">START</a>
              <span class="pill failed">FAILED</span>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-4 mx-auto">
          <h3>STAGE</h3>
          <div class="custom-card stage">
            <div class="stage-number">3</div>
            <div class="scored">
              <h5>SCORED</h5>
              <p>46</p>
            </div>
            <div class="attempted">
              <h5>ATTEMPTED QUESTIONS</h5>
              <p>12</p>
            </div>
            <div class="d-flex justify-content-between">
              <a href="test-interface.html" class="btn btn-primary-i">START</a>
              <span class="pill failed">FAILED</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-4">
          <h5>TEST PROGRESS</h5>
          <div class="custom-card">
            <div class="stage-progress">
              <p>STAGE 1 <img src="img/dashboard/stage-completed.svg" /></p>
              <p>68%</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </div>
            <div class="stage-progress">
              <p>STAGE 2 <img src="img/dashboard/stage-completed.svg" /></p>
              <p>23%</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 23%" aria-valuenow="23" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </div>
            <div class="stage-progress">
              <p>STAGE 3 <img src="img/dashboard/stage-uncompleted.svg" /></p>
              <p>0%</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer>
          <div class="container h-100">
            <div class="row align-items-center">
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
    </div>
  </section>


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
