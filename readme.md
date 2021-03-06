# ERS Main Website

## Docker
From the cloned repository:

* Simply run `docker-compose up` or `docker-compose up -d` (detached mode)
* Stop the containers with `ctrl/cmd c` or `docker-compose stop` (when in detached mode)
* Rebuild images `docker-compose up -d --build` this command recreates the containers from scratch.

The webiste will be available on port `8888` can be modified in `docker-compose.yml`

## Connect to running container
* `docker exec -ti ersmainwebsite_app_1 /bin/bash`
This will give you a termina (`i`: interactive, `t`: keep stdin open)

## Only once after cloning the repository
* install dependecies by running `composer install` inside the container.

## Clean the cache


Change code as usual from the cloned repository, it will be synced in the container. You might need to clean the cache __from inside the container__ if php is not installed on your machine:

* `php artisan httpcache:clear`
* `php artisan cache:clear`
* `php artisan view:clear`

**Version 1.0.1**

## How to install (without docker)
* clone the project locally `git clone https://github.com/EuropeanRespiratorySociety/ERSMainWebsite FOLDERNAME`
* `cd FOLDERNAME`
* Run `composer install` and/or `composer update`
* Run `npm install`
* update your `Homestead.yaml` and `hosts` file
* create a `.env` file (add Cloud CMS credentials, ...)
* you should now be able to navigate to the website.

-------------------

## How to add a page
* add a route
* add a controller
* add the views you need
* (optionally add a navigation menu item in the middleware)

-------------------
## Change log

### What is new in 1.0.1
* The Parser has been completly rewritten to include the model saved locally. 
* The views were simplified
* The views common elements have separated even further to simplify update/re-use.