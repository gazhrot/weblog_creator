@extends('admin')

@section('content')

    <!--Section: Products v.2-->
    <section class="section">

        <!--Section heading-->
        <h1 class="section-heading">Mes Blogs</h1>
        <!--Section sescription-->

        <!--First row-->
        <div class="row">

            <!--First column-->

            @foreach ($blog as $blogs)

                <!--First column-->
                    <div class="col-lg-4">
                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="{{ asset('upload/'.$blogs->banniere) }}" class="img-fluid" alt="">
                                <a href="{{ url('/article/'.$blogs->id) }}">
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-block">
                                <!--Title-->
                                <h4 class="card-title">{{ $blogs->titre }}</h4>
                                <!--Text-->
                                <p class="card-text">{{ $blogs->description }}</p>
                                <div class="read-more">
                                    <a href="{{ url('/article/'.$blogs->id) }}" class="btn btn-primary">Voir</a>
                                </div>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->
                    </div>
                    <!--/.First column-->

            @endforeach

        </div>
        <!--/First row-->

    </section>
    <!--/Section: Products v.2-->


@endsection