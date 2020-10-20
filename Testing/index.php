<?php

class ClassRoute 
{
    protected $url;
    protected $action;

    public function __construct( string $url, string $action)
    {
        $this->url = $url;
        $this->action = $action;
    }
}   



class Route 
{
    public static function get(string $url, string $action) : ClassRoute
    {
        return new ClassRoute($url, $action);
    }
}

Route::get('/home','get');
Route::get('/about','get');

