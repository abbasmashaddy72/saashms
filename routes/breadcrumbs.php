<?php

use Rawilk\Breadcrumbs\Facades\Breadcrumbs;
use Rawilk\Breadcrumbs\Support\Generator;

// Dashboard
Breadcrumbs::for('#', function (Generator $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

// Dashboard > User
Breadcrumbs::for('users', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('Users', route('users'));
});

// Dashboard > Settings
Breadcrumbs::for('settings', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('Settings', route('settings'));
});
