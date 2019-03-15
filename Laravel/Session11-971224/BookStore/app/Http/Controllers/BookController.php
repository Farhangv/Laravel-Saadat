<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        //return view('welcome')->with('owner', '<span style="color:red;">Saadat</span>');

        /*
        return view('welcome')->with([
            'owner' => 'Saadat',
            'date' => '1397/12/24'
        ]);
        */

        /*
        $model = [
            'owner' => 'Saadat',
            'date' => '1397/12/24'
        ];
        return view('welcome', $model);
        */

        $owner = 'Saadat';
        $date = '1397/12/24';

        return view('welcome', compact('owner', 'date'));
        //return view('sample');

    }
}
