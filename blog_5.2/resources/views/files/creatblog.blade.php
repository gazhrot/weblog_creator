@extends('item')

@section('content')

    <div class="container">

        <!--Page heading-->
        <div class="row">
            <div class="col-md-12">
                <h1 class="h1-responsive">Création de blog :</h1>
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
        <!--Page heading-->
        <div class="row">
            <div class="col-md-12">
                <h1 class="h1-responsive">Mes blogs</h1>
            </div>
        </div>
        <!--/.Page heading-->
        <hr>

        <!--First row-->
        <div class="row">
            <!--First column-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="http://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(13).jpg" class="img-fluid" alt="">
                        <a href="#!">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Card title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="read-more">
                            <a href="#!" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="http://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(1)" class="img-fluid" alt="">
                        <a href="#!">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Card title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="read-more">
                            <a href="#!" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="http://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(4).jpg" class="img-fluid" alt="">
                        <a href="#!">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Card title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="read-more">
                            <a href="#!" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--/.Third column-->
        </div>
        <!--/.First row-->

        <!--Second row-->
        <div class="row">
            <!--First column-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="http://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(18)" class="img-fluid" alt="">
                        <a href="#!">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Card title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="read-more">
                            <a href="#!" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="http://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(49)" class="img-fluid" alt="">
                        <a href="#!">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Card title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="read-more">
                            <a href="#!" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--Second column-->

            <!--Third column-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="http://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(16)" class="img-fluid" alt="">
                        <a href="#!">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Card title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="read-more">
                            <a href="#!" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--/.Third column-->
        </div>
        <!--/.Pagination-->
        <hr>
    </div>


@endsection