@extends('templates.default')

@section('title', $comic['title'])

@section('main-content')
<div id="jumbotron"></div>
<div id="comic">
    <section id="upper-comic">
        <div class="comic-prev">
            <img src="{{ $comic['thumb'] }}" alt="Comic thumb">
            <div class="type">comic book</div>
            <div class="gallery">view gallery</div>
        </div>
    </section>
    <section class="bg-white" id="infobox">
        <div class="my-container">
            <div class="row">
                <div class="col-8">
                    <h1>{{ $comic['title']}}</h1>
                    <div class="shop-info">
                        <div class="price-tag">
                            <div class="price">
                                U.S. Price: <span>{{ $comic['price']}}</span>
                            </div>
                            <div class="avaiable">AVAILABLE</div>
                        </div>
                        <div class="check">Check Availability</div>
                    </div>
                    <div class="description">
                        {{ $comic['description']}}
                    </div>
                </div>
                <div class="col-4">
                    <h5 class="fs-6 adv">ADVERTISEMENT</h5>
                    <img src="{{ asset('images/adv.jpg') }}" alt="adv" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray artist-spec">
        <div class="my-container">
            <div class="row">
                <div class="col-6">
                    <h3>Talent</h3>
                    <div class="spec-section">
                        <div class="row">
                            <div class="col-4 title"><span>Art By</span></div>
                            <div class="col-8">
                                <p>
                                    @foreach ($comic['artists'] as $artist)
                                    <span class="artist">{{ $artist }}</span>,
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="spec-section">
                        <div class="row">
                            <div class="col-4 title"><span>Written by:</span></div>
                            <div class="col-8">
                                <p>
                                    @foreach ($comic['writers'] as $writer)
                                    <span class="writer">{{ $writer }}</span>,
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h3>Specs</h3>
                    <div class="spec-section">
                        <div class="row">
                            <div class="col-4 title"><span>Series:</span></div>
                            <div class="col-8">
                                <p class="info price">
                                    {{ $comic['series']}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="spec-section">
                        <div class="row">
                            <div class="col-4 title"><span>U.S. Price:</span></div>
                            <div class="col-8">
                                <p class="info">
                                    {{ $comic['price']}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="spec-section">
                        <div class="row">
                            <div class="col-4 title"><span>On Sale Date:</span></div>
                            <div class="col-8">
                                <p class="info">
                                    {{ $comic['sale_date']}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
