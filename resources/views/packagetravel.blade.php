@extends('layout.frontend')
@section('content')
    <section class="packages">
        <div class="info">
            <div class="container">
                <div class="row">
                    <div class="countryname">
                        <h1> {{ $country }} </h1>
                        <p>{{ $desc }} </p>
                    </div>
                    <div class="states">
                        @foreach ($packages->unique('state') as $package)
                            <div class="state-item">
                                <h3>{{ ucwords($package->state) }}</h3>
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
        <div class="listing">
            <div class="container">
                <div class="row">
                    <div class="heading">
                        <h1>EXPLORE</h1>
                        <p>Find the best travel packages for your next adventure</p>
                    </div>
                    <div class="packages-list">
                            <section class="articles">
                                @foreach ($packages as $package)

                                <article>
                                    <div class="article-wrapper">
                                        <figure>
                                            <img src="{{ asset( '/storage/assets/img/'  . $package->media) }}" alt="" />
                                        </figure>
                                        <div class="article-body">
                                            <div class="row">
                                            <h2 style="display: inline">{{$package->name}}</h2>
                                            <i class='bx bx-time' style="display: inline"></i>
                                        </div>
                                                
                                        </div>
                                    </div>
                                </article>
                                @endforeach

                            </section>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
