@extends('.layout')
@section('componemt')
    <x-guest-layout>

    <x-auth-card>

        <x-slot name="logo">
            <a href="/">
                <img style="width: 150px" src="/img/icon.png">
            </a>
        </x-slot>
        <form action={{route('sick.update',$data->id ) }} method="POST" >
            @csrf
            @method('PUT')
            <div class="mt-4">
                <label>الاسم</label>
                <input type="text" name="full_name"class="form-control" value="{{$data->full_name}}"  >
                <h3>@error('full_name')
                    {{$message}}
                    @enderror
                </h3>
            </div>
            <div class="mt-4">
                <label>العمر</label>
                <input type="number" name="age"class="form-control" value="{{$data->age}}"  >
                <h3>
                    @error('age')
                    {{$message}}
                    @enderror
                </h3>
            </div>
            <div class="mt-4">
                <label>رقم الهاتف</label>
                <input type="text" name="phone_number" class="form-control" value="{{$data->phone_number}} " >
                <h3>
                    @error('phone_number')
                    {{$message}}
                    @enderror
                </h3>
            </div>
            <div class="mt-4">
                <h4>اختر الطبيب</h4>
                <select name="user_id">
                    <option value="{{$data->user->id}}">
                        {{$data->user->name}}
                    </option>
                    @foreach($doctors as $doctor )
                        @if($doctor->id!=$data->user->id)
                            <option value="{{$doctor->id}}">
                                {{$doctor->name}}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mt-4">
                <h4>اختر المرض </h4>
                <select name="illness_id">
                    <option value="{{$data->illness->id}}">
                        {{$data->illness->name}}
                    </option>
                    @foreach($diseases as $disease )
                        @if($disease->id!=$data->illness->id)
                            <option value="{{$disease->id}}">
                                {{$disease->name}}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mt-4">
                <input type="submit" value="submit"  class="btn btn-primary" >
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
@endsection
