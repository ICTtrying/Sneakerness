<?php

namespace App\Http\Controllers;

use App\Models\Stand;
use Illuminate\Http\Request;

class StandController extends Controller
{
    private $Stand;

    public function __construct()
    {
        $this->Stand = new Stand();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stands = Stand::all();
        

        return view('stands.index',[
            'title' => 'Stands',
            'message' => 'Welcome to the stands page',
            'stands' => $stands
        ]);
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            return view('stands.create', [
                'title' => 'Add Stand',
                'message' => 'Welcome to the add stand page'
            ]);
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            if ($request->input('days') > 3 ) {
                return redirect()->back()->withErrors(['days' => 'Dagen mag niet meer zijn dan 3.'])->withInput();
            }
            elseif ($request->input('days') < 1 ) {
                return redirect()->back()->withErrors(['days' => 'Dagen mag niet minder zijn dan 1.'])->withInput();
            }
            else {
            // Validate the request data
            $validated = $request->validate([
                'verkoper_id' => 'required|exists:verkopers,id',
                'price' => 'required|numeric|min:100|max:5000',
                'stand_type' => 'required|string|max:255',
                'days' => 'required|integer|min:1|max:5',
            ]);

            // Create and save the stand
            $stand = new Stand();

            $stand->StandType = $validated['stand_type'];
            $stand->Dagen = $validated['days'];
            // bereken prijs op basis van stand_type en dagen
            $stand->Prijs = match ($validated['stand_type']) {
                'A' => 300 * $validated['days'],
                'AA' => 500 * $validated['days'],
                'AA+' => 700 * $validated['days'],
                default => 0,
            };
            
            $stand->save();

            return redirect()->route('stands.index')->with('success', "Stand is succesvol toegevoegd");
        }
        }

    /**
     * Display the specified resource.
     */
    public function show(Stand $standModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stand $standModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stand $standModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stand $standModel)
    {
        //
    }
}