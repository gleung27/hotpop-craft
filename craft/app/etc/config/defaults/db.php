<?php

/**
 * DO NOT EDIT THIS FILE.
 *
 * This file is subject to be overwritten by a Craft update at any time.
 *
 * If you want to change any of these settings, copy it into craft/config/db.php, and make your change there.
 */

return array(

	/**
	 * The database server name or IP address. Usually 'localhost' or '127.0.0.1'.
	 */
	'server' => 'localhost',

	/**
	 * The database server port.
	 */
	'port' => '3306',

	/**
	 * The database username to connect with.
	 */
	'user' => 'root',

	/**
	 * The database password to connect with.
	 */
	'password' => '',

	/**
	 * The name of the database to select.
	 */
	'database' => '',

	/**
	 * The prefix to use when naming tables. This can be no more than 5 characters
	 * and must be all lowercase.
	 */
	'tablePrefix' => 'craft',

	/**
	 * The charset to use when creating tables.
	 */
	'charset' => 'utf8',

	/**
	 * The collation to use when creating tables.
	 */
	'collation' => 'utf8_unicode_ci',

	/**
	 * If this is set, then the CLI connection string (used for yiic) will
	 * connect to the Unix socket, instead of the server and port. If this is
	 * specified, then 'server' and 'port' settings are ignored.
	 */
	'unixSocket' => '',

	/**
	 * An array of SQL statements that should be executed right after the database
	 * connection is established.
	 */
	'initSQLs' => array(),

	/**
	 * An array of key => value pairs of PDO attributes to pass into the PDO constructor.
	 *
	 * For example, when using the MySQL PDO driver (https://secure.php.net/manual/en/ref.pdo-mysql.php),
	 * if you wanted to enable a SSL database connection (assuming SSL is enabled in MySQL
	 * (https://dev.mysql.com/doc/refman/5.5/en/using-secure-connections.html) and `'user'`
	 * can connect via SSL, you'd set these:
	 *
	 *     array(
	 *         PDO::MYSQL_ATTR_SSL_KEY    => '/path/to/my/client-key.pem',
	 *         PDO::MYSQL_ATTR_SSL_CERT   => '/path/to/my/client-cert.pem',
	 *         PDO::MYSQL_ATTR_SSL_CA     => '/path/to/my/ca-cert.pem',
	 *     ),
	 */
	'attributes' => array(),
);
