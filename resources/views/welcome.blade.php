@extends('layouts.master')

@section('title', 'Home')

@section('main-section')
    <div class="site-blocks-cover overlay" style="background-image: url({{ asset('img/tanah-lot-main.jpg') }});"
        data-aos="fade" data-stellar-background-ratio="0.5" id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white font-weight-light text-uppercase font-weight-bold" data-aos="fade-up">Journey
                        Through Indonesia</h1>
                    <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Rasakan Keajaiban Tempat-tempat di Indonesia
                    </p>
                    <p data-aos="fade-up" data-aos-delay="200"><a href="#section-1"
                            class="btn btn-primary py-3 px-5 text-white" role="navigation">Get Started!</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('section-1')
    <div class="site-section bg-light" id="section-1">
        <div class="container">
            <div class="row justify-content-center mb-5" data-aos="fade-up">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="mb-0 text-primary">Destinasi Pulau</h2>
                    <p class="color-black-opacity-5">Cari tempat destinasi dari pulau-pulau yang ada di Indonesia</p>
                </div>
            </div>
            <div class="row align-items-stretch">
                @foreach ($islands as $island)
                    <div class="col-md-4 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary"></span></div>
                            <div>
                                <h3>{{ $island->name }}</h3>
                                <div id="carousel{{ str_replace(' ', '-', $island->name) }}" class="carousel slide"
                                    data-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($island->places as $key => $place)
                                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                                <img src="{{ asset($place->path) }}" class="img-fluid"
                                                    alt="{{ $place->name }}">
                                                <div class="overlay"></div>
                                                <div class="carousel-caption">
                                                    <h6>- {{ $place->region->name }} -</h6>
                                                    <h6>{{ $place->name }}</h6>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev"
                                        href="#carousel{{ str_replace(' ', '-', $island->name) }}" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next"
                                        href="#carousel{{ str_replace(' ', '-', $island->name) }}" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <p></p>
                                <p><a href="{{url('pulau/'.str_replace(' ', '-', $island->name))}}">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
