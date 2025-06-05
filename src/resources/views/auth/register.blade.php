<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
    <title>会員登録画面</title>
</head>
<body>
    <header class="header header__inner header__logo">
        <div>
            <img src="./img/logo.svg" alt="" />
        </div>
    </header>
    <main class="contact-form__content contact-form__heading">
        <h2>会員登録</h2>

        <form class="form" action="/register" method="post">
            @csrf
            <div>
                <div>ユーザ名</div>
                <input type="text" name="name" value="{{ old('name') }}" />
                <div class="form__error"></div>
            </div>
            <div>
                <div>メールアドレス</div>
                <input type="email" name="email" value="{{ old('email') }}" />
                <div class="form__error"></div>
            </div>
            <div>
                <div>パスワード</div>
                <input type="password" name="password" />
                <div class="form__error"></div>
            </div>
            <div>
                <div>確認用パスワード</div>
                <input type="password" name="password_confirmation" />
                <div class="form__error"></div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">登録する</button>
            </div>
        </form>
        <a href="">ログインはこちら</a>
    </main>
</body>
</html>