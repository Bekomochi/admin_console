<?php

namespace App\Http\Controllers;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class adminController
{
    public function item(Request $request)
    {
        return view('admin/itemView');//アイテム一覧を表示
    }
}
