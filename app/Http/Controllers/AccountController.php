<?php

namespace App\Http\Controllers;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //

    public function index(Request $request)
    {
        $title = 'title';
        /*DebugBar::info('abcdefg');
        DebugBar::error('エラー');*/

        //セッションに指定のキーで値を保存
        $request->session()->put('name', 'jobi');
        $request->session()->put('password', 'jobi');

        //セッションから指定のキーを取得
        $value = $request->session()->get('name', 'password');

        //指定したデータをセッションから削除
        //$request->session()->forget('name');

        //セッションの全てのデータを削除
        $request->session()->flush();

        return view('accounts/index', ['title' => $title]); //viewに変数を渡す
    }

    /*public function index(Request $request)
    {
        $title = 'title';
        //idを指定して表示する
        dd($request->account_id); //dd=laravelのデバッグの関数
        return view('accounts/index', ['title' => $title]); //viewに変数を渡す
    }*/

    public function login(Request $request)
    {
        return view('accounts/loginview'); //viewに変数を渡す
    }

    public function dologin(Request $request) //$requestの中に名前とパスワードの情報が入っている
    {
        if ($request['name'] === 'jobi' && $request['password'] === 'jobi') { //nameが'jobi',passwordが'jobi'だったら
            return redirect('accounts/index'); //アカウント一覧にリダイレクト
        } else {
            return view('accounts/loginview');//不一致だったらログイン画面を表示
        }
    }
}
