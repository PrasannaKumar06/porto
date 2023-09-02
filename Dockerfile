# Use an official PHP and Apache base image
FROM php:7.4-apache

# Set the working directory
WORKDIR /var/www/html

# Copy your PHP application files into the container from the root directory
COPY . .

# Install PHP extensions (if needed)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Install and configure Apache (if needed)
# RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Start Apache and your PHP application (replace with actual startup command)
CMD ["apache2-foreground"]
