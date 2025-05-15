<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
</head>
<body>
    <header>

    </header>
    <main>
        <h2>ログイン</h2>

        <form class="form" action="/login" method="post">
            @csrf
            <div>
                <div>メールアドレス</div>
                <input type="text" name="email" value="{{ old('email') }}" />
                <div class="form__error"></div>
            </div>
            <div>
                <div>パスワード</div>
                <input type="password" name="password" />
                <div class="form__error"></div>
            </div>
            <div>
                <button type="submit">ログインする</button>
            </div>
        </form>
        <a>会員登録はこちら</a>
    </main>
</body>
</html>