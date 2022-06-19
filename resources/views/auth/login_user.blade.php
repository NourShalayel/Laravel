
    <!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>Employee leave management system |  User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
    <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light py-3">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-center align-items-center" id="navbarNavAltMarkup">
        <div class="navbar-nav d-flex justify-content-center align-items-center">
            <!-- <a class="nav-item text-white font-weight-bold nav-link active ml-3" href="#">Home <span class="sr-only">(current)</span></a> -->
            <a class="nav-item text-white font-weight-bold nav-link ml-3" href="{{route('indexLogin')}}">Home</a>
            <a class="nav-item text-white font-weight-bold nav-link ml-3" href="{{route('addUser')}}">Add User</a>
            <a class="nav-item text-white font-weight-bold nav-link ml-3" href="{{route('loginUser')}}">Login</a>

        </div>
    </div>
</nav>
<main class="mn-inner mt-5">
    @include('admin.layout.message')

    <form action="{{route('authenticate')}}" method="post">
        @csrf
    <div class="row d-flex justify-content-center align-items-center">
        <h4 class="font-weight-bold text-center">Welcome User</h4>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <div class="card white darken-1">
                            <div class="card-content">
                                <span class="card-title" style="font-size:20px;">User Login</span>
                                <div class="row">
                                    <p>Enter email</p>
                                    <input type="email" class="form-control" placeholder="Email" name="email">

                                    <br>
                                    <p>Enter Password</p>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                    <br>
                                    <input type="submit" name="signin" value="Login"
                                         class="waves-effect waves-light btn teal">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</main>


<!-- Javascripts -->
<script src="../assets/plugins/jquery/jquery-2.2.0.min.js"></script>
<script src="../assets/plugins/materialize/js/materialize.min.js"></script>
<script src="../assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
<script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="../assets/js/alpha.min.js"></script>
</section>
</body>
</html>

