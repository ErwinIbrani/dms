<?php

function redirect_back()
{
   if(isset($_SERVER['HTTP_REFERER']))
   {
     header('Location: '.$_SERVER['HTTP_REFERER']);
   }
     else
   {
     header('Location: http://'.$_SERVER['SERVER_NAME']);
   }
   exit;
}

function randomString($length = 6) {
    $str = "";
    $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
    $max = count($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
}