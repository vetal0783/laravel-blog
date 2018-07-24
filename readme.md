COMPOSER SETUP:
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
mv composer.phar /usr/local/bin/composer

INSTALL THE PROJECT:
* git clone https://github.com/vetal0783/laravel-blog.git
* Composer install
* Create DB - laravel-blog
* php artisan migrate
* php artisan db:seed

SETTINGS VirtualHost:
<Directory /var/www/html/laravel-blog/public>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>

RUN THE PROJECT:
Add 192.168.48.132 laravel-blog to the file:
C:\Windows\System32\drivers\etc\hosts