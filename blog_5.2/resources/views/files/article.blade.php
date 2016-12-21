

@extends('home')

@section('content')


    <!--Page heading-->
    <div class="row">
        <div class="col-md-12">
            <h1 class="h1-responsive">Créer un article :</h1>
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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, officia omnis. Vero nihil neque dignissimos hic voluptas quisquam
            amet porro, similique libero ullam veritatis tempora cumque voluptates harum. Repellendus, impedit.</p>

        <!--"Détails" button-->
        <button class="btn btn-primary">Détails</button>
    </div>
    <!--/.Post-->

    <hr>

    <!--Post-->
    <div class="post-wrapper">
        <!--Post data-->
        <h1 class="h1-responsive">Post title <small class="text-muted">Secondary text</small></h1>
        <h5>Written by <a href="">John Doe</a>, 30.04.2016</h5>

        <br>

        <!--Featured image -->
        <div class="view overlay hm-white-light z-depth-1-half">
            <img src="http://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg" class="img-fluid " alt="">
            <div class="mask">
            </div>
        </div>

        <br>

        <!--Post excerpt-->
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, officia omnis. Vero nihil neque dignissimos hic voluptas quisquam amet porro, similique libero ullam veritatis tempora cumque voluptates harum. Repellendus, impedit.</p>

        <!--"Détails" button-->
        <button class="btn btn-primary">Détails</button>
    </div>
    <!--/.Post-->
@endsection