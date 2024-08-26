<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // ここでContactモデルをインポート

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // バリデーションルールを適用
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // モデルを使用してデータをデータベースに保存
            $contact = new Contact();
            $contact->name = $validated['name'];
            $contact->email = $validated['email'];
            $contact->message = $validated['message'];
            $contact->save();

        // 処理後、適切なリダイレクトやメッセージ表示
        return redirect('/')->with('success', 'お問い合わせありがとうございます！');
    }
}
