<?php

namespace App\View\Components;

use App\Traits\SideMenu;
use Illuminate\View\Component;
use Jenssegers\Agent\Agent;

class BackendLayout extends Component
{
    use SideMenu;

    public $side_menu, $agent;

    public function __construct()
    {
        $this->agent = new Agent();

        $this->side_menu = [
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard',
                'route_name' => 'dashboard',
            ],
            'users' => [
                'icon' => 'users',
                'title' => 'Users',
                'route_name' => 'users',
            ],
            'devider'
        ];

        $pageName = request()->route()->getName();
        $activeMenu = $this->activeMenu($pageName);
        view()->share('first_level_active_index', $activeMenu['first_level_active_index']);
        view()->share('second_level_active_index', $activeMenu['second_level_active_index']);
        view()->share('third_level_active_index', $activeMenu['third_level_active_index']);
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.backend.app');
    }
}
