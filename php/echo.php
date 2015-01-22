<?php

function echoout()
{
    $inputs = func_get_args();
    foreach($inputs as $output)
    {
        echo $output;
        echo '<br>';
    }
}

echoout();
echoout('bla');
echoout('foo', 'bar', 'baz');
