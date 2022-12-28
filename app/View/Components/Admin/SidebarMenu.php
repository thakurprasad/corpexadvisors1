<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class SidebarMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $menus = [
            [
                'name'=> 'Dashboard', 
                'icon' => 'flaticon-man', 
                'slug'=> url('admin/dashboard'),
                'class'=>(request()->is('admin/dashboard') ? 'active': '')
            ],
            [
                'name'=> 'All Users', 
                'icon' => 'flaticon-man', 
                'slug'=> url('admin/users'), 
                'class'=>(request()->is('admin/users') ? 'active': '')
            ],
            [
                'name'=> 'Affiliates', 
                'icon' => 'flaticon-man', 
                'slug'=> url('admin/users/affiliate'), 
                'class'=>(request()->is('admin/users/affiliate') ? 'active': '')
            ],
            [
                'name'=> 'Customers', 
                'icon' => 'flaticon-man', 
                'slug'=> url('admin/users/customer'), 
                'class'=>(request()->is('admin/users/customer') ? 'active': '')
            ],
            [
                'name'=> 'Membership', 
                'icon' => 'flaticon-man',
                'slug'=> url('admin/membership'), 
                'class'=>(request()->is('admin/membership') ? 'active': '')
            ],
            [
                'name'=> 'Services', 
                'icon' => 'flaticon-man', 
                'slug'=> url('admin/services'), 
                'class'=>(request()->is('admin/services/*') ? 'active': '')
            ]
        ];

        $menus = collect($menus);
        return view('admin.components.sidebar-menu', ['menus'=>$menus]);
    }
}
