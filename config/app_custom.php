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
            'timezone' => 'Europe/Paris', // Application runs in France
        ],

        /*
        * By default the log streams catch all,
        * even scoped logs that should only go to those scoped listeners.
        * As a result they are duplicated.
        * So I would change the scopes to false here for all default listeners:
        */
        'Log' => [
            'debug' => [
                'scopes'    => false,
            ],
            'error' => [
                'scopes'    => false,
            ],
        ],
];