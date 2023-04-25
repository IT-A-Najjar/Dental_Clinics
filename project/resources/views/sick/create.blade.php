@extends('layout')
@section('title')
    اضافة مريض جديد
@endsection
@section('componemt')
    <x-guest-layout>

        <x-auth-card>

            <x-slot name="logo">
                <a href="/">
                    <img style="width: 150px" src="/img/icon.png">
                </a>
            </x-slot>
            <form action="{{ route( 'sick.store' ) }}" method="POST">

                @csrf
                <div>
                    <x-input-label :value="__('الاسم الثلاثي')" />

                    <x-text-input class="block mt-1 w-full" type="text" name="full_name" required autofocus />
                    <p>@error('full_name')
                        {{$message}}
                        @enderror
                    </p>
                </div>

                <div class="mt-4">
                    <x-input-label :value="__('العمر')" />

                    <x-text-input class="block mt-1 w-full" type="number" name="age"  required />
                    <p>@error('age')
                        {{$message}}
                        @enderror
                    </p>
                </div>

                <div class="mt-4">
                    <x-input-label :value="__('رقم الهاتف(الوتساب)')" />

                    <x-text-input class="block mt-1 w-full" type="text" name="phone_number" required/>
                    <p>@error('phone_number')
                        {{$message}}
                        @enderror
                    </p>
                </div>

                @if(auth()->user())
                <div class="mt-4">

                        <h4>اختر الطبيب</h4>
                        <select name="user_id" class="form-select" aria-label="Default select example">
                            @if(auth()->user()->is_admin)
                                @foreach($doctors as $doctor )
                                    <option selected value="{{$doctor->id}}">
                                        {{$doctor->name}}
                                    </option>
                                @endforeach
                            @else
                                <option value="{{auth()->user()->id}}">انا</option>
                                <option value=28>غير ذالك</option>
                            @endif
                        </select>
                </div>
                <div class="mt-4">
                        <h4>اختر المرض </h4>
                        <select name="illness_id" class="form-select" aria-label="Default select example">
                            @foreach($diseases as $disease )
                                <option selected value="{{$disease->id}}">
                                    {{$disease->name}}
                                </option>
                            @endforeach
                        </select>
                </div>
                @endif
                <div class="flex items-center justify-end mt-4">
                    <input class="btn btn-primary" type="submit" value="تاكيد الحجز">
                </div>
            </form>

        </x-auth-card>
    </x-guest-layout>

{{--</div>--}}
@endsection
