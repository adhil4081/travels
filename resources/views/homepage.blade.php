@extends('layout.frontend')
@section('content')
    <section>
        <section class="home">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Explore</h2>
                    </div>
                    <div class="col-md-12">
                        <h1>Wonderfull world</h1>
                    </div>
                    <div class="col-md-12">
                        <p>It's the perfect time travel and enjoy the
                            beauty of the world.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-bg-left">
                            <img src="{{ asset('frontend/img/about.jpg') }}" alt="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card-bg-right">

                        </div>
                    </div>

                </div>
            </div>

        </section>
        <section class="blog">
            <div class="container">
            </div>

        </section>
    </section>
@endsection
