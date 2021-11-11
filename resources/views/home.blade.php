@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <h1>Travels</h1>
                @forelse ($travels as $travel)
                    <figure>
                        <img class="img-fluid" src="{{$travel->url_place}}" alt="{{$travel->place}}">
                    </figure>
                    <h2>{{$travel->place}}</h2>
                    <h3>{{$travel->country}}</h3>
                    <p>{{$travel->description}}</p>
                    <h6>{{$travel->price}}</h6>
                @empty
                    <h2>Non c'è nessun risultato</h2>
                @endforelse
            </div>
        </div>
    </div>
@endsection


