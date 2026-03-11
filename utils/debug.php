<?php

function debug($obj)
{
    echo "<pre>";
    echo var_dump($obj);
    echo "</pre>";
    die();
}
