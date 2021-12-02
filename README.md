# Magento 2 - Custom Bar Module

# Installation with [Composer](https://getcomposer.org/)

Add github repository to composer.json file. On Magento root folder, run:

```
composer config repositories.lesite/custombar git git@github.com:samuelgallo/test-magento-module-topbar.git
```


Then, install the module
```
composer require lesite/custombar:dev-master
```

Run magento setup upgrade. On Magento root folder:
```
php bin/magento setup:upgrade
```

Deploy static view files:
```
php bin/magento setup:static-content:deploy
```

Clear magento cache:
```
php bin/magento cache:flush
```


## Uninstall
```
composer remove lesite/custombar
```