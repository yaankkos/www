<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;

$collection = collect(['a', 'b', 'a', 'c', 'b']);

$collection->duplicates();

dd($collection);
?>