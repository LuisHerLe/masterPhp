<?php

function controllers_autoload($clasaName) {
    include 'controllers/' . $clasaName . '.php';
}

spl_autoload_register('controllers_autoload');

