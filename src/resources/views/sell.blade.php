<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sell.css') }}" />
    <title>商品出品ページ</title>
</head>
<body>
    <header class="header">
        <div>
            <img src="./img/logo.svg" alt="" />
        </div>
    </header>
    <main class="contact-form__content contact-form__heading">
        <h2>商品の出品</h2>

        <form class="form" action="" method="post">
            @csrf
            <div>
                <h3>商品画像</h3>
                <input type="file" name="img" value="{{ old('img') }}" />
                <div class="form__error"></div>
            </div>
            <h2>商品名の詳細</h2>
            <h3>カテゴリー</h3>
            <div class="form__input--checkbox">
                <label><input type="checkbox" value="ファッション" name="category"><span>ファッション</span></label>
                <label><input type="checkbox" value="家電" name="category"><span>家電</span></label>
                <label><input type="checkbox" value="インテリア" name="category"><span>インテリア</span></label>
            </div>
            <div>
                <h3>商品の状態</h3>
                <select class="condition" name='condition'>
                    <option value='good'>良い</option>
                    <option value='bad'>悪い</option>
                </select>
            </div>
            <h2>商品名と説明</h2>
            <div>
                <h3>商品名</h3>
                <input type="text" name="name" value="{{ old('name') }}" />
                <div class="form__error"></div>
            </div>
            <div>
                <h3>ブランド名</h3>
                <input type="text" name="bland" value="{{ old('bland') }}" />
                <div class="form__error"></div>
            </div>
            <div>
                <h3>商品の説明</h3>
                <textarea type="content" value="{{ old('content') }}"></textarea>
                <div class="form__error"></div>
            </div>
            <div>
                <h3>販売価格</h3>
                <input type="text" name="price" value="{{ old('price') }}" />
                <div class="form__error"></div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">出品する</button>
            </div>
        </form>
    </main>
</body>
</html>