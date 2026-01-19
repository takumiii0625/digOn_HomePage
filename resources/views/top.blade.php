<!-- resources/views/top.blade.php -->

@extends('layouts.top')

@section('title', 'トップページ')

@section('content')

{{-- Hero Section --}}
<section class="promo-section">
    <div class="phone-mockup">
        <img src="{{ asset('images/app_image.jpg') }}" alt="digOn App" class="promo-image">
        <span class="screen-glare"></span>
        <span class="side-button power"></span>
        <span class="side-button volume-up"></span>
        <span class="side-button volume-down"></span>
    </div>
    <h1>音楽に、出会える。</h1>
    <p class="sub-title">「ディグる」ことで、好きな曲の、アーティストの、一番最初のファンになろう。</p>
    <p class="hashtag">月額500円で全機能解放。無料でも十分に楽しめます。</p>
    <p class="hashtag">今なら1ヶ月無料体験。</p>
    <p class="promo-subtext">Download Now</p>
    <div class="store-buttons">
        <a href="https://apps.apple.com/jp/app/digon/id6618156307" class="store-button" target="_blank" rel="noopener">
            App Store
        </a>
        <a href="https://play.google.com/store/apps/details?id=com.obfall.digOn" class="store-button" target="_blank" rel="noopener">
            Google Play
        </a>
    </div>
</section>

{{-- Features Section --}}
<section class="features-section">
    <article class="feature-box">
        <div class="phone-mockup-small">
            <img src="{{ asset('images/like.jpg') }}" alt="Instant Play" class="feature-image">
            <span class="screen-glare"></span>
        </div>
        <h3 class="feature-title">アプリを起動したら、すぐに音楽が聴けます。</h3>
        <p class="feature-description">
            広告は一切ナシ。<br>
            あえてシンプルに、無駄のない操作性のため、<br>
            あなたの邪魔をせず、音楽を届けます。
        </p>
    </article>
    <article class="feature-box">
        <div class="phone-mockup-small">
            <img src="{{ asset('images/subsc.jpg') }}" alt="Free Access" class="feature-image">
            <span class="screen-glare"></span>
        </div>
        <h3 class="feature-title">無料でも、音楽に出会える。</h3>
        <p class="feature-description">
            サブスク会員にならずとも、音楽を聴くことができます。<br>
            ※一部機能が制限されます。詳細は料金プランをご覧ください。
        </p>
    </article>
    <article class="feature-box">
        <div class="phone-mockup-small">
            <img src="{{ asset('images/download.jpg') }}" alt="Offline Mode" class="feature-image">
            <span class="screen-glare"></span>
        </div>
        <h3 class="feature-title">データ量を気にせず、あなただけのプレイリストを。</h3>
        <p class="feature-description">
            気になった曲は、ダウンロードしてオフラインでの再生も可能です。
        </p>
    </article>
</section>

{{-- Pricing Section --}}
<section class="promo-box">
    <p class="promo-title">初めての方は</p>
    <h2 class="promo-highlight">1ヶ月無料で</h2>
    <p class="promo-text">お試しいただけます</p>
    <p class="promo-price">月額500円</p>

    <table class="membership-table">
        <thead>
            <tr>
                <th>プラン</th>
                <th>無料会員</th>
                <th>有料会員</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ランダム再生</td>
                <td>○</td>
                <td>○</td>
            </tr>
            <tr>
                <td>お気に入り登録</td>
                <td>○</td>
                <td>○</td>
            </tr>
            <tr>
                <td>お気に入り曲再生</td>
                <td>30秒のみ</td>
                <td>フル再生</td>
            </tr>
            <tr>
                <td>検索画面からの再生</td>
                <td>30秒のみ</td>
                <td>フル再生</td>
            </tr>
            <tr>
                <td>アーティスト画面からの再生</td>
                <td>30秒のみ</td>
                <td>フル再生</td>
            </tr>
            <tr>
                <td>ダウンロード</td>
                <td>-</td>
                <td>○</td>
            </tr>
        </tbody>
    </table>
</section>

{{-- CTA Section --}}
<section class="centered-content">
    <img src="{{ asset('images/sub_icon.png') }}" alt="digOn" class="app-image">
    <p class="app-name">digOn</p>
    <p class="cta-text">まずは無料体験</p>
    <p class="cta-subtext">初めての登録なら1ヶ月無料</p>
    <p class="cta-subtext">いつでも解約OK</p>
    <a href="https://apps.apple.com/jp/app/digon/id6618156307" class="cta-button" target="_blank" rel="noopener">
        今すぐ始める
        <span class="arrow">→</span>
    </a>
</section>

@endsection
