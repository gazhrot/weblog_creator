@extends('admin')

@section('content')

    <!--Section: Products v.2-->
    <section class="section">

        <!--Section heading-->
        <h1 class="section-heading"> <i class="fa fa-envelope prefix"></i> &nbsp; Ecrire un message</h1>
        <!--Section sescription-->

        <!--First row-->
        <div class="row">

            <!--First column-->
            <div class="col-lg-12 col-md-6 mb-r">
                <!--Card-->


                <form action="" method="POST">
                    <!--First row-->
                    <div class="row">
                        <!--First column-->
                        <div class="col-md-12">
                            <div class="md-form">
                                <input type="email" id="form81" class="form-control validate">
                                <label for="form81" data-error="wrong" data-success="right">Email</label>
                            </div>
                        </div>
                    </div>

                    <!--Second row-->
                    <div class="row">
                        <!--First column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="form76" class="md-textarea"></textarea>
                                <label for="form76">Message</label>
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