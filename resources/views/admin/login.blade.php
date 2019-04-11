<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href={{ URL::to("vendor/vendor/bootstrap/css/bootstrap.min.css") }} rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href={{ URL::to("vendor/vendor/fontawesome-free/css/all.min.css") }} rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href={{ URL::to("vendor/css/sb-admin.css") }} rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form method="post" action="{{ route('admin.postlogin') }}">
            <div class="form-group">
              <div class="form-label-group">
                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>

            <input type='hidden' name="_token" value="{{ Session::token() }}" />
            <button class="btn btn-primary btn-lg" type="submit" name="submit" >Login</button>
          </form>
          <div class="text-center">
              <br/>
            <div class="alert alert-danger">
                This is for the admin
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src={{ URL::to("vendor/vendor/jquery/jquery.min.js") }}></script>
    <script src={{ URL::to("vendor/vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>

    <!-- Core plugin JavaScript-->
    <script src={{ URL::to("vendor/vendor/jquery-easing/jquery.easing.min.js") }}></script>

  </body>

</html>
