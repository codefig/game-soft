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
      bottom: 0;
    }
  </style>
</head>

<body>
        <nav class="dashboard-nav custom-nav fixed-top">
                <div class="container">
                  <div class="row w-100">
                    <div class="col-md-12">
                      <a href="{{ route('index') }}" class="brand-logo">
                        <img src={{URL::to("img/logo.svg")}} alt="IQ Game">
                      </a>
                      <div class="button_container" id="toggle">
                        <span class="top"></span>
                        <span class="middle"></span>
                        <span class="bottom"></span>
                      </div>
                      <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('dashboard') }}" class="active">Dashboard</a></li>
                        <li><a href="{{ route('index') }}" class="btn btn-transparent">Log out</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
              <div class="overlay-navbar" id="overlay">
                  <nav class="overlay-menu">
                    <div class="user-info">
                      <img src={{URL::to("img/user-image.jpg")}} alt="User Name">
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
                        <li><a href="{{ route('categories') }}"><img src={{URL::to("img/dashboard/categories.svg")}} />Categories</a></li>
                        <li><a href="{{ route('notifications') }}"><img src={{URL::to("img/dashboard/notifications.svg")}} /><span class="notifications">5</span>Notifications</a></li>
                        <li><a href="{{ route('referrals') }}"><img src={{URL::to("img/dashboard/referrals.svg")}} />Referrals</a></li>
                        <li><a href="{{ route('index') }}" class="btn btn-transparent">Log out</a></li>
                      </ul>
                    </div>
                  </nav>
                </div>
              <section class="dashboard">
                <div class="dashboard-sidenav">
                  <div class="user-info">
                    <img src={{URL::to("img/user-image.jpg")}} alt="User Name">
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
                      <li><a href="{{ route('categories') }}"><img src={{URL::to("img/dashboard/categories.svg")}} />Categories</a></li>
                      <li><a href="{{ route('notifications') }}"><img src={{URL::to("img/dashboard/notifications.svg")}} /><span class="notifications">5</span>Notifications</a></li>
                      <li><a href="{{ route('referrals') }}"><img src={{URL::to("img/dashboard/referrals.svg" )}} />Referrals</a></li>
                    </ul>
                  </div>
                </div>


    <div class="dashboard-content referrals">
      <div class="row">
        <div class="col-lg-5">
          <div class="row">
            <div class="col-md-8 col-lg-12 mx-auto">
              <div class="custom-card small">
                <h4>Referrals Bonus</h4>
                <p>130</p>
              </div>
            </div>
            <div class="col-md-8 col-lg-12 mx-auto">
              <div class="custom-card small">
                <h4>Quiz Funds</h4>
                <p>7830</p>
              </div>
            </div>
            <div class="col-md-8 col-lg-12 mx-auto">
              <div class="custom-card small">
                <h4>Withdrawal</h4>
                <p>680</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-7 mx-auto">
            <div class="custom-card transactions">
                <h4 class="mb-3">Activity</h4>
                <div class="transaction">
                  <img src={{URL::to("img/dashboard/withdrawal.svg")}}>
                  <p>Requested a withdrawal of &#8358; 3850</p>
                </div>
                <div class="transaction">
                  <img src={{URL::to("img/dashboard/wins.svg")}}>
                  <p>Make a deposit of &#8358; 5600</p>
                </div>
                <div class="transaction">
                  <img src={{URL::to("img/dashboard/withdrawal.svg")}}>
                  <p>Requested a withdrawal of &#8358; 1200</p>
                </div>
                <div class="transaction">
                  <img src={{URL::to("img/dashboard/withdrawal.svg")}}>
                  <p>Requested a withdrawal of &#8358; 100</p>
                </div>
                <div class="transaction">
                  <img src={{URL::to("img/dashboard/withdrawal.svg")}}>
                  <p>Requested a withdrawal of &#8358; 3850</p>
                </div>
                <div class="transaction">
                  <img src={{URL::to("img/dashboard/wins.svg")}}>
                  <p>Make a deposit of &#8358; 5600</p>
                </div>
                <div class="transaction">
                  <img src={{URL::to("img/dashboard/withdrawal.svg")}}>
                  <p>Requested a withdrawal of &#8358; 1200</p>
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
                <img src={{URL::to("img/envelope.svg")}} alt>
                <p>support@gamesoft.com</p>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="social-media-icons">
                <img src={{URL::to("img/facebook.svg")}} alt>
                <img src={{URL::to("img/google-plus.svg")}} alt>
                <img src={{URL::to("img/youtube.svg")}} alt>
                <img src={{URL::to("img/twitter.svg")}} alt>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </section>

  <script src={{ URL::to("js/jquery-3.3.1.js") }}></script>
  <script src={{ URL::to("js/bootstrap.min.js") }} type="text/javascript"></script>
  <script src={{ URL::to("js/scripts.js") }} type="text/javascript"></script>
  <script type="text/javascript">
    $('.button_container').click(function () {
      $(this).toggleClass('active');
      $('#overlay').toggleClass('open');
    });
  </script>
</body>

</html>
