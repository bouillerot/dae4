<?php
/*
 * Local configuration file to provide any overrides to your app.php configuration.
 * Copy and save this file as app_custom.php and make changes as required.
 *
 * Project overwriting on top
 *
 */
return [
        /*
         * These configurations should contain permanent settings used
         * by all environments.
         *
         * The values in app_local.php will override any values set here
         * and should be used for local and per-environment configurations.
         *
         * Environment variable based configurations can be loaded here or
         * in app_local.php depending on the applications needs.
         */
        'default' => [
            'className' => Connection::class,
            'driver' => Mysql::class,
            'persistent' => false,
            // 'timezone' => 'UTC',
            'timezone' => 'Europe/Paris', // Application runs in France

            /*
             * For MariaDB/MySQL the internal default changed from utf8 to utf8mb4, aka full utf-8 support, in CakePHP 3.6
             */
            //'encoding' => 'utf8mb4',

            /*
             * If your MySQL server is configured with `skip-character-set-client-handshake`
             * then you MUST use the `flags` config to set your charset encoding.
             * For e.g. `'flags' => [\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4']`
             */
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false,

            /*
             * Set identifier quoting to true if you are using reserved words or
             * special characters in your table or column names. Enabling this
             * setting will result in queries built using the Query Builder having
             * identifiers quoted when creating SQL. It should be noted that this
             * decreases performance because each query needs to be traversed and
             * manipulated before being executed.
             */
            'quoteIdentifiers' => false,

            /*
             * During development, if using MySQL < 5.6, uncommenting the
             * following line could boost the speed at which schema metadata is
             * fetched from the database. It can also be set directly with the
             * mysql configuration directive 'innodb_stats_on_metadata = 0'
             * which is the recommended value in production environments
             */
            //'init' => ['SET GLOBAL innodb_stats_on_metadata = 0'],
            //  in app_local.php
            // 'username' => '',
            // 'password' => '',
            // 'database' => '',
        ],
];