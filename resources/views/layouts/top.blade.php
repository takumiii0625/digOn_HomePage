<!-- resources/views/layouts/top.blade.php -->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
    <title>digOn</title>
    <!-- サイトアイコンの設定 -->
    <link rel="icon" href="{{ asset('images/sub_icon.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('images/sub_icon.png') }}">

</head>

<body>
    <header>
        <div class="header-content">
            <img src="{{ asset('images/sub_icon.png') }}" alt="Logo" class="logo">
            <img src="{{ asset('images/witelogo.png') }}" alt="Logo" class="logo">
        </div>

        <nav>
            <ul>
                <li><a href="{{ url('/') }}">トップページ</a></li>
                <li><a href="https://obfall.com/" target="_blank">会社概要</a></li>
            </ul>
        </nav>

    </header>

    <div class="container">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @yield('content')
    </div>

    <footer>
        <nav>
            <ul>

                <li><a href="{{ url('/tokuteisyoutorihiki') }}" target="_blank">特定商取引法の表示</a></li>
                <li><a href="{{ url('/privacypolicy') }}" target="_blank">プライバシーポリシー</a></li>
                <li><a href="{{ url('/user-agreement') }}" target="_blank">利用規約</a></li>
                <li><a href="{{ url('/contact') }}">お問い合わせ</a></li>
            </ul>

        </nav>
    </footer>
</body>

</html>