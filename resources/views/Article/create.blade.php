<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title></title>
    <style>
        * {
            direction: rtl;
        }
    </style>
</head>

<body>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1> -انشاء عنصر جديد </h1>
    {{-- <form action="{{ route('article.store') }}" method="post">
        @csrf
        <input type="text" placeholder="ادخال الاسم" name="name" id=""><br><br>
        <input type="text" placeholder="ادخال الاسم الثاني" name="firstname" id=""><br><br>
        <button type="submit">إنشاء</button>
    </form> --}}
    <form action="{{ route('article.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">الاسم</label>
            <input type="text" placeholder="ادخال الاسم" name="name" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">الاسم الثاني</label>
            <input type="text" placeholder="ادخال الاسم الثاني" name="firstname" class="form-control"
                id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">إنشاء</button>
    </form>
</body>

</html>
