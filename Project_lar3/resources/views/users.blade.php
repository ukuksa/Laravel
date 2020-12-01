<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href ="{{ URL::asset('css/app.css')}}" rel = "stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    <h1>Uzytkownicy</h1>

    <table class="table_dark">
        <tr>
          <th>Name</th>
          <th>Surname</th>
          <th>Data urodzenia</th>
          <th>Wzrost</th>
          </tr>
        @foreach ($data as $item)
        <tr>
            <th>{{$item->name}}</th>
            <th>{{$item->surname}}</th>
            <th>{{$item->birthday}}</th>
            <th>{{$item->weight}}</th>
        </tr>
        @endforeach
        <tr>
            <td colspan="4">{{ $data->links() }}</td>
        </tr>
    </table>
</body>
</html>