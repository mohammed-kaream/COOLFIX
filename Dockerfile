FROM php:8.2-fpm

# تثبيت الحزم الأساسية للنظام ولـ Composer
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    nginx

# تثبيت ملحقات الـ PHP الضرورية للارفل
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# جلب الـ Composer من نسخته الرسمية
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
COPY . .

# السماح للـ Composer بالعمل بصلاحيات Root داخل الحاوية وتخطي الفحص
ENV COMPOSER_ALLOW_SUPERUSER=1

# تشغيل التثبيت مع تفادي مشاكل الحزم الناقصة
RUN composer install --no-interaction --no-plugins --no-scripts --no-dev --prefer-dist

RUN chmod -R 775 storage bootstrap/cache

EXPOSE 80

CMD php artisan serve --host=0.0.0.0 --port=80
