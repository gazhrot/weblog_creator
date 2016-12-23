
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
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



    <style>
        body {
            background: url("http://mdbootstrap.com/images/regular/nature/img%20(59).jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>

</head>

<body class="fixed-sn mdb-skin">

<!--Double Navigation-->
<header>

    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav fixed custom-scrollbar">

        <!-- Logo -->
        <li>
            <div class="logo-wrapper sn-ad-avatar-wrapper">
                <img src="http://mdbootstrap.com/images/avatars/img%20(9)" class="img-fluid rounded-circle">
                <div class="rgba-stylish-strong">
                    <p class="user white-text">{{ Auth::user()->name }}<br>{{ Auth::user()->email }}</p>
                </div>
            </div>
        </li>
        <!--/. Logo -->

        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">

                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-picture-o "></i> Mes blogs et amis<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{ url('/office') }}" class="waves-effect">Mes blogs</a>
                            </li>
                            <li><a href="{{ url('/edit') }}" class="waves-effect">Créer un blog</a>
                            </li>
                            <li><a href="{{ url('/friend') }}" class="waves-effect">Mes Amis</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-pencil"></i> Editer mes blogs <i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{ url('/editcat') }}" class="waves-effect">Les categories</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope"></i> Messagerie <i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{ url('/messagerie') }}" class="waves-effect">Messages</a>
                            </li>
                            <li><a href="{{ url('/write') }}" class="waves-effect">Ecrire un message</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </li>
        <!--/. Side navigation links -->

    </ul>
    <!--/. Sidebar navigation -->

    <!--Navbar-->
    <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">

        <!-- SideNav slide-out button -->
        <div class="float-xs-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
        </div>

        <!-- Breadcrumb-->
        <div class="breadcrumb-dn">
            <p>&nbsp;</p>
        </div>


        <ul class="nav navbar-nav float-xs-right">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Profile</a>
                <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <a class="dropdown-item" href="{{ url('/profil') }}">Editer profil</a>
                    <a class="dropdown-item" href="{{ url('/logout') }}">Deconnexion</a>
                </div>
            </li>
        </ul>

    </nav>
    <!--/.Navbar-->

</header>
<!--/Double Navigation-->

<!--Main layout-->
<main class="">
    <div class="container-fluid text-xs-center" style="height: 800px;">

        @yield('content')

    </div>
</main>
<!--/Main layout-->









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
    $(".button-collapse").sideNav();

    var el = document.querySelector('.custom-scrollbar');

    Ps.initialize(el);
</script>


</body>

</html>