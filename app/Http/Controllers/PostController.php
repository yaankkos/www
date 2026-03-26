<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;

$collection = collect(['A', 'B', 'C']);

$filtered = $collection->pad(5, 0);
$filtered = $collection->pad(-5, 0);

$filtered->all();
dd($filtered);
?>