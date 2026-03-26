<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;

$max = collect([
    ['foo' => 10],
    ['foo' => 20]
])->max('foo');
$max = collect([1, 2, 3, 4, 5])->max();
dd($max);
?>