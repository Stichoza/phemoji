<?php

/*
 * Constants
 */

define(👍, true);
define(👎, false);

/*
 * Functions
 */

function 😴($seconds)
{
    return sleep($seconds);
}

function 💤($seconds) {
    return 😴($seconds);
}

function 💀() {
    exit;
}

function 🎲() {
    return rand(1, 6);
}