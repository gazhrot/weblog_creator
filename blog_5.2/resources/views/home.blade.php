
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>JAJABLOG</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href=" {{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href=" {{ asset('css/mdb.min.css') }}" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */

        main {
            margin-top: 3rem;
        }

        .lead {
            text-align: justify;
        }

        @media only screen and (max-width: 768px) {
            .post-title {
                margin-top: 1rem;
            }
        }

        @media only screen and (max-width: 768px) {
            .read-more {
                text-align: center;
            }
        }

        .extra-margin {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }
    </style>

</head>

<body>

<header>
    <!--Navbar-->
    <nav class="navbar navbar-dark primary-color-dark">

        <!-- Collapse button-->
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            <i class="fa fa-bars"></i>
        </button>

        <div class="container">

            <!--Collapse content-->
            <div class="collapse navbar-toggleable-xs" id="collapseEx">
                <!--Navbar Brand-->
                <a class="navbar-brand" href="{{ URL::to('/') }}">JAJABLOG</a>
                <!--Links-->
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ URL::to('/') }}">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <!--Search form-->
                <form class="form-inline">
                    <a class="btn btn-danger" href="{{ URL::to('/logout') }}">Déconnexion</a>
                </form>

            </div>
            <!--/.Collapse content-->

        </div>

    </nav>
    <!--/.Navbar-->
</header>

<main>

    <!--Main layout-->
    <div class="container">
        <div class="row">

            <!--Main column-->
            <div class="col-lg-8">

                    @yield('content')

                <hr>

            </div>

            <!--Sidebar-->
            <div class="col-lg-4">

                <div class="widget-wrapper">
                    <br>
                    <h4>Suivis:</h4>
                    <br>
                    <div class="card">
                        <div class="card-block">
                            <div class="chip">
                                <img src="http://mdbootstrap.com/images/avatars/img%20(2).jpg" alt="Contact Person"> Jane Doe
                            </div>

                            <div class="chip">
                                <img src="http://mdbootstrap.com/images/avatars/img%20(1).jpg" alt="Contact Person"> Jane Doe
                            </div>

                            <div class="chip">
                                <img src="http://mdbootstrap.com/images/avatars/img%20(4).jpg" alt="Contact Person"> Jane Doe
                            </div>

                            <div class="chip">
                                <img src="http://mdbootstrap.com/images/avatars/img%20(3).jpg" alt="Contact Person"> Jane Doe
                            </div>

                            <div class="chip">
                                <img src="http://mdbootstrap.com/images/avatars/img%20(2).jpg" alt="Contact Person"> Jane Doe
                            </div>

                            <div class="chip">
                                <img src="http://mdbootstrap.com/images/avatars/img%20(1).jpg" alt="Contact Person"> Jane Doe
                            </div>

                            <div class="chip">
                                <img src="http://mdbootstrap.com/images/avatars/img%20(4).jpg" alt="Contact Person"> Jane Doe
                            </div>

                            <div class="chip">
                                <img src="http://mdbootstrap.com/images/avatars/img%20(3).jpg" alt="Contact Person"> Jane Doe
                            </div>

                            <div class="chip">
                                <img src="http://mdbootstrap.com/images/avatars/img%20(2).jpg" alt="Contact Person"> Jane Doe
                            </div>

                            <div class="chip">
                                <img src="http://mdbootstrap.com/images/avatars/img%20(1).jpg" alt="Contact Person"> Jane Doe
                            </div>

                            <div class="chip">
                                <img src="http://mdbootstrap.com/images/avatars/img%20(4).jpg" alt="Contact Person"> Jane Doe
                            </div>

                            <div class="chip">
                                <img src="http://mdbootstrap.com/images/avatars/img%20(3).jpg" alt="Contact Person"> Jane Doe
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!--/.Sidebar-->
        </div>
    </div>
    <!--/.Main layout-->

</main>


<!--/.Footer-->

<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src=" {{ asset('js/jquery-3.1.1.min.js') }}"></script>
<!-- Tooltips -->
<script type="text/javascript" src=" {{ asset('js/tether.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src=" {{ asset('js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src=" {{ asset('js/mdb.min.js') }}"></script>

<script>
    new WOW().init();

    // Material Select Initialization
    $(document).ready(function() {
        $('.mdb-select').material_select();
    });
</script>

</body>

</html>