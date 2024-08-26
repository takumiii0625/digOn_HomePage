<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>特定商取引法に基づく表示</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* 画面の両サイドに20%の余白を追加 */
        .content-container {
            margin-left: 5%;
            margin-right: 5%;
        }

        body {
            font-size: 2vw;
            /* ビューポートの幅の2%に基づいたフォントサイズ */
        }

        h1 {
            font-size: 4vw;
            /* h1はより大きく設定 */
            margin-top: 20px;
        }

        p {
            font-size: 2vw;
            /* 段落のフォントサイズ */
            line-height: 1.6;
            /* 行間を広めにして読みやすく */
        }

        /* 画面サイズが大きいときのフォントサイズ */
        @media (min-width: 1024px) {
            body {
                font-size: 18px;
                /* デスクトップでは通常サイズに戻す */
            }

            h1 {
                font-size: 36px;
            }

            p {
                font-size: 18px;
            }
        }

        /* 画面サイズが小さいときのフォントサイズ */
        @media (max-width: 600px) {
            body {
                font-size: 3.5vw;
                /* 小さな画面ではフォントを少し大きめに */
            }

            h1 {
                font-size: 6vw;
            }

            p {
                font-size: 3.5vw;
            }
        }
    </style>
</head>

<body class="antialiased">
    <div class="content-container">
        <h1>特定商取引法に基づく表示</h1>

        <p>OBFall株式会社が提供する音楽アプリdigOn（以下、「本アプリ」といいます。）の有償サブスクリプションサービスに関する特定商取引法に基づく表示は以下のとおりです。</p>

        <p>販売価格</p>
        <p>月額●円（消費税込み）</p>

        <p>代金の支払時期、方法</p>
        <p>支払時期：本アプリにおいて購入手続を行った後</p>
        <p>支払方法：Apple、Googleが提供する決済手段</p>

        <p>サービスの提供時期</p>
        <p>購入手続完了直後</p>

        <p>契約の申込みの撤回又は解除に関する事項</p>
        <p>本アプリの性質上、購入後のお客様のご都合によるキャンセルはお受けできません。</p>

        <p>事業者の名称、住所、電話番号</p>
        <p>名称：ＯＢＦａｌｌ株式会社　代表取締役　上遠野　博紀</p>
        <p>住所：東京都港区海岸１－２－３汐留芝離宮ビルディング２１階</p>
        <p>電話番号：●</p>

        <p>事業者が法人であって、電子情報処理組織を利用する方法により広告をする場合には、当該事業者の代表者又は通信販売に関する業務の責任者の氏名</p>
        <p>上記５の通り。</p>

        <p>販売価格、送料等以外に購入者等が負担すべき金銭があるときには、その内容及びその額</p>
        <p>現時点ではない。</p>

        <p>いわゆるソフトウェアに関する取引である場合には、そのソフトウェアの動作環境</p>
        <p>●</p>

        <p>商品の販売数量の制限等、特別な販売条件（役務提供条件）があるときは、その内容</p>
        <p>ある場合は個別のサービスの販売画面に表示します。</p>

        <p>電子メールによる商業広告を送る場合には、事業者の電子メールアドレス</p>
        <p>●</p>

        <p>以上</p>
        <p>令和●年●月●日　制定</p>
    </div>
</body>

</html>