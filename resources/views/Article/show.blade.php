<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>article</title>
    <style>
        * {
            direction: rtl;
        }
    </style>
</head>

<body>
    <h1>- جميع العناصر</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-outline-success btn-lg me-md-2" href= "{{ route('article.create') }}" type="button">انشاء عنصر جديد
        </a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">الاسم</th>
                <th scope="col">الاسم الثاني</th>
                <th scope="col">الحالة</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cruds as $crud)
                <tr>

                    <td>{{ $crud->id }}</td>
                    <td>{{ $crud->name }}</td>
                    <td>{{ $crud->firstname }}</td>
                    <td><a type="button" href="{{route('article.edit',$crud->id)}}" class="btn btn-outline-primary">تعديل</a>
                        <a type="button" href="{{route('article.destroy',$crud->id)}}" class="btn btn-outline-danger">حذف</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
