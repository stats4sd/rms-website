<?php

return [
    'key' => env('TRANSLATIONIO_KEY'),
    'source_locale' => 'en',
    'target_locales' => ['fr', 'es'],

    'ignored_key_prefixes' => [
        'validation',        // ignore the validation.php file.
        'passwords', // ignore the passwords.php file.
        'pagination',    // ignore the pagination.php file.
        'auth',    // ignore the auth.php file.
    ],

    /* Directories to scan for Gettext strings */
    'gettext_parse_paths' => ['app', 'resources']
];