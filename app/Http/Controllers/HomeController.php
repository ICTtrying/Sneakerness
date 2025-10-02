<?php

namespace App\Http\Controllers;
use App\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        $data = 
            [
                'title' => 'WELCOME TO SNEAKERNESS!',
                'content' => 'OUR PASSION FOR SNEAKERS MAKES US CREATE EVENTS, THAT CAPTURES THE ESSENCE OF THE CULTURE OF KICKS. BE SURE TO EXPERIENCE WHAT’S MUCH MORE THAN JUST A SHOE.'
            ];
        
        // Geef door aan de View
        return view('home', [
            'home' => $data
        ]);
    }
}
