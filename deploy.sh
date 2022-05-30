#!/bin/sh
php artisan down
echo "Deployment started."
# first arg is `-f` or `--some-option`
if [ "${1#-}" != "$1" ]; then
    php artisan migrate:fresh --seed
    echo "Migrations completed with seed."
else
php artisan migrate --force
fi
php artisan cache:clear
echo "Cache is cleared."
php artisan up
echo "Completed, Bye.. "
