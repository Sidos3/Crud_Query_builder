<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>edit </title>
    <style>
        * {
            direction: rtl;
        }
    </style>
</head>

<body>
    <h1>- تحديث العناصر</h1>
    <form action="{{ route('article.update',$crud->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">الاسم</label>
            <input type="text" value="{{ $crud->name }}" name="name" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">الاسم الثاني</label>
            <input type="text" value="{{ $crud->firstname }}" name="firstname" class="form-control"
                id="exampleInputPassword1">
        </div>
        <button type="submit"  class="btn btn-outline-warning">تحديث</button>
    </form>
</body>

</html>
