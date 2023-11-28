@extends('layout.frontend')
@section('content')

        <section class="home">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Explore</h2>
                    </div>
                    <div class="col-md-12">
                        <h1>Wonderful world</h1>
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
                    <div class="col-md-6 col-12">
                        <div class="card-bg-left">
                            <img src="{{ asset('frontend/img/about.jpg') }}" alt="">
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="card-bg-right">
                            <h3>Why Choose Us?</h3>
                            <h1>Experience that we promise to you</h1>
                            <P>We always ready to serve by providing the best service for you. We make a good choices to
                                travel around the world.</P>
                            <ul>
                                <li> - Best places in the world - </li>

                                <li> - Affordable price for you - </li>

                                <li> - Best plan for your time - </li>

                                <li> - Security guarantee - </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </section>


@endsection
