<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class = "content">
        <h1>Informacje o uzytkowniku</h1>
        {{-- {{$errors}} --}}

        {{-- @if($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>   
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <form action="usercontroller" method="post">
            {{ csrf_field() }}
            <input type="text" name="email" placeholder="@" autofocus>
            @error('email')
                <span>{{$message}}</span>                
            @enderror
            <br><br>
            <input type="password" name="password" placeholder="haslo">
            @error('password')
                <span>{{$message}}</span>                
            @enderror
            <br><br>
            <input type="text" name="address" placeholder="address">
            @error('address')
                <span>{{$message}}</span>                
            @enderror
            <br><br>
            <input type="submit" value="Zatwierdz"><br><br>
        </form>
    </div>
</body>
</html>