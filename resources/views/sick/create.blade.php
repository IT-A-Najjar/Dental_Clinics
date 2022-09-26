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
    <form action={{ route('sick.store')}} method="POST" >
        @csrf
        <label>الاسم</label>
        <input type="text" name="full_name"class="form-control"   >
        <h3>@error('full_name')
            {{$message}}
            @enderror
        </h3>
        <label>العمر</label>
        <input type="number" name="age"class="form-control"   >
        <h3>
            @error('age')
            {{$message}}
            @enderror
        </h3>
        <label>رقم الهاتف</label>
        <input type="text" name="phone_number"class="form-control"   >
        <h3>
            @error('phone_number')
            {{$message}}
            @enderror
        </h3>

        @if(auth()->user())
            <h4>اختر الطبيب</h4>
            <select name="user_id">
            @if(auth()->user()->is_admin)
                    @foreach($doctors as $doctor )
                        <option value="{{$doctor->id}}">
                            {{$doctor->name}}
                        </option>
                    @endforeach
            @else
                <option value="{{auth()->user()->id}}">انا</option>
                <option value=1>غير ذالك</option>
            @endif
                </select>
            <h4>اختر المرض </h4>
            <select name="illness_id">
                @foreach($diseases as $disease )
                        <option value="{{$disease->id}}">
                            {{$disease->name}}
                        </option>
                @endforeach
            </select>

        @endif

        <input type="submit" value="submit"   >

    </form>
</div>
@endsection
