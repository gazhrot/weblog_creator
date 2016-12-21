
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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

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
                    <input class="form-control" type="text" placeholder="Search">
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

                <!--Page heading-->
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="h1-responsive">Créer un article:</h1>
                    </div>
                </div>
                <!--/.Page heading-->
                <hr>

                <form action="" method="POST">
                    <!--First row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="form81" class="form-control validate" required>
                                <label for="form81" data-error="wrong" data-success="right">Titre</label>
                            </div>
                        </div>
                    </div>
                    <!--/.First row-->

                    <!--Second row-->
                    <div class="row">
                        <!--First column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="form76" class="md-textarea" required></textarea>
                                <label for="form76">Description</label>
                            </div>

                        </div>
                    </div>
                    <!--/.Second row-->

                    <div class="row">
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm">
                                <span>Choose file</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload your file">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="text-xs-center">
                            <button class="btn btn-primary">Valider</button>
                        </div>
                    </div>
                </form>



                <!--/.Page heading-->
                <hr>



                <!--Post-->
                <div class="post-wrapper">
                    <!--Post data-->
                    <h1 class="h1-responsive">Post title <small class="text-muted">Secondary text</small></h1>
                    <h5>Written by <a href="">John Doe</a>, 30.04.2016</h5>

                    <br>

                    <!--Featured image -->
                    <div class="view overlay hm-white-light z-depth-1-half">
                        <img src="http://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg" class="img-fluid " alt="">
                        <div class="mask">
                        </div>
                    </div>

                    <br>

                    <!--Post excerpt-->
                    {{ dd(Auth::user()->blog) }}
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, officia omnis. Vero nihil neque dignissimos hic voluptas quisquam amet porro, similique libero ullam veritatis tempora cumque voluptates harum. Repellendus, impedit.</p>

                    <!--"Détails" button-->
                    <button class="btn btn-primary">Détails</button>
                </div>
                <!--/.Post-->


                <!--Pagination-->
                <nav class="text-xs-center">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!--/.Pagination-->

                <hr>

            </div>

            <!--Sidebar-->
            <div class="col-lg-4">

                <div class="widget-wrapper">
                    <h4>Categories:</h4>
                    <br>
                    <div class="list-group">
                        <a href="#" class="list-group-item active">Sport</a>
                        <a href="#" class="list-group-item">Music</a>
                        <a href="#" class="list-group-item">Travels</a>
                        <a href="#" class="list-group-item">Fashion</a>
                        <a href="#" class="list-group-item">Parties</a>
                    </div>
                </div>



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


<!--Footer-->
<footer class="page-footer center-on-small-only primary-color-dark">
    <!--Copyright-->
    <div class="footer-copyright">
        <div class="containter-fluid">
            © 2015 Copyright: <a> JAJABLOG </a>
        </div>
    </div>
    <!--/.Copyright-->
</footer>
<!--/.Footer-->

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