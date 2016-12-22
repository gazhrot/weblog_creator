@extends('admin')

@section('content')


    <!--Section: Contact v.2-->
    <section class="section">

        <!--Section heading-->
        <h1 class="section-heading">Modifier mon profil</h1>
        <!--Section sescription-->

        <div class="row">

            <!--First column-->
            <div class="col-md-12">
                <form action="" method="POST">
                    <!--First row-->
                    <div class="row">
                        <!--First column-->
                        <div class="col-md-6">
                            <div class="md-form">
                                <div class="md-form">
                                    <input type="text" id="form41" class="form-control">
                                    <label for="form41" class="">Votre nom</label>
                                </div>
                            </div>
                        </div>

                        <!--Second column-->
                        <div class="col-md-6">
                            <div class="md-form">
                                <div class="md-form">
                                    <input type="text" id="form52" class="form-control">
                                    <label for="form52" class="">Votre email</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.First row-->

                    <!--Third row-->
                    <div class="row">
                        <!--First column-->
                        <div class="col-md-12">

                            <form>
                                <div class="file-field">
                                    <div class="btn btn-primary btn-sm">
                                        <span>Uploader</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Photo de profil">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!--/.Third row-->

                    <div class="center-on-small-only">
                        <button class="btn btn-ins">Valider</button>
                    </div>
                </form>


                <h1 class="section-heading">Modifier mon mot de passe</h1>

                <form action="" method="POST">
                    <!--Second row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="form82" class="form-control validate">
                                <label for="form82" data-error="wrong" data-success="right">Nouveau mot de passe</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="md-form">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="form83" class="form-control validate">
                                <label for="form83" data-error="wrong" data-success="right">Confirmation de mot de passe</label>
                            </div>
                        </div>

                    </div>
                    <!--/Second row-->

                    <div class="center-on-small-only">
                        <button class="btn btn-ins">Valider</button>
                    </div>
                </form>
            </div>
            <!--.First column-->

        </div>
    </section>
    <!--/Section: Contact v.2-->


@endsection