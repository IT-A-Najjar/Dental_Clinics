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
    <form action={{ route('preview.store')}} method="POST" >
        @csrf
        <h3>sick</h3>
        <select name="sick_id">
            @foreach($data as $data )
                <option value="{{$data->id}}">
                    {{$data->full_name}}
                </option>
            @endforeach
        </select>
        <br>
        <textarea name="description"></textarea>
        <br>
        <input type="submit" value="submit"   >
    </form>
</div>
@endsection

