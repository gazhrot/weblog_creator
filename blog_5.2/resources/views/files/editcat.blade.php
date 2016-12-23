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


                    <!--First row-->
                    <div class="row">

                        <div class="col-md-12">
                            <div class="md-form">
                                <select class="mdb-select">
                                    <option value="" disabled selected>Listes des categories</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </div>
                        </div>
                        <form action="{{ url('categorie')}}" method="POST">
                        <!--First column-->
                        <div class="col-md-12">
                            <div class="md-form">
                                <input type="text" name="categorie" id="form81" class="form-control validate">
                                <label for="form81" data-error="wrong" data-success="right">Categorie</label>
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


                    <!--/.Second row-->
                </form>




            </div>
            <!--/First column-->



        </div>
        <!--/First row-->

    </section>
    <!--/Section: Products v.2-->


@endsection