# Change Password Package

## This will help to change the user password in laravel

[![Issues](https://img.shields.io/github/issues/sagautam5/changepassword
)](https://github.com/sagautam5/changepassword/issues)
[![Stars](https://img.shields.io/github/stars/sagautam5/changepassword
)](https://github.com/sagautam5/changepassword/stargazers)
[![Forks](https://img.shields.io/github/forks/sagautam5/changepassword
)](https://github.com/sagautam5/changepassword/stargazers)

# Change Password

  Change Password is a laravel package for changing logged in user password. General authentication features like login, 
  register, forget password and email verification already comes with laravel builtin authentication. Password change feature for loggedin user is still missing.
  You can use this package to allow logged in users to change their password.
  
  Change Password Requires 
  
  PHP >= 7.1.3
  
  Laravel >= 5.8.*
   
# Installation

```sh
composer require sagautam5/changepassword
```

# Basic Usage

After installation, you can use the change password feature by sending get 
request to following route,

```sh
url : url('/changepassword')
route: route('password.change.form')
``` 

After hitting above route or url, You will see a form like this:

![Password Change Form](https://raw.githubusercontent.com/sagautam5/changepassword/master/src/images/changepassword.png)

If you want to change the form layout then just run the following command in console

```sh
php artisan vendor:publish
```

Then, select following provider,
 
```sh
    Provider: Sagautam5\ChangePassword\ChangePasswordServiceProvider
```

Then you will see **change.blade.php** in the following path:

```sh
   resources/views/vendor/changepassword/password/change.blade.php
```

You can modify this blade file to make password change form as you want.

