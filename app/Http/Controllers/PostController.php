<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;

$collection = collect(['John Doe', 'Jane Doe']);

$collection->dump();

dd($collection);
?>