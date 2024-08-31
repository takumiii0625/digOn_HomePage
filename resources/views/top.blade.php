<!-- resources/views/top.blade.php -->

@extends('layouts.top')

@section('title', 'トップページ')

@section('content')
<div class="promo-section">
    <img src="{{ asset('images/app_image.png') }}" alt="Promo Image" class="promo-image">
    <h1>音楽に、出会える。</h1>
    <div lass="sub-title">「ディグる」ことで、好きな曲の、アーティストの、一番最初のファンになろう。</div>
    <p class="hashtag">月額500円で全機能解放。無料でも十分に楽しめます。</p>
    <p class="hashtag">今なら1ヶ月無料体験。</p>
    <p class="promo-subtext">まずはアプリをインストール </p>
    <div class="store-buttons">
        <a href="#" class="store-button">App Store</a>
        <a href="#" class="store-button">Google Play</a>
    </div>
</div>

<div class="features-section">
    <div class="feature-box">
        <img src="{{ asset('images/download.png') }}" alt="Feature 1" class="feature-image">
        <h3 class="feature-title">アプリを起動したら、すぐに音楽が聴けます。</h3>
        <p class="feature-description">
            広告は一切ナシ。<br>
            あえてシンプルに、無駄のない操作性のため、<br>
            あなたの邪魔をせず、音楽を届けます。
        </p>
    </div>
    <div class="feature-box">
        <img src="{{ asset('images/download.png') }}" alt="Feature 2" class="feature-image">
        <h3 class="feature-title">無料でも、音楽に出会える。</h3>
        <p class="feature-description">
            サブスク会員にならずとも、音楽を聴くことができます。<br>
            ※一部機能が制限されます。詳細は料金プランをご覧ください。
        </p>
    </div>
    <div class="feature-box">
        <img src="{{ asset('images/download.png') }}" alt="Feature 3" class="feature-image">
        <h3 class="feature-title">データ量を気にせず、あなただけのプレイリストを。</h3>
        <p class="feature-description">気になった曲は、ダウンロードしてオフラインでの再生も可能です。</p>
    </div>
</div>



<div class="promo-box">
    <p class="promo-title">初めての方は</p>
    <h2 class="promo-highlight">１ヶ月無料で</h2>
    <p class="promo-text">お試しいただけます</p>
    <p class="promo-price">月額500円</p>
    <!-- ここに新しい表を追加 -->
    <!-- おしゃれな表を追加 -->
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
                <td>〇</td>
                <td>〇</td>
            </tr>
            <tr>
                <td>お気に入り登録</td>
                <td>〇</td>
                <td>〇</td>
            </tr>
            <tr>
                <td>お気に入り曲再生</td>
                <td>３０秒のみ聴けます</td>
                <td>フルで聴けます</td>
            </tr>
            <tr>
                <td>検索画面からの再生</td>
                <td>３０秒のみ聴けます</td>
                <td>フルで聴けます</td>
            </tr>
            <tr>
                <td>アーティスト画面からの再生</td>
                <td>３０秒のみ聴けます</td>
                <td>フルで聴けます</td>
            <tr>
                <td>ダウンロード</td>
                </td>
                <td>×</td>
                <td>〇</td>
            </tr>
        </tbody>
    </table>
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