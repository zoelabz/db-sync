<?php

namespace Zoelabz\DbSync\Core;

/**
*
* DbSyncCore
*
*/
class DbSyncCore
{
	
	function __construct()
	{
		echo "Initializing Db Sync";
	}

	/*
	*
	* Initiliaze Local Config
	*
	* @param array $localConfig
	*
	*/
	public function initLocalConfig($localConfig)
	{

	}

	/*
	*
	* Initiliaze Remote Config
	*
	* @param array $remoteConfig
	*
	*/
	public function initRemoteConfig($remoteConfig)
	{

	}

	/*
	*	
	*	Sync Table from Local to Remote
	*
	*	@param string $table_name
	*
	*/
	function syncTable($table_name) {
		echo "Sync Single Table";
	}

	/*
	*	
	*	Sync Tables from Local to Remote
	*
	*	@param string $table_name
	*/
	function syncTables($table_name) {
		echo "Sync Multiple Tables";
	}

	/*
	*	
	*	Sync Tables from Local to Remote
	*   
	*/
	function syncDatabase()
	{
		echo "Sync Whole Database";
	}
}