# The mechanism for obtaining the time zone by the phone number of the subscriber #

 
## Usage ##

```bash

composer require valentininua/detecttimezonebynumber dev-master

```



```bash
php bin/console  doctrine:schema:update --force

 
# Doctrine Configuration
doctrine:
    dbal:
        driver: pdo_mysql
        host: '%database_host%'
        port: '%database_port%'
        dbname: '%database_name%'
        user: '%database_user%'
        password: '%database_password%'
        charset: UTF8




AppKernel.php
 
new App\PhoneBundle\PhoneBundle(),

example use 

$dataDetectTimezoneByNumber = $this->get('PhoneService')->detectTimezoneByNumber("+79851234567");


```
 
