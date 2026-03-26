<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;

$min = collect([['foo' => 10], ['foo' => 20]])->min('foo');
$min = collect([1, 2, 3, 4, 5])->min();
dd($min);
?>