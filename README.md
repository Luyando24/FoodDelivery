<<<<<<< HEAD
# FoodDelivery
## USE CASE
Please follow carefully the installation and use of this web framework of the FoodDelivery System for better utilisation of it. Do not skip any instruction as stated before.
1. clone this repo using your git bash
2. Once cloned navigate to the `backsystem` directory and open your command terminal
3. on terminal run `composer install --no-scripts`
=======
## USE CASE
Please follow carefully the installation and use of this FoodDelivery System for better utilisation of it. Do not skip any instruction as stated before.
1. clone this repo using your git bash using this url `https://github.com/Luyando24/FoodDelivery.git`
2. Once cloned navigate to the `backsystem` directory and open your command terminal there
3. on your command terminal run `composer install --no-scripts`
>>>>>>> 76cd08ad3988f00b506a8818e0bc021e22078ed5
4. run `copy .env.example .env`
5. run `php artisan config:clear`
6. run `php artisan cache:clear`
7. run `php artisan key:generate`
<<<<<<< HEAD
8. Now set up your database credentials in `.env` 
9. Set the URL of the system in `.env` on `APP_URL` e.g if your system is located in xampp->htdocs->FoodDelivery->backsystem then your `APP_URL` will be
`http://localhost/FooDelivery/backsystem/public` i.e `APP_URL=http://localhost/FoodDelivery/backsystem/public`
10.  Now you can migrate the tables as usual:
11.  `php artisan migrate`
12.  Now you can start the `index.php` in FooDelivery directory 
=======
8. Now set up your database credentials in `.env` and make the same database name in your wampp/xampp phpMyAdmin
9. In the same `.env` file set the `APP_URL` of your application. E.g if your system is located in xampp->htdocs->FoodDelivery->backsystem then your `APP_URL` will be
`APP_URL=http://localhost/FoodDelivery/backsystem/public`
10. Run the migrations now and make sure you have already created the database name as stated in (8): `php artisan migrate`
11. Navigate to the `index.php` file inside FooDelivery and continue as usual

>>>>>>> 76cd08ad3988f00b506a8818e0bc021e22078ed5
