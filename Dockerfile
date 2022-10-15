FROM php:8.1.0-fpm

# Copy composer.lock and composer.json@\
COPY composer.lock composer.json /var/www/

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    g++ \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    #  zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    nano \
    git\ 
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && apt-get autoclean -y

#  unzip \

#  curl 
RUN docker-php-ext-install mysqli pdo pdo_mysql
# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
#RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
#RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
#RUN docker-php-ext-install gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
RUN groupadd -g 1000 www 
# addroup -g (let make them primary group with id 100) to folder (www) 
RUN useradd -u 1000 -ms /bin/bash -g www www
RUN useradd azeez -ms /bin/bash -p zeeza
# -g www www
COPY . var/www

# RUN chmod -R 644 bootstrap/cache -f
# RUN chmod -R 755 storage  -f
# RUN chmod -R 755 storage -f
# RUN chmod -R 755 vendor -f
# Copy existing application directory contents

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Change current user to www+

USER www
# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
