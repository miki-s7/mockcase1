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

        <form class="form" action="/sell" method="post">
            @csrf
            <div>
                <h3>商品画像</h3>
                <input type="file" name="img" value="{{ old('img') }}" />
                <div class="form__error"></div>
            </div>
            <h2>商品名の詳細</h2>
            <h3>カテゴリー</h3>
            <div class="form__input--checkbox">
                @foreach ($categories as $category)
                <label><input type="checkbox" value="{{$category->id}}" name="category"><span>{{$category->name}}</span></label>
                @endforeach
            </div>
            <div>
                <h3>商品の状態</h3>
                <select class="condition" name='condition'>
                    <option value='good'>良好</option>
                    <option value='bad'>目立った傷や汚れなし</option>
                    <option value='bad'>やや傷や汚れあり</option>
                    <option value='bad'>状態が悪い</option>
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
                <input type="text" name="brand" value="{{ old('brand') }}" />
                <div class="form__error"></div>
            </div>
            <div>
                <h3>商品の説明</h3>
                <textarea type="content" name="content" value="{{ old('content') }}"></textarea>
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