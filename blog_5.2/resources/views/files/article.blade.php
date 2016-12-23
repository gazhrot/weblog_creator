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

    <form action="{{url('/article')}}" method="POST" enctype="multipart/form-data">
        <!--First row-->
        <div class="row">
            <div class="col-md-12">
                <div class="md-form">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="form81" class="form-control validate" required>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                    <input type="file" name="">
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


    @foreach ($current as $currents)
        @foreach($currents->categorie as $categorie)

            @foreach($categorie->article as $article)
            <!--Post-->
    <div class="post-wrapper">
        <!--Post data-->
        <h1 class="h1-responsive">{{ $article->titre }}<small class="text-muted">{{ $article->chapo }}</small></h1>
        <h5>Written by <a href="">{{ $currents->user->name }}</a>, {{ $article->created_at }}</h5>
        <br>
        <!--Featured image -->
        <div class="view overlay hm-white-light z-depth-1-half">
            <img src="http://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg" class="img-fluid " alt="">
            <div class="mask">
            </div>
        </div>
        <br>
        <!--Post excerpt-->
        <p>{{ $article->corps }}</p>
        <!--"Détails" button-->
        <button class="btn btn-primary">Détails</button>
    </div>
    <!--/.Post-->

    <hr>
            @endforeach
        @endforeach
    @endforeach

@endsection