@extends("layouts.app")

@section("content")
    @foreach($immovables as $immovable)
        <li>{{$immovable->title}}</li>
    @endforeach
@endsection