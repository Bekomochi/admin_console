<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Login</title>
</head>
<body>
<h1>ログイン</h1>

<form method="post" action="{{url('accounts/dologin')}}">
    @csrf <!--csrf対策-->
    <p>名前を入力してください<input type="text" name="name"></p>
    <p>パスワードを入力してください<input type="password" name="password"></p>
    <input type="submit" value="送信">
</form>

</body>
</html>
