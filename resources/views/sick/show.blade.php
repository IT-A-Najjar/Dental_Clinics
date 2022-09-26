<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>
@extends('layouts.guest')
@section('componant')
<h1>{{$index->full_name}}</h1>
<h3>{{$index->age}}</h3>
<h3>{{$index->illness->name}}</h3>
<h2>{{$index->description}}</h2>

<h1>======================</h1>
@foreach($previews as $preview)
    <h3>{{$preview->description}}</h3>
    <h2>{{$preview->sick->user->name}}</h2>
    <h2>{{$preview->created_at}}</h2>
@endforeach
@endsection
