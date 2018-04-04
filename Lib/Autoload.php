<?php
/**
 * Created by Atom.
 * User: Nab
 * Date: 06/02/2018
 * Time: 12:03
 */

function autoLoad($classe) {
    $classe = '../' . str_replace('\\', '/', $classe) . '.php';
    if (file_exists($classe))
        include $classe;
}

spl_autoload_register('autoLoad');
