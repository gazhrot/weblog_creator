@extends('admin')

@section('content')

    <!--Section: Products v.2-->
    <section class="section">

        <!--Section heading-->
        <h1 class="section-heading">  Ajouter une Categorie </h1>
        <!--Section sescription-->

        <!--First row-->
        <div class="row">

            <!--First column-->
            <div class="col-lg-12 col-md-6 mb-r">
                <!--Card-->

                @foreach($blog as $b)
                    <!--First row-->
                    <div class="row">
                        <form action="{{ url('categorie/'.$b->id)}}" method="POST">
                        <!--First column-->
                        <div class="col-md-12">
                            <div class="md-form">
                                <input type="text" name="categorie" id="form81" class="form-control validate">
                                <label for="form81" data-error="wrong" name="categorie" data-success="right">Categorie</label>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!--First column-->
                        <div class="col-md-12">

                            <div class="text-xs-center">
                                <button class="btn btn-primary">Valider</button>
                            </div>

                        </div>
                    </div>
                @endforeach

                    <!--/.Second row-->
                </form>




            </div>
            <!--/First column-->



        </div>
        <!--/First row-->

    </section>
    <!--/Section: Products v.2-->


@endsection