# Use an official PHP and Apache base image
FROM php:7.4-apache

# Set the working directory
WORKDIR /var/www/html

# Copy your PHP application files into the container from the root directory
COPY . .

# Install PHP extensions and MySQL client
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Install and configure MySQL (replace with actual database setup)
# Example:
COPY ./mysql-config/my.cnf /etc/mysql/my.cnf
ENV MYSQL_ROOT_PASSWORD=
RUN apt-get update && apt-get install -y mysql-server

# Configure Apache (if needed)
# For example, you can enable mod_rewrite:
# RUN a2enmod rewrite

# Copy and configure your virtual host file
COPY ./apache-config/000-default.conf /etc/apache2/sites-available/000-default.conf

# Expose ports (if needed)
EXPOSE 80

# Start Apache web server and MySQL (replace with actual startup command)
# Example:
CMD ["apache2-foreground"]
