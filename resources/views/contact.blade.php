<!-- resources/views/contact.blade.php -->
@extends('layouts.top')

@section('title', 'コンタクトフォーム')

@section('content')
<div class="contact-form-container">
    <h1>お問い合わせ</h1>

    <!-- 送信先を設定 -->
    <form method="POST" action="{{ url('/contact') }}" class="contact-form">
        <!-- CSRFトークンを設定（セキュリティ対策） -->
        @csrf

        <!-- 名前入力フィールド -->
        <div class="form-group">
            <label for="name">名前：</label>
            <input type="text" id="name" name="name" required>
        </div>

        <!-- メールアドレス入力フィールド -->
        <div class="form-group">
            <label for="email">メールアドレス：</label>
            <input type="email" id="email" name="email" required>
        </div>

        <!-- メッセージ入力エリア -->
        <div class="form-group">
            <label for="message">メッセージ：</label>
            <textarea id="message" name="message" required></textarea>
        </div>

        <!-- 送信ボタン -->
        <div class="form-group">
            <button type="submit" class="submit-button">送信</button>
        </div>
    </form>
</div>
@endsection