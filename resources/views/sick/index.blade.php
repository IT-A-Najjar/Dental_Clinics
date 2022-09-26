<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>
@extends('layouts.guest')
@section('componant')
@foreach($sicks as $sick)
    <h1>{{$sick->full_name}}</h1>
    <h3>{{$sick->age}}</h3>
    <h3>{{$sick->illness->name}}</h3>
    <h3>{{$sick->user->name}}</h3>
    <a href="{{route('sick.show',$sick->id)}}">show</a>
    <a href="{{route('sick.edit',$sick->id)}}">edit</a>
    <form action="{{route('sick.destroy',$sick->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input class="delete-btn" type="submit" value="delete">
    </form>
@endforeach
@endsection
