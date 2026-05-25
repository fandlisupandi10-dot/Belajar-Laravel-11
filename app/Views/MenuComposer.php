<?php

namespace App\Views\Composer;


class MenuComposer
{
        public function compose($view)
        {
            $menu = 
                [
                    'Home' => '/',
                    'About' => '/about',
                    'Contact' => '/contact',
                ];
            
            $auth = false;
            
            if($auth) {
                $menu =  array_merge($menu, [
                    'Logout' => '/logout',
                    'Profile' => '/profile',
                    'dashboard' => '/dashboard',
                ]);
            }
    
            $view->with('menu', $menu);
        }
}
