# Pratama Krida Company Profile Web App

## Installation

**Pratama Krida Company Profile Web App** utilizes [Composer](https://getcomposer.org/) and [Bower](http://bower.io/) to manage its dependencies. So, before using **Telko Wallet Web Admin**, make sure you have Composer and Bower installed on your machine.

1. Clone this repo
2. Move to the cloned folder
3. `git checkout dev`
4. `composer install`
5. Move to `public` folder
6. `bower install`
7. Back to parent folder
8. Create a new database in mysql
9. Create a new file (`.env`) based on `.env.example`
10. Set database settings in `.env` (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`)
11. `php artisan key:generate`
12. `php artisan migrate --seed`
13. `php artisan serve`
14. Access `http://localhost:8000` in your browser or http://localhost:8000/auth to access admin page
15. Type `admin@pratamakrida.co.id` in `Email` field and type `12345678` in `Password` field
16. Click Sign In
17. You are ready to build amazing **Pratama Krida Company Profile Web App** apps
