# フリマアプリ

## 環境構築

### Docker ビルド

1. git clone https://github.com/miki-s7/mockcase1.git
2. docker-compose up -d --build

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;※MySQL は、OS によって起動しない場合があるのでそれぞれの PC に合わせて docker-compose.yml ファイルを編集してください。

### Laravel 環境構築

1. docker-compose exec php bash
1. composer install
1. composer require livewire/livewire
1. cp .env.example .env
1. .env ファイルの一部を以下のように編集

```
DB_HOST=mysql
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
```

6. php artisan key:generate
1. php artisan migrate
1. php artisan db:seed