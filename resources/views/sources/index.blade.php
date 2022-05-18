@extends('_layout.base')
@section('content')
    @foreach($data as $item)
        <div>
            <a href="{{route('sources.edit', [$item['id']])}}">{{$item['id']}}</a>
        </div>
    @endforeach
@endsection