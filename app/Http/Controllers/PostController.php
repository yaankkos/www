<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;

// Collection::macro('toLocale', function ($locale) {
//     return $this->map(function ($value) use ($locale) {
//         return Lang::get($value, [], $locale);
//     });
// });

// $collection = collect(['first', 'second']);

// $translated = $collection->toLocale('es');

$average = collect([
    ['foo' => 10],
    ['foo' => 10],
    ['foo' => 20],
    ['foo' => 40]
])->avg('foo');


$average = collect([1, 1, 2, 4])->avg();
dd($average);
?>