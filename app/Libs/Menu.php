<?php

namespace App\Libs;

class Menu{
    
    public static function base() {
        return [
            [
                'label'     => 'Dashboard', 
                'route'     => 'be.dashboard',
                'icon'      => 'fa-fw fa fa-dashboard',
            ],
            [
                'label'     => 'Thông tin chung', 
                'children'  => [
                    ['label' => 'Website', 'route' => 'be.config'],
                    ['label' => 'Trang chủ', 'route' => 'be.config.home'],
                    ['label' => 'Dịch vụ', 'route' => 'be.services.index', 'resource' => true]
                ],
                'icon'      => 'fa-fw fa fa-info',
            ],
            [
                'label'     => 'Blogs',
                'children'  => [
                    ['label' => 'Danh sách Blog', 'route' => 'be.blogs.index', 'resource'  => true]
                ],
                'icon'      => 'fa-fw fa fa-rss',
            ],
            [
                'label'     => 'Thư viện ảnh',
                'children'  => [
                    ['label' => 'Thư viện ảnh', 'route' => 'be.galleries.index', 'resource'  => true]
                ],
                'icon'      => 'fa-fw fa fa-picture-o',
            ],
            [
                'label'     => 'Feedbacks',
                'children'  => [
                    ['label' => 'Feedbacks', 'route' => 'be.feedbacks.index', 'resource'  => true]
                ],
                'icon'      => 'fa-fw fa fa-commenting-o',
            ],
            [
                'label'     => 'Thành viên',
                'children'  => [
                    ['label' => 'Danh sách Thành viên', 'route' => 'be.teams.index', 'resource'  => true]
                ],
                'icon'      => 'fa-fw fa fa-users',
            ],
            [
                'label'     => 'Shop đăng ký',
                'children'  => [
                    ['label' => 'Danh sách Shop', 'route' => 'be.shops.index', 'resource' => true]
                ],
                'icon'      => 'fa fa-star'
            ]
        ];
    }


    public static function menu() {
        $menu = self::base();

        foreach ($menu as &$item) {
            if (!empty($item['route'])) {
                $item['active'] = empty($item['resource']) ? [$item['route']] : self::resourceRoute($item['route']);
            }else {
                $active = [];
                foreach ($item['children'] as &$child){
                    $child['active'] = empty($child['resource']) ? [$child['route']] : self::resourceRoute($child['route']);
                    $active = array_merge($active, $child['active']);
                }
                $item['active'] = $active;
            }
        }

        return $menu;
    }

    public static function resourceRoute($route) {
        $route = explode('.', $route);
        array_pop($route);
        $route = implode('.', $route);

        $routes = [
            $route . '.index',
            $route . '.create',
            $route . '.edit'
        ];

        return $routes;
    }

}

