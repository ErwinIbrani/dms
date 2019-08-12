<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('view')) {
    function view($view, $data = []) {
        $path = APPPATH . 'views';
        $blade = new \Jenssegers\Blade\Blade($path, APPPATH . 'cache/view');

        echo $blade->make($view, $data)->render();
        return true;
    }
}