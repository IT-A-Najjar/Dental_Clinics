<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>
@extends('layouts.guest')
@section('componant')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <form action={{route('illnesses.update',$illness->id ) }} method="POST"  >
        @csrf
        @method('PUT')
        <input type="text" name="name"class="form-control" value="{{$illness->name}}"  >
        <input type="submit" value="submit"   >
    </form>
</div>
@endsection
