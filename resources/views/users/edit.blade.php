@extends('layout')
@section('componemt')
    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
                <a href="/">
                    <img src="/img/icon.png">
                </a>
            </x-slot>
            <form method="POST" action={{url('users.update',$data->id)}} enctype="multipart/form-data" >

                @csrf
                <div>
                    <x-input-label for="name" :value="__('Name')"></x-input-label>

                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$data->name}}" required autofocus></x-text-input>
                </div>

                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')"/>

                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$data->email}}"
                                  required/>
                </div>

                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')"/>

                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password"
                                  name="password"
                                  required autocomplete="new-password"/>
                </div>

                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                  type="password"
                                  name="password_confirmation" required/>
                </div>

                <div class="mt-4">
                    <x-input-label :value="__('images')"/>

                    <x-text-input id="img" class="block mt-1 w-full" type="file" name="img" :value="old('email')"
                                  required/>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <input type="submit" value="submit">
                </div>
            </form>

        </x-auth-card>
    </x-guest-layout>
@endsection
