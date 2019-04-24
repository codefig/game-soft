<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ADd Sessions</title>

  <!-- Custom fonts for this template-->


  <!-- Bootstrap core CSS-->
  <link href={{ URL::to("vendor/vendor/bootstrap/css/bootstrap.min.css") }} rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href={{ URL::to("vendor/vendor/fontawesome-free/css/all.min.css") }} rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href={{ URL::to("vendor/css/sb-admin.css") }} rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">Login Screens:</h6>
                <a class="dropdown-item" href="login.html">Login</a>
                <a class="dropdown-item" href="register.html">Register</a>
                <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Other Pages:</h6>
                <a class="dropdown-item" href="404.html">404 Page</a>
                <a class="dropdown-item active" href="blank.html">Blank Page</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.session.create') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Create New Session</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.session.all') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>View All Sessions</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.category.create') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Add Category</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.category.all') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>View All Categories</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.stage.create') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Add Stage</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.stage.all') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>All Stages</span></a>
            </li>
          </ul>


    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Blank Page</li>
        </ol>

        <!-- Page Content -->
        <h1>Add Category</h1>

        @if(!count($laps)> 0)
            <div class="alert alert-danger">Please Create Test Laps before adding categories </div>
        @endif
        <hr>
        <div class="container bodycontainer">

            <form method="post" action="{{ route('admin.category.create.post') }}">

                <div class="form-group">
                    <label> Name </label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" />
                </div>

                <div class="form-group">
                    <label> Description </label>
                    <input type='text' class="form-control" id="description" name="description" />
                </div>

                <div class="form-group">
                    <label> Session/Lap </label>
                    <select  class="form-control" name="session_id">

                        @if(count($laps) > 0)
                            @foreach($laps as $lap)
                            <option value="{{ $lap->id }}"> {{ $lap->name }} </option>
                            @endforeach
                        @endif

                    </select>
                </div>

                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ Session::token() }}" />
                    <button type="submit" name="submitBtn" class="btn btn-info"> Add Category</button>
                </div>
            </div>

        </form>

        <div class='alert alert-danger' style="visibility: {{ (count($errors) > 0) ? 'visible' : 'hidden' }}">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                  <strong>Whoops!</strong> There were some problems with your input.<br><br>
                  <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </div>


              <div class="alert alert-success" style="visibility: {{ Session::has('success') ? 'visible' : 'hidden' }}">
                  {{ Session::get('success') }}
              </div>
              </div>
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ route('admin.logout') }}">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <!-- Bootstrap core JavaScript-->
  <script src={{ URL::to("vendor/vendor/jquery/jquery.min.js") }}></script>
  <script src={{ URL::to("vendor/vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>

  <!-- Core plugin JavaScript-->
  <script src={{ URL::to("vendor/vendor/jquery-easing/jquery.easing.min.js") }}></script>


  <!-- Custom scripts for all pages-->
  <script src={{ URL::to("vendor/js/sb-admin.min.js") }}></script>

</body>

</html>
