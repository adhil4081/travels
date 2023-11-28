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
                                <h3>{{ ucwords($package->state) }}|</h3>
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
                                    <div class="">
                                        <figure>
                                            <img src="{{ asset('/storage/assets/img/' . $package->media) }}"
                                                alt="" />
                                        </figure>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <h2 style="display: inline">{{ $package->name }}</h2>
                                                </div>
                                                <div class="col-md-2">

                                                    <i class='bx bx-time' style="font-size: 2rem;display: flex">
                                                        <h4 style="font-size: 2rem;font-weight: bold"> {{ $package->duration }} </h4>
                                                    </i>
                                                </div>
                                                <div class="col-md-10">
                                                    <h3> {{ $package->price }} / PER PERSON </h3>
                                                </div>
                                                <div class="col-md-2">
                                                    <a class="enquiry-button" href="https://api.whatsapp.com/send?phone=919061754081&text=I like to know about your package {{$package->name}} ID:{{ $package->id }}    ">Enquiry</a>


                                                </div>
                                                <div class="">
                                                    <H2> {{ $package->route }} </H2>
                                                </div>
                                                

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
