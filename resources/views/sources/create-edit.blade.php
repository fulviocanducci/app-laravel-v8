@extends('_layout.base')
@section('content')
    <div> 
        Número clicado: {{$id}}
    </div>
    <div>
        <a href="{{route('sources.index')}}">Pagina Sources</a>
    </div>
@endsection