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
        <form action="newUserController" method="post">
            {{ csrf_field() }}
            Name : <input type="text" name="Name" placeholder="Name">
            @error('Name')
                <span>{{$message}}</span>                
            @enderror
            <br><br>
            Password : <input type="password" name="password" placeholder="Password">
            @error('password')
                <span>{{$message}}</span>                
            @enderror
            <br><br>
            
            <input value ="Male" type="radio" name="Gender">Male
            <input value ="Female" type="radio" name="Gender">Female
            
            <br><br>
            Email : <input type="email" name="email" placeholder="Email" autofocus>
            @error('email')
                <span>{{$message}}</span>                
            @enderror
            <br><br>
            Number : <input type="text" name="phone" placeholder="+48*******" autofocus>
            @error('text')
                <span>{{$message}}</span>                
            @enderror
            <br><br>
            
            
            
            <input type="submit" value="Submit"><br><br>
        </form>
    </div>
</body>
</html>