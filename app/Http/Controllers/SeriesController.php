<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {

        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'
        ];


        //return view('listar-series-blade', compact('series'));
        return view('listar-series') -> with('series', $series);
    }
}
