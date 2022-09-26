<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>
@extends('layouts.guest')
@section('componant')
<a href="{{route('illnesses.create')}}">add</a>
@foreach($illness as $a)

    <h1>
        {{$a->name}}
    </h1>
    <a href="{{route('illnesses.edit',$a->id)}}">edite</a>
    <form action="{{route('illnesses.destroy',$a->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input class="delete-btn" type="submit" value="delete">
    </form>

@endforeach
@endsection

