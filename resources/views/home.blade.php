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
</main>
@endsection
