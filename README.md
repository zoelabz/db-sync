# Database Synchronizer

# Install With Composer
-> composer require zoelabz/db-sync

```php
require_once 'vendor/autoload.php';

$localConfig = [
    'host'  => 'db host',

    'username'     => 'database username',
    'password' => 'database password',

    'db_name' => 'database name'

    'db_type' => 'your db type'
];

$remoteConfig = [
    'host'  => 'db host',
    
    'username'     => 'database username',
    'password' => 'database password',

    'db_name' => 'database name'

    'db_type' => 'your db type'
];

$db_sync = new \Zoelabz\DbSync\DbSync($localConfig, $remoteConfig);


$db_sync->syncTable('table_name'); //Synchronizing Table

$db_sync->syncTables('table_1_name', 'table_2_name', 'table_3_name'); //Synchronizing Tables

$db_sync->syncDatabase(); //Synchronizing Database

```

[zoelabz/db-sync](https://github.com/zoelabz/db-sync)  
zoelabz@gmail.com