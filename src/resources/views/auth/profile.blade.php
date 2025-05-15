<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール設定画面</title>
</head>
<body>
    <header>

    </header>
    <main>
        <h2>プロフィール設定画面</h2>

        <form action="/profile" method="post">
            @csrf
            <div>
                <div>ユーザ名</div>
                <input type="text" name="name">
                <div class="form__error"></div>
            </div>
            <div>
                <div>郵便番号</div>
                <input type="text" name="postcode" value="{{ old('postcode') }}">
                <div class="form__error"></div>
            </div>
            <div>
                <div>住所</div>
                <input type="text" name="address" value="{{ old('address') }}">
                <div class="form__error"></div>
            </div>
            <div>
                <div>建物名</div>
                <input type="text" name="building" value="{{ old('building') }}">
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