[![Build Status](https://scrutinizer-ci.com/g/andela-eosuagwu/Fetcher/badges/build.png?b=master)](https://scrutinizer-ci.com/g/andela-eosuagwu/Fetcher/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/andela-eosuagwu/Fetcher/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/andela-eosuagwu/Fetcher/?branch=master)
[![Build Status](https://travis-ci.org/andela-eosuagwu/Fetcher.svg?branch=master)](https://travis-ci.org/andela-eosuagwu/Fetcher)

# Fetcher
Fetcher is a super light weight PHP database driver, that helps you sync and fetch data from any PDO database in your application.


# Install
Via Composer

To add open-source-evangelist as a dependency, run the following in your project directory.

```php
$ composer install emeka/fetcher
```
Then to install, run

```php
$ composer install
```

# Usage

###First

Create .env file in your root `Directory`

Then add the following

* db_user = "database_user"
* db_host = "database_host"
* db_name = "database_name"
* database = "database_type"
* db_password = "database_password"


### Then

```
use Emeka\Fetcher\Fetcher\Fetch;
$fetcher = new Fetch('Select * from posts');
echo $fetcher->fetchObj();
echo $fetcher->fetchLazy();
echo $fetcher->fetchBoth();
echo $fetcher->fetchAssoc();

```
# Testing
To test, type the following into the terminal from the project directory

```
$ phpunit
```
or
```
$ composer test
```
# Security
f you discover any security related issues, please email <a href = "emekaosuagwuandela@gmail.com">emekaosuagwuandela@gmail.com</a> instead of using the issue tracker.

# Credit
###Emeka Osuagwu
# License
The MIT License (MIT). Please see <a href = "LICENSE.md">License File</a> for more information.

