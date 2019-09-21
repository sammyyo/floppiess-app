<?php


use Samuelerhini\Floppiess\Models\Floppies;

Route::get('floppiess', function () {
    $floppiess = Floppies::all();

    return $floppiess;
});
