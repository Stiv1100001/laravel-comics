@extends('templates.default')

@section('title', 'Home')

@section('main-content')
<main>
    <div class="bg-black">
        <div id="jumbotron"></div>
        <div class="container">
            <h1 class="title">Current Series</h1>
            <div class="cards">
                @foreach ($comics as $comic)
                <div class="card bg-black">
                    <img src="{{ $comic['thumb']}}" alt="">
                    <h3>{{$comic[ 'title']}}</h3>
                </div>
                @endforeach
            </div>
            <div class="buttons">
                <button class="btn">Load MOre</button>
            </div>
        </div>
    </div>
    <div class="bg-blue">
        <div class="container">
            <div id="main-menu">
                <ul>
                    <li><img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="images"><span>Digital
                            comics</span></li>
                    <li><img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="images"><span>dc
                            merchandising</span></li>
                    <li><img src="{{ asset('images/buy-comics-subscriptions.png') }}"
                            alt="images"><span>subscription</span></li>
                    <li><img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="images"><span>comic shop
                            locator</span></li>
                    <li><img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="images"><span>DC power visa</span>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</main>
@endsection
