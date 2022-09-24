<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <form action={{ route('sick.store')}} method="POST" >
        @csrf
        <label>الاسم</label>
        <input type="text" name="full_name"class="form-control"   >
        <label>العمر</label>
        <input type="number" name="age"class="form-control"   >
        <label>رقم الهاتف</label>
        <input type="text" name="phone_number"class="form-control"   >
        <label>هل انت مراجع</label>
        <label for="yes">نعم</label>
        <input id="yes" type="radio" name="are_you_reviewer" value=1 >
        <label for="no">لا</label>
        <input id="no" type="radio" name="are_you_reviewer" value=0 >

        <label>نوع المرض</label>
        <select name="illness_id">
            <option>اختر المرض</option>
@foreach($diseases as $diseas)
    <option value="{{$diseas->id}}">{{$diseas->name}}</option>
            @endforeach
        </select>
        <label name="user_id">الطبيب</label>
        <select>
            <option>الطبيب</option>
            @foreach($doctors as $doctor)
                <option value="{{$doctor->id}}">{{$doctor->name}}</option>
            @endforeach
        </select>
        <input type="submit" value="submit"   >

    </form>
</div>
