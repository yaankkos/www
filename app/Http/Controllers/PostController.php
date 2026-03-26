<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;

$lazyCollection = collect([1, 2, 3, 4])->lazy();

get_class($lazyCollection);


$lazyCollection->all();
dd($lazyCollection);
?>