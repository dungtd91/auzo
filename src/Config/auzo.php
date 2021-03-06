<?php

/*
|--------------------------------------------------------------------------
| User model
|--------------------------------------------------------------------------
|
| We here get the user model path from the one defined in config/auth.php
| file. First look for the model parameter in that file, if not, then get
| the path from the providers ['users'] ['model']
|
*/

$user_model = config('auth.model') ?: config('auth.providers.users.model');

return [

    /*
    |--------------------------------------------------------------------------
    | Auzo Authorize Registrar
    |--------------------------------------------------------------------------
    |
    | You may here add custom registrar where the Laravel Gate abilities are defined
    |
    */

    'registrar' => \Kordy\Auzo\Services\PermissionRegistrar::class,

    /*
    |--------------------------------------------------------------------------
    | Auzo models paths
    |--------------------------------------------------------------------------
    |
    | You may here add custom models paths to be used instead of models included
    | with the package
    |
    */

    'models' => [

        'user' => $user_model,

        'ability' => \Kordy\Auzo\Models\Ability::class,

        'policy' => \Kordy\Auzo\Models\Policy::class,

        'permission' => \Kordy\Auzo\Models\Permission::class,

        'role' => \Kordy\Auzo\Models\Role::class,
    ],

];
