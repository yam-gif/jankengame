# ベースイメージに PHP + Apache を使用
FROM php:8.1-apache

# ドキュメントルートにソースコードをコピー
COPY . /var/www/html/

# 必要に応じて PHP 拡張モジュールをインストール（例：MySQL 用）
# RUN docker-php-ext-install mysqli pdo pdo_mysql

# Apache の mod_rewrite を有効化したい場合
# RUN a2enmod rewrite

# ドキュメントルートのパーミッション調整（必要なら）
RUN chown -R www-data:www-data /var/www/html

# ポート 80 を公開
EXPOSE 80

# デフォルトコマンドは php:apache のものが使われるので指定不要

