<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;

$collection = collect([1, 2, 2, 2, 3]);

$counted = $collection->countBy();

$counted->all();
dd($counted);
?>