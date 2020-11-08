<form action="login" method="post">
    @csrf
    <input type="text" name="user" placeholder="Login"><br><br>
    <input type="PASSWORD" name="password" placeholder="password"><br><br>
    <button type="submit">Zaloguj sie</button>
</form>