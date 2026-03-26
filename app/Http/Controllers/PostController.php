<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;

$collection = collect([]);

$collection->every(function ($value, $key) {
    return $value > 2;
});

dd($collection);
?>