<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Counseling;

class CounselingController extends Controller
{
    //
    
    protected function redirect()
    {
        
    $lists = Counseling::get();
    return view('index.home', compact('lists'));
    }

    public function createCounseling(Request $r){

        Counseling::create([

            'facultyNameInit' => $r['init'],
            'description' => $r['comment'],
            'date' => $r['date'],

        ]);
        return "saved";

    }

}
