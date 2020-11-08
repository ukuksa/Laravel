<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="kalkulatorwalut" method="post">
    @csrf
    <input type="text" name="amount" placeholder="amount" value = ""><br><br>
    <select name="currency">
        <option>Euro</option>
        <option>Frank</option>
        <option>Dolar</option>
    </select>
    <button type="submit">Calculate</button>
</form>
{{$string ?? ''}}
</body>
</html>