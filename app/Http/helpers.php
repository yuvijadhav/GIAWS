<?php

function view($view = null, $data = [], $mergeData = []) {
    $factory = app(Illuminate\Contracts\View\Factory::class);

    if (func_num_args() === 0) {
        return $factory;
    }

    //if amp, add '-amp' to view name
    if (request()->segment(1) == 'amp') {
        $view .= '-amp';
    }
    return $factory->make($view, $data, $mergeData);
}
