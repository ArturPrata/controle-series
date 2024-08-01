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

        $html = '<ul>';
        foreach ($series as $series) {
            $html .= "<li>$series</li>";
        }
        $html .= '</ul>';

        return $html;
    }
}
