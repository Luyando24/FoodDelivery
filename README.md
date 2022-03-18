# FoodDelivery
## USE CASE
Please follow carefully the installation and use of this web framework of the FoodDelivery System for better utilisation of it. Do not skip any instruction as stated before.
1. clone this repo using your git bash
2. Once cloned navigate to the `backsystem` directory and open your command terminal
3. on terminal run `composer install --no-scripts`
4. run `copy .env.example .env`
5. run `php artisan config:clear`
6. run `php artisan cache:clear`
7. run `php artisan key:generate`
8. Now set up your database credentials in `.env` 
9. Set the URL of the system in `.env` on `APP_URL` e.g if your system is located in xampp->htdocs->FoodDelivery->backsystem then your `APP_URL` will be
`http://localhost/FooDelivery/backsystem/public` i.e `APP_URL=http://localhost/FoodDelivery/backsystem/public`
10.  Now you can migrate the tables as usual:
11.  `php artisan migrate`
12.  Now you can start the `index.php` in FooDelivery directory 
