<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;

$collection = collect(['name' => 'taylor', 'framework' => 'laravel']);

$value = $collection->get('name');
dd($value);
?>