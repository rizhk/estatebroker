# ... do some setup ...
# then run the CMD passed as command-line arguments
cd /var/www/html/ && rm -rf vendor && composer install && npm install && npm run dev



php-fpm