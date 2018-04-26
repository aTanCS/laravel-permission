<?php

return [

    'models' => [

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * Eloquent model should be used to retrieve your permissions. Of course, it
         * is often just the "Permission" model but you may use whatever you like.
         *
         * The model you want to use as a Permission model needs to implement the
         * `Spatie\Permission\Contracts\Permission` contract.
         */

        'permission' => Spatie\Permission\Models\Permission::class,

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * Eloquent model should be used to retrieve your roles. Of course, it
         * is often just the "Role" model but you may use whatever you like.
         *
         * The model you want to use as a Role model needs to implement the
         * `Spatie\Permission\Contracts\Role` contract.
         */

        'role' => Spatie\Permission\Models\Role::class,

        /*
         * When using the "HasGroups" trait from this package, we need to know which
         * Eloquent model should be used to retrieve your groups. Of course, it
         * is often just the "Group" model but you may use whatever you like.
         *
         * The model you want to use as a Group model needs to implement the
         * `Spatie\Permission\Contracts\Group` contract.
         */

        'group' => Spatie\Permission\Models\Group::class,

    ],

    'table_names' => [

        /*
         * When using the "HasGroups" trait from this package, we need to know which
         * table should be used to retrieve your groups. We have chosen a basic
         * default value but you may easily change it to any table you like.
         */

        'groups' => 'role_groups',

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * table should be used to retrieve your roles. We have chosen a basic
         * default value but you may easily change it to any table you like.
         */

        'roles' => 'roles',

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * table should be used to retrieve your permissions. We have chosen a basic
         * default value but you may easily change it to any table you like.
         */

        'permissions' => 'permissions',

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * table should be used to retrieve your models permissions. We have chosen a
         * basic default value but you may easily change it to any table you like.
         */

        'model_has_permissions' => 'model_has_permissions',

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * table should be used to retrieve your models roles. We have chosen a
         * basic default value but you may easily change it to any table you like.
         */

        'model_has_roles' => 'model_has_roles',

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * table should be used to retrieve your roles permissions. We have chosen a
         * basic default value but you may easily change it to any table you like.
         */

        'role_has_permissions' => 'role_has_permissions',

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * table should be used to retrieve your models roles. We have chosen a
         * basic default value but you may easily change it to any table you like.
         */

        'model_has_groups' => 'model_has_groups',

        /*
         * When using the "HasGroups" trait from this package, we need to know which
         * table should be used to retrieve your groups permissions. We have chosen a
         * basic default value but you may easily change it to any table you like.
         */

        'group_has_permissions' => 'group_has_permissions',

        /*
         * When using the "HasGroups" trait from this package, we need to know which
         * table should be used to retrieve your groups permissions. We have chosen a
         * basic default value but you may easily change it to any table you like.
         */

        'group_has_roles' => 'group_has_roles',
    ],

    /*
     * By default all permissions will be cached for 24 hours unless a permission or
     * role is updated. Then the cache will be flushed immediately.
     */

    'cache_expiration_time' => 60 * 24,
];
