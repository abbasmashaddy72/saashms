<?php

use Rawilk\Breadcrumbs\Facades\Breadcrumbs;
use Rawilk\Breadcrumbs\Support\Generator;

// Application
Breadcrumbs::for('#', function (Generator $trail) {
    $trail->push('Dashboard', route('dashboard'));
});
