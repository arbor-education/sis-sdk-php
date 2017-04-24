<?php
namespace {
    function loadClass($class)
    {
        $path = explode("\\", $class);
        require_once(__DIR__."/".implode("/", $path).".php");
    }
    spl_autoload_register("loadClass");
}
