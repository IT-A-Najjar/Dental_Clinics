@extends('.layout')
@section('componemt')
{{--    <form action={{ route('illnesses.store')}} method="POST" >--}}
{{--        @csrf--}}
{{--        <input type="text" name="name"class="form-control"   >--}}
{{--        <input type="submit" value="submit"   >--}}
{{--    </form>--}}

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="/img/icon.png">
            </a>
        </x-slot>
        <form method="POST" action="{{ route('illnesses.store') }}">

            @csrf
            <div>
                <x-input-label for="name" :value="__('اسم المرض')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
                <input class="btn btn-primary" type="submit" value="submit">

        </form>

    </x-auth-card>
</x-guest-layout>

@endsection
