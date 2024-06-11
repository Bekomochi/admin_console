<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
</div>

<h1>ゲームの管理</h1>
<!-- <h1> { {$title} } </h1> <!- { {$変数名} }　で出力 -->

<form action="{{url('admin/itemView')}}">
    @csrf
    <input type="submit" value="アイテム一覧を表示">
</form>
