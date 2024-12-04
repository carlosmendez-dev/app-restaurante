echo "Reconstruyendo Base de datos"
rm ./database/database.sqlite
php artisan migrate