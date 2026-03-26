<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;

$collection = collect(['a', 'b', 'c', 'd', 'e', 'f']);

$collection->nth(4);
dd($collection);
?>