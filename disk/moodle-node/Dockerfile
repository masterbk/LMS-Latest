FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    supervisor \
    nginx \
    build-essential \
    openssl \
    vim -y \
	&& apt install cron -y \
	&& (crontab -l; echo "* * * * * /usr/local/bin/php /var/www/html/edu-vtc-lms/admin/cli/cron.php >> /proc/1/fd/1 2>&1") | crontab -

ADD --chmod=0755 https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN install-php-extensions zip mysqli pdo_mysql gd intl soap exif redis

WORKDIR /var/www/html
COPY ./supervisord.conf /etc/supervisord.conf

RUN mkdir edu-vtc-lms
RUN mkdir moodledata

COPY ./source/edu-vtc-lms /var/www/html/edu-vtc-lms
COPY ./source/moodledata_eduvtclms /var/www/html/moodledata

RUN chmod -R 777 /var/www/html

# run supervisor
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisord.conf"]