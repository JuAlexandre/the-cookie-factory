# the-cookie-factory

## Description

From the resources above and the template that you can retrieve on [Github](https://github.com/WildCodeSchool/quetes_php_cookies_sessions) you will be able to start the development of the e-commerce site: "The Cookie Factory".

This is a small application that can identify with only a username, without calling a database.

> We enter a username in the login form, it is taken into account and recorded in session. We do not ask for a password to verify the identity.

If the user is not identified, he does not have access to the other pages of the website.

> As long as there is no session variable containing the name of the user, it is redirected to the login page. You can search on your favorite search engine how to redirect in PHP.


Once identified, the user is redirected to the page `index.php` where we find the list of available cookies. And of course, it is no longer possible to access the login page.


On this page, a whole list of cookies is offered to you. When a customer clicks the add to cart button, you must save this item in your `session` variables.

> It's up to you to modify the behavior of the button for the addition to be taken into account.

> Before saving the client cart in `$_SESSION`, you may need to pass the information via `$_GET` or `$_POST`.


As you can see, in the menu bar, we welcome "Wilder", use the name of the user to customize the greeting.

## Installation

Clone the repository :
```
git clone https://github.com/JuAlexandre/the-cookie-factory.git
```


Launch the PHP server in `the-cookie-factory` folder :
```
php -S localhost:8000
```