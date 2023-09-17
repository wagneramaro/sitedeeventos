@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')

<div class="col-md-10 off-set-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 off-set-1 dashboard-eventos-container">
    @if (count($events)>0)
    @else
    <p>Você ainda não tem eventos, <a href="/events/create" class="btn btn-primary">Criar Eventos</a></p>
    @endif
</div>

@endsection
