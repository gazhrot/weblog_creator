
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap Template</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">



    <style>
        html,
        body,
        header,
        .view {
            height: 100%;
        }
        /* Navigation*/
        
        .navbar {
            background-color: transparent;
        }
        
        .top-nav-collapse {
            background-color: #3F729B;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #3F729B;
            }
        }
        /*Intro*/
        
        .view {
            background: url("http://mdbootstrap.com/images/regular/people/img%20(61).jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        
        @media (max-width: 768px) {
            .full-bg-img,
            .view {
                height: auto;
                position: relative;
            }
        }
        
        .description {
            padding-top: 25%;
            padding-bottom: 3rem;
            color: #fff
        }
        
        @media (max-width: 992px) {
            .description {
                padding-top: 7rem;
                text-align: center;
            }
        }
    </style>

</head>

<body>

    <!--Navigation & Intro-->
    <header>

        <!--Navbar-->
        <nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar">

            <!-- Collapse button-->
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            <i class="fa fa-bars"></i></button>

            <div class="container">

                <!--Collapse content-->
                <div class="collapse navbar-toggleable-xs" id="collapseEx">
                    <!--Navbar Brand-->
                    <a class="navbar-brand" href="#" target="_blank">JAJABLOG</a>
                    <!--Links-->
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>

                    <!--Navbar icons-->
                    <ul class="nav navbar-nav nav-flex-icons">

                        <li class="nav-item">
                            <a class="nav-link"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"><i class="fa fa-instagram"></i></a>
                        </li>

                    </ul>

                </div>
                <!--/.Collapse content-->

            </div>

        </nav>
        <!--/.Navbar-->

        <!--Mask-->
        <div class="view hm-black-strong">
            <div class="full-bg-img flex-center">
                <div class="container">
                    <div class="row" id="home">

                        <!--First column-->
                        <div class="col-lg-6">
                            <div class="description">
                                <h2 class="h2-responsive wow fadeInLeft">Inscription </h2>
                                <hr class="hr-dark wow fadeInLeft">
                                <p class="wow fadeInLeft" data-wow-delay="0.4s">
                                Pour se démarquer et se faire entendre à travers la cacophonie du web, 
                                il faut être plus qu'un simple site parmi des milliers.
                                Il faut offrir une raison VALABLE à l'individu de lire votre 
                                contenu et de s'intéresser à VOUS plutôt qu'aux milliers d'autres choses </p>
                            </div>
                        </div>
                        <!--/.First column-->

                        <!--Second column-->
                        <div class="col-lg-6">
                            <!--Form-->
                            <div class="card wow fadeInRight">
                                <div class="card-block">
                                    <!--Header-->
                                    <div class="text-xs-center">
                                        <h3><i class="fa fa-user"></i> Inscription:</h3>
                                        <hr>
                                    </div>

                                    <!--Body-->
                                    <div class="md-form">
                                        <i class="fa fa-user prefix"></i>
                                        <input type="text" id="form3" class="form-control">
                                        <label for="form3">Votre nom</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-envelope prefix"></i>
                                        <input type="text" id="form2" class="form-control">
                                        <label for="form2">Votre email</label>
                                    </div>

                                    <div class="md-form">
                                        <i class="fa fa-lock prefix"></i>
                                        <input type="password" id="form4" class="form-control">
                                        <label for="form4">Votre mot de passe</label>
                                    </div>

                                    <div class="text-xs-center">
                                        <button class="btn btn-ins btn-lg">Valider</button>
                                        <hr>
                                    </div>

                                </div>
                            </div>
                            <!--/.Form-->
                        </div>
                        <!--/Second column-->
                    </div>
                </div>
            </div>
        </div>
        <!--/.Mask-->

    </header>
    <!--/Navigation & Intro-->

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
        new WOW().init();
    </script>


</body>

</html>