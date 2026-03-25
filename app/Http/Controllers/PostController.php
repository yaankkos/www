<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;

$collectionA = collect([1, 2, 3]);

$collectionB = $collectionA->collect();

$collectionB->all();
dd($collectionB);
?>