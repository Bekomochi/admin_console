<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
</div>

<h1>ゲームの管理</h1>
<!-- <h1> { {$title} } </h1> <!- { {$変数名} }　で出力 -->

<form action="{{url('Admin/item')}}">
    @csrf
    <input type="submit" value="アイテム一覧を表示">
</form>

<form action="{{url('Admin/player')}}">
    @csrf
    <input type="submit" value="プレイヤー一覧を表示">
</form>

<form action="{{url('Admin/having')}}">
    @csrf
    <input type="submit" value="所持アイテム一覧を表示">
</form>
