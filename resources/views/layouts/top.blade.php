<!-- resources/views/layouts/top.blade.php -->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
    <title>digOn</title>
</head>

<body>
    <header>
        <div class="header-content">
            <img src="{{ asset('images/top_icon.png') }}" alt="Logo" class="logo">
            <h1 class="site-title">digOn</h1>
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

                <li><a href="{{ url('/tokuteisyoutorihiki') }}" target="_blank">特定商取引</a></li>
                <li><a href="{{ url('/privacypolicy') }}" target="_blank">プライバシーポリシー</a></li>
                <li><a href="{{ url('/riyoukiyaku') }}" target="_blank">利用規約</a></li>
                <li><a href="{{ url('/contact') }}">お問い合わせ</a></li>
            </ul>

        </nav>
    </footer>
</body>

</html>