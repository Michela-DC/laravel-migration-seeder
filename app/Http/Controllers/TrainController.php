<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
     public function index(){

        $trains = Train::all()->sortBy("departure_date"); 
        // dd($trains);

        return view('home', compact('trains')); 
    }
}
