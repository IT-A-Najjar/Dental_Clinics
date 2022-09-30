@extends('layout')
@section('componemt')
    @foreach($users as $user)
    <h1>{{$user->name}}</h1>
@endforeach
@endsection
