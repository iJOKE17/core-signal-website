# FROM php:8.0-fpm

# # Set working directory
# WORKDIR /var/www

# # Add docker php ext repo
# ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# # Install php extensions
# RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
#     install-php-extensions mbstring pdo_mysql zip exif pcntl gd memcached

# # Install dependencies
# RUN apt-get update && apt-get install -y \
#     build-essential \
#     libpng-dev \
#     libjpeg62-turbo-dev \
#     libfreetype6-dev \
#     locales \
#     zip \
#     jpegoptim optipng pngquant gifsicle \
#     unzip \
#     git \
#     curl \
#     lua-zlib-dev \
#     libmemcached-dev \
#     nginx

# # Install supervisor
# RUN apt-get update && apt-get install -y supervisor

# # Install composer
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# # Clear cache
# RUN apt-get clean && rm -rf /var/lib/apt/lists/

FROM php:8.0-fpm

RUN docker-php-ext-install pdo_mysql
# RUN a2enmod rewrite

ADD . /var/www
ADD ./public /var/www/html