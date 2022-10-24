<?php

namespace App\Traits;

trait SideMenu
{
    /**
     * Determine active menu & submenu.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function activeMenu($pageName)
    {
        $firstLevelActiveIndex = '';
        $secondLevelActiveIndex = '';
        $thirdLevelActiveIndex = '';

        foreach ($this->side_menu as $menuKey => $menu) {
            if ($menu !== 'devider' && isset($menu['route_name']) && $menu['route_name'] == $pageName && empty($firstPageName)) {
                $firstLevelActiveIndex = $menuKey;
            }

            if (isset($menu['sub_menu']) ?? $menu['sub_menu'] = []) {

                foreach ($menu['sub_menu'] as $subMenuKey => $subMenu) {

                    if (isset($subMenu['route_name']) && $subMenu['route_name'] == $pageName && $menuKey != 'menu-layout' && empty($secondPageName)) {
                        $firstLevelActiveIndex = $menuKey;
                        $secondLevelActiveIndex = $subMenuKey;
                    }

                    if (isset($subMenu['sub_menu'])) {

                        foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu) {

                            if (isset($lastSubMenu['route_name']) && $lastSubMenu['route_name'] == $pageName) {
                                $firstLevelActiveIndex = $menuKey;
                                $secondLevelActiveIndex = $subMenuKey;
                                $thirdLevelActiveIndex = $lastSubMenuKey;
                            }
                        }
                    }
                }
            }
        }

        return [
            'first_level_active_index' => $firstLevelActiveIndex,
            'second_level_active_index' => $secondLevelActiveIndex,
            'third_level_active_index' => $thirdLevelActiveIndex
        ];
    }

    // public function side_menu()
    // {
    //     $side_menu = '';
    //     $side_menu = [
    //         'dashboard' => [
    //             'icon' => 'home',
    //             'title' => 'Dashboard',
    //             'route_name' => 'dashboard',
    //         ],
    //         'devider'
    //     ];
    //     $pageName = request()->route()->getName();
    //     $activeMenu = $this->activeMenu($pageName);
    //     view()->share('first_level_active_index', $activeMenu['first_level_active_index']);
    //     view()->share('second_level_active_index', $activeMenu['second_level_active_index']);
    //     view()->share('third_level_active_index', $activeMenu['third_level_active_index']);

    //     return 'side_menu';
    // }
}
