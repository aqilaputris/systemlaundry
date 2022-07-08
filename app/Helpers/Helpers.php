<?php

if(! function_exists('g'))
{
    function g($name)
    {
       return Request::get($name);
    }
}
?>