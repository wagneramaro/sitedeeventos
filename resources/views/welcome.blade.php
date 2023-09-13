@extends('layouts.main')
@section('title', 'Início')
@section('content')

       <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Pesquisar..." >
        </form>
       </div>

       <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias.</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)

                <div class="card col-md-3">
                    @if ($event->image)
                    <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
                    @else
                    <img src="https://placehold.co/400" alt="{{$event->title}}">
                    @endif

                    <div class="card-body">
                        <p class="card-date">
                            03/09/2023
                        </p>
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-participants">x participantes</p>
                        <a href="/events/{{$event->id}}" class="btn btn-primary">Saber Mais</a>
                    </div>
                </div>

            @endforeach
        </div>
       </div>

@endsection
