<?php

function dd($el)
{
    echo '<pre>';
    var_dump($el);
    echo '</pre>';
    die;
}

function dump($printable)
{
    echo '<pre>';
    var_dump($printable);
    echo '</pre>';
}
?>