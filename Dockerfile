FROM php:8.2-apache

# Install PHP extensions and system dependencies
RUN apt-get update && apt-get install -y \
    curl zip unzip git libpng-dev libonig-dev libxml2-dev gnupg ca-certificates lsb-release \
    libzip-dev libpq-dev \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set DocumentRoot to /public for Laravel
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install Node dependencies and build assets
RUN npm install
RUN npm run build

# Install PHP dependencies
RUN composer install --optimize-autoloader --no-dev

# Create storage symlink
RUN php artisan storage:link

# Cache config, routes, views
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 storage bootstrap/cache

# Expose HTTP port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
