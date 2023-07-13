<?php

function setAlarm(bool $employed, bool $vacation)
{
    // if ($employed === true && $vacation === false) {
    //     return true;
    // } else {
    //     return false;
    // }

    // if ($employed === true && $vacation === false) :
    //     return true;
    // else: 
    //     return false;
    // endif;

    return $employed && !$vacation;
}

echo setAlarm(true, false);
