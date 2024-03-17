Для работы необходим MySql

1) composer install     
2) php artisan migrate  
3) php artisan db:seed

Кнопка удаления слова есть только у админов.
Для этого в таблице пользователей в колнке role нужно прописать admin