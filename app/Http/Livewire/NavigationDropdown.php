<?php

namespace App\Http\Livewire;

use Laravel\Jetstream\Http\Livewire\NavigationMenu;

class NavigationDropdown extends NavigationMenu
{
    public array $items = [
        'Dashboard'  => 'dashboard',
        'My Grades'  => 'grades.index',
        'Profile'    => 'profile.view',
        'More'       => [
            'Settings' => 'profile.edit',
            'Log out'  => 'logout',
        ],
    ];

    public function render()
    {
        return view('livewire.navigation-menu');
    }
}
