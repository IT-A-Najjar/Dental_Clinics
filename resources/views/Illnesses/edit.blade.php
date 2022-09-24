<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <form action={{route('illnesses.update',$illness->id ) }} method="POST"  >
        @csrf
        @method('PUT')
        <input type="text" name="name"class="form-control" value="{{$illness->name}}"  >
        <input type="submit" value="submit"   >
    </form>
</div>
