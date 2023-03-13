<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        dd('test');
        // Eloquent
        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);

        $testTest123 = Test::where('text', '=', 'test123')->get();

        // Query Builder
        $queryBuilder = DB::table('tests')
        ->select('id','text')
        ->where('text','=', 'test123')
        ->get();

        dd($values, $count, $first, $testTest123, $queryBuilder);

        return view('tests.test', compact('values'));
    }
}
