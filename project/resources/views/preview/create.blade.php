@extends('layout')
@section('componemt')
    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
                <a href="/">
                    <img style="width: 150px" src="/img/icon.png">
                </a>
            </x-slot>
            <form method="POST" action="{{ route('preview.store') }}">
                @csrf
                <div>
                    <select name="sick_id" class="form-select" aria-label="Default select example">
                        <option value="{{$data->id}}">{{$data->full_name}}</option>
                    </select>
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label  :value="__('description')" />

                    <x-text-input class="block mt-1 w-full" type="text" name="description" :value="old('description')" required />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <input class="btn btn-primary" type="submit" value="submit">
                </div>
            </form>

        </x-auth-card>
    </x-guest-layout>
@endsection
