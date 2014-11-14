# Zend Framework 2 Module for Gaufrette

## Introduction
This module integrates [Gaufrette](https://github.com/KnpLabs/Gaufrette) with [Zend Framework 2](https://github.com/zendframework/zf2).

## Requirements
[Zend Framework 2 Skeleton Application](http://www.github.com/zendframework/ZendSkeletonApplication) (or compatible architecture)

## Installation
Install the module through [Composer](http://getcomposer.org/) using the following steps:

  1. `cd my/project/directory`
  
  2. Create a `composer.json` file with following contents (or update your existing file accordingly):

     ```json
     {
         "require": {
             "detailnet/gaufrette-module": "dev-master"
         }
     }
     ```
  3. Install Composer via `curl -s http://getcomposer.org/installer | php` (on Windows, download
     the [installer](http://getcomposer.org/installer) and execute it with PHP)
     
  4. Run `php composer.phar self-update`
     
  5. Run `php composer.phar install`
  
  6. Open `configs/application.config.php` and add following key to your `modules`:

     ```php
     'Detail\Gaufrette',
     ```

  7. Copy `vendor/detailnet/gaufrette-module/config/gaufrette.local.php.dist` into your application's
     `config/autoload` directory, rename it to `gaufrette.local.php` and make the appropriate changes.

## Usage
tbd
