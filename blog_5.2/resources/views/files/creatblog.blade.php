@extends('item')

@section('content')

    <div class="container">

        <form action="{{ url('/categorie') }}" method="POST">
        <!--Page heading-->
        <div class="row">
            <div class="col-md-12">
                <h1 class="h1-responsive">Créer une categorie :</h1>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
        </div>
        <!--/.Page heading-->
        <hr>

        <!--First row-->
        <div class="row">
            <div class="col-md-12">
                <div class="md-form">
                    <i class="fa fa-pencil prefix"></i>
                    <input type="text" id="form81" class="form-control validate" required>
                    <label for="form81" data-error="wrong" data-success="right">Nom de votre categorie</label>
                </div>
            </div>
        </div>

            <div class="row">
                <div class="text-xs-center">
                    <button class="btn btn-primary">Créer</button>
                </div>
            </div>
        <!--/.First row-->
        <hr>
        </form>


        <!--Page heading-->
        <div class="row">
            <div class="col-md-12">
                <h1 class="h1-responsive">Création de blog :</h1>
            </div>
        </div>
        <!--/.Page heading-->
        <hr>

        <form action="{{ url('/blog') }}" method="POST">
            <!--First row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form">
                        <i class="fa fa-pencil prefix"></i>
                        <input type="text" id="form81" name="titre" class="form-control validate" required>
                        <label for="form81" data-error="wrong" data-success="right">Titre</label>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                </div>
            </div>
            <!--/.First row-->

            <!--Second row-->
            <div class="row">
                <!--First column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea type="text" name="description" id="form76" class="md-textarea" required></textarea>
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
                        <input class="file-path validate" name="banniere" type="text" placeholder="Upload your file">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="text-xs-center">
                    <button class="btn btn-primary">Valider</button>
                </div>
            </div>
        </form>


        <!--/.Pagination-->
        <hr>
    </div>


@endsection