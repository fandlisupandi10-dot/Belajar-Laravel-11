<?php

namespace App\Views\Composers;


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
            
            $auth = true; // Simulate authentication status (replace with actual auth check)
            
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
