<?php

use Cake\Core\Configure;

$permissions = \Cake\Core\Configure::read('MyPermissions');
$someMorePermissions = [
    'Users.SimpleRbac.permissions' => [
        [
            'role' => '*',
            'plugin' => 'Example',
            'controller' => 'Dashboard',
            'action' => ['index'],
        ],
    ]
];

$permissions = array_merge((array)$permissions, $someMorePermissions);
\Cake\Core\Configure::write('MyPermissions', $permissions);
