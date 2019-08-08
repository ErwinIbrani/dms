<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('authentication')) {
    function authentication($has_authenticated) {
        if(!$has_authenticated) {
            return redirect('auth/login');
        }
    }
}
