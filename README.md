# mockcase1
環境構築
Docker ビルド
git clone https://github.com/miki-s7/mockcase1.git
docker-compose up -d --build
     ※MySQL は、OS によって起動しない場合があるのでそれぞれの PC に合わせて docker-compose.yml ファイルを編集してください。

Laravel 環境構築
docker-compose exec php bash
composer install
composer require livewire/livewire
cp .env.example .env
.env ファイルの一部を以下のように編集
DB_HOST=mysql
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
php artisan key:generate
php artisan migrate
php artisan db:seed