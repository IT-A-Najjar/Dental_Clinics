<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <form action={{route('sick.update',$data->id ) }} method="POST" >
        @csrf
        @method('PUT')
        <label>الاسم</label>
        <input type="text" name="full_name"class="form-control" value="{{$data->full_name}}"  >
        <h3>@error('full_name')
            {{$message}}
            @enderror
        </h3>
        <label>العمر</label>
        <input type="number" name="age"class="form-control" value="{{$data->age}}"  >
        <h3>
            @error('age')
            {{$message}}
            @enderror
        </h3>
        <label>رقم الهاتف</label>
        <input type="text" name="phone_number" class="form-control" value="{{$data->phone_number}} " >
        <h3>
            @error('phone_number')
            {{$message}}
            @enderror
        </h3>

        <textarea name="description"></textarea>
        <h3>
            @error('description')
            {{$message}}
            @enderror
        </h3>
        <input type="submit" value="submit"   >

    </form>
</div>
