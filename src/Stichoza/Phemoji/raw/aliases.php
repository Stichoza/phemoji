<?php

/*
 * Constants
 */

define('👍', true);
define('👎', false);

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

function ⏱() {
    return microtime(👍);
}

function 📅() {
    return call_user_func_array('date', func_get_args());
    // TODO: Make an array of blablagjhbsgijgk I'll remember what does this comment mean.
}






