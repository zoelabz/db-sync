<?php

use Zoelabz\DbSync;
use Zoelabz\DbSync\Core\DbSyncCore;

require_once realpath("../vendor/autoload.php");

echo syncTable();

$db_sync = new DbSyncCore();

$db_sync->initLocalConfig($localConfig);

$db_sync->initRemoteConfig($remoteConfig);
