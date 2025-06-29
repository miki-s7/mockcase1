<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <title>商品一覧画面</title>
</head>
<body>
    <header class="header">
        <img src="./img/logo.svg" alt="" />
        <nav>
            <ul>
                <li>ログアウト</li>
                <li>マイページ</li>
                <li><a href="sell.blade.php">出品</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2></h2>
        <div class="list">
            <div>おすすめ</div>
            <div>マイリスト</div>
        </div>
        <div class="products">
            <div class="item">
                <div class="item-photo">商品画像</div>
                <div>商品名</div>
            </div>
            <div class="item">
                <div class="item-photo">商品画像</div>
                <div>商品名</div>
            </div>
        </div>
    </main>
</body>
</html>