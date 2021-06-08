@extends('layouts.core')

@section('content') 
<section class="container">

    <div class="cards">

       @foreach($cards as $card)
            <div class="card">
                <img class="poster" src="{{ $card['image-cover'] }}" alt="">
                <h3 class="text-center">{{ $card['title'] }}</h3>
            </div>
       @endforeach

    </div>

    <button>
        load more
    </button>

</section>
@endsection