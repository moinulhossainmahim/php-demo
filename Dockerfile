# Use the official PHP image
FROM php:7.4-cli

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    curl \
    vim \
    git \
    && docker-php-ext-install pdo pdo_mysql

# Install entr for file watching
RUN apt-get install -y entr

# Copy the application files to the container
COPY . /usr/src/myapp

# Set the working directory
WORKDIR /usr/src/myapp

# Expose port 8000
EXPOSE 8000

# Command to run PHP's built-in web server with entr for auto-reloading
CMD ls -d /usr/src/myapp/* | entr -r php -S 0.0.0.0:8000 -t public
