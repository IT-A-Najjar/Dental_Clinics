@extends('.layout')
@section('componemt')
<section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">

            <form action={{ route( 'sick.store' ) }} method="HEAD" >
                @csrf
                <label>الاسم</label>
                <input  type="text" name="full_name" class="form-control"   >
                <h3>@error('full_name')
                    {{$message}}
                    @enderror
                </h3>
                <label>العمر</label>
                <input type="number" name="age" class="form-control"   >
                <h3>
                    @error('age')
                    {{$message}}
                    @enderror
                </h3>
                <label>رقم الهاتف</label>
                <input type="text" name="phone_number" class="form-control"   >
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
            <br>
            <button type="submit" class="btn btn-primary">حفظ</button>
            <br>
            <a class="btn" href="../">                رجوع
            </a>
            </form>
</dev>
</dev>
</section>
@endsection
