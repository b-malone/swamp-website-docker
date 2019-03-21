cd /home/forge/default
git pull origin master
composer require carbon:1.26.3
composer require tcg/voyager
composer install --no-interaction --prefer-dist --optimize-autoloader
npm run development
echo "" | sudo -S service php7.2-fpm reload

if [ -f artisan ]
then
    php artisan config:cache
    php artisan voyager:install
    php artisan migrate --force
    php artisan db:seed --class=CategoriesTableSeeder
    php artisan db:seed --class=UsersTable
    php artisan db:seed --class=BlogPostsTableSeeder
fi
