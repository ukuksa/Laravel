<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>Waluty</th>
        <th>Bid</th>
        <th>Ask</th>
    </tr>
    <tr>
        <td>Euro</td>
        <td>{{$tab[0]['rates'][0]['bid']}}</td>
        <td>{{$tab[0]['rates'][0]['ask']}}</td>
    </tr>
    <tr>
        <td>Frank</td>
        <td>{{$tab[0]['rates'][3]['bid']}}</td>
        <td>{{$tab[0]['rates'][3]['ask']}}</td>
    </tr>
    <tr>
        <td>Dolar</td>
        <td>{{$tab[0]['rates'][5]['bid']}}</td>
        <td>{{$tab[0]['rates'][5]['ask']}}</td>
    </tr>
</table>
</body>
</html>

<style>
table, th, td {
    border: 2px solid black;
  }
</style>