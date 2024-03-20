<?php
use Illuminate\Support\Facades\Route;

if(!function_exists('active_route_by_name')){
    function active_route_by_name(string $routeName , bool $isMenu = false){
        $class = $isMenu ? 'menu-open' : 'active';
        return Route::currentRouteName() == $routeName ? $class : '' ;
    }
}
if(!function_exists('active_route_by_url')){
    function active_route_by_url(string $url , bool $isMenu = false){
        $class = $isMenu ? 'menu-open' : 'active';
        return request()->is($url)  ? $class : '' ;
    }
}
