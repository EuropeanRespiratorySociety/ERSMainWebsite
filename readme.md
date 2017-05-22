# ERS Main Website

**Version 1.0.1**

## How to install
* clone the project locally `git clone https://github.com/EuropeanRespiratorySociety/ERSMainWebsite FOLDERNAME`
* `cd FOLDERNAME`
* Run `composer install` and/or `composer update`
* Run `npm install`
* update your `Homestead.yaml` and `hosts` file
* create a `.env` file (add Cloud CMS credentials, ...)
* you should now be able to navigate to the website.

## How to add a page
* add a route
* add a controller
* add the views you need

-------------------
-------------------
## Change log

### What is new in 1.0.1
* The Parser has been completly rewritten to include the model saved locally. 
* The views were simplified
* The views common elements have separated even further to simplify update/re-use.