<!-- resources/views/top.blade.php -->

@extends('layouts.top')

@section('title', 'トップページ')

@section('content')
<div class="promo-section">
    <img src="{{ asset('images/app_image.png') }}" alt="Promo Image" class="promo-image">
    <div lass="sub-title">聴く 見る 歌う</div>
    <h1>音楽をまるごと楽しもう</h1>
    <p class="hashtag"># 名曲から最新ヒット曲まで楽しみ放題</p>
    <p class="hashtag"># まずは１ヶ月無料体験</p>
    <div class="store-buttons">
        <a href="#" class="store-button">App Store</a>
        <a href="#" class="store-button">Google Play</a>
    </div>
    <p class="promo-subtext">アプリをダウンロードして無料体験。 いつでも解約できます。</p>
</div>

<div class="features-section">
    <div class="feature-box">
        <img src="{{ asset('images/download.png') }}" alt="Feature 1" class="feature-image">
        <h3 class="feature-title">タイトル1</h3>
        <p class="feature-description">これは最初の説明文です。</p>
    </div>
    <div class="feature-box">
        <img src="{{ asset('images/download.png') }}" alt="Feature 2" class="feature-image">
        <h3 class="feature-title">タイトル2</h3>
        <p class="feature-description">これは2つ目の説明文です。</p>
    </div>
    <div class="feature-box">
        <img src="{{ asset('images/download.png') }}" alt="Feature 3" class="feature-image">
        <h3 class="feature-title">タイトル3</h3>
        <p class="feature-description">これは3つ目の説明文です。</p>
    </div>
</div>



<div class="promo-box">
    <p class="promo-title">初めての方は</p>
    <h2 class="promo-highlight">１ヶ月無料で</h2>
    <p class="promo-text">お試しいただけます</p>
    <p class="promo-price">月額500円</p>
</div>


<div class="centered-content">
    <img src="{{ asset('images/sub_icon.png') }}" alt="App Image" class="app-image">
    <div lass="app-name">digOn</div>
    <p class="cta-text">まずは無料体験</p>
    <p class="cta-subtext">初めての登録なら１ヶ月無料！</p>
    <p class="cta-subtext">いつでも解約OK</p>
    <a href="#" class="cta-button">今すぐ始める <span class="arrow">></span></a>

</div>

@endsection