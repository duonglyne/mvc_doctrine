<?php
namespace AHT\Config;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class Database
{

	private function __construct() {
	}

	public static function getConn() 
	{
		// the connection configuration
		$dbParams = array(
			'driver'   => 'pdo_mysql',
			'user'     => 'root',
			'password' => '',
			'dbname'   => 'mvc_doctrine',
		);
		$paths = array("/path/to/entity-files");
		$isDevMode = true;
		$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
		$entityManager = EntityManager::create($dbParams, $config);
		return $entityManager;
	}
}
?>
