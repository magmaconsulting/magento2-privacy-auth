The Magento 2 PrivacyAuth adds customer privacy authorization request in:
* newsletter subscription form
* customer registration page
* checkout
* contact page


## Installation guide
```bash
$ composer config repositories.magento2-privacy-auth git git@github.com:magma/magento2-privacy-auth.git 
$ composer require magma/magento2-privacy-auth
$ php bin/magento cache:disable
$ php bin/magento module:enable Magma_PrivacyAuth
$ php bin/magento setup:upgrade
$ php bin/magento cache:enable
```
If you are using production or default mode
```bash
$ php bin/magento setup:di:compile
```
- - -