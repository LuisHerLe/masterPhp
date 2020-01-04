<?php

function autoload($clasaName){
    include 'controllers/'.$clasaName.'.php';
}

spl_autoload_register('autoload');