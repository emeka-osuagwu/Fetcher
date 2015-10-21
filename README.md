<<<<<<< HEAD
# Candy
[![Build Status](https://travis-ci.org/andela-eosuagwu/Candy.svg)](https://travis-ci.org/andela-eosuagwu/Candy)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/andela-eosuagwu/Candy/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/andela-eosuagwu/Candy/?branch=master)


#### Candy is lightweight ORM based in php


#Testing
 The phpunit framework for testing is used to perform
 unit test on the classes. The TDD principle has been
 employed to make the application robust

 Run this on bash to execute the tests
 ```````bash
 /vendor/bin/phpunit
`````````

#Install

- To install this package, PHP 5.5+ and Composer are required

````bash
composer require emeka/candy
``````

#Usage

- Save a model in the database

````````
$user = new User();
$user->username = "john";
$user->password = "password";
$user->email = "john@doe.co";
$user->save();
`````````
- Find a model

``````
$user = User::find($id);
``````
- Update a record

``````
$user = User::find($id);
$user->password = "s†røngerPaSswoRd";
$user->save();
``````
- Delete a record -- returns a boolean

````````
$result = User::destroy($id):
````````


## Change log
Please check out [CHANGELOG](CHANGELOG.md) file for information on what has changed recently.

## Contributing
Please check out [CONTRIBUTING](CONTRIBUTING.md) file for detailed contribution guidelines.

## Credits
Candy is maintained by `Emeka Osuagwu`.

## License
Urban dictionary is released under the MIT Licence. See the bundled [LICENSE](LICENSE.md) file for more details.

=======
[![Build Status](https://scrutinizer-ci.com/g/andela-eosuagwu/Fetcher/badges/build.png?b=master)](https://scrutinizer-ci.com/g/andela-eosuagwu/Fetcher/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/andela-eosuagwu/Fetcher/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/andela-eosuagwu/Fetcher/?branch=master)
[![Build Status](https://travis-ci.org/andela-eosuagwu/Fetcher.svg?branch=master)](https://travis-ci.org/andela-eosuagwu/Fetcher)

# Fetcher
Fetcher is a super light weight PHP database driver, that helps you sync and fetch data from any PDO database in your application.


# Install
Via Composer

To add open-source-fetcher as a dependency, run the following in your project directory.

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
$fetcher = new Fetch();
$fetch->query('Select * from posts');
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
f you discover any security related issues, please email <a href = "emekaosuagwuandela@gmail.com">emekaosuagwuandela@gmail.com</a> or <a href = "https://twitter.com/dev_emeka">@dev_emeka</a> instead of using the issue tracker.

# Credit
###Emeka Osuagwu
# License
The MIT License (MIT). Please see <a href = "LICENSE.md">License File</a> for more information.
>>>>>>> a5823c5d97cfe4787d130a303bd4f19457aa2579

