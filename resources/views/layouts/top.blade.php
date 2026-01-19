<!-- resources/views/layouts/top.blade.php -->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="digOn - 音楽に、出会える。新しい音楽との出会いを提供する音楽ストリーミングアプリ">
    <meta name="theme-color" content="#0a0a0f">

    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Noto+Sans+JP:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">

    <title>digOn - 音楽に、出会える</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/sub_icon.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('images/sub_icon.png') }}">

    <style>
        /* Additional font stack with Japanese support */
        body {
            font-family: 'Inter', 'Noto Sans JP', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }

        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }

        /* Selection color */
        ::selection {
            background: rgba(102, 126, 234, 0.3);
            color: #ffffff;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-content">
            <a href="{{ url('/') }}" style="display: flex; align-items: center; gap: 12px; text-decoration: none;">
                <img src="{{ asset('images/sub_icon.png') }}" alt="digOn Logo" class="logo">
                <img src="{{ asset('images/witelogo.png') }}" alt="digOn" class="logo">
            </a>
        </div>

        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Top</a></li>
                <li><a href="https://obfall.com/" target="_blank" rel="noopener">Company</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @yield('content')
    </main>

    <footer>
        <nav>
            <ul>
                <li><a href="{{ url('/tokuteisyoutorihiki') }}" target="_blank">特定商取引法の表示</a></li>
                <li><a href="{{ url('/privacypolicy') }}" target="_blank">プライバシーポリシー</a></li>
                <li><a href="{{ url('/user-agreement') }}" target="_blank">利用規約</a></li>
                <li><a href="{{ url('/contact') }}">お問い合わせ</a></li>
            </ul>
        </nav>
        <p class="copyright">&copy; {{ date('Y') }} digOn. All rights reserved.</p>
    </footer>

    <script>
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
