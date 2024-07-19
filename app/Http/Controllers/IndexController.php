<?php

namespace App\Http\Controllers;

use App\Models\Company;

class IndexController extends Controller
{
    private static $MAP_SIZE = 10;

    public function __invoke()
    {
        $geomap = array_fill(0, self::$MAP_SIZE, array_fill(0, self::$MAP_SIZE, null));
        foreach (Company::all() as $company) {
            $geomap[$company->y][$company->x] = $company;
        }

        return view('index', [
            'geomap' => $geomap,
        ]);
    }
}
