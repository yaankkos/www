<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;

$mode = collect([
    ['foo' => 10],
    ['foo' => 10],
    ['foo' => 20],
    ['foo' => 40]
])->mode('foo');

$mode = collect([1, 1, 2, 4])->mode();
$mode = collect([1, 1, 2, 2])->mode();
dd($mode);
?>