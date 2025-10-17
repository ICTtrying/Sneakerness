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
            'message' => 'Welkom bij de stands pagina',
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
            // Validate the request data
             $request->validate([
                'stand_type' => 'required|string|max:255',
                'days' => 'required|integer|min:1|max:3',
            ]);


            // Create the stand
            Stand::create([
                'StandType' => $request->input('stand_type'),
                'Dagen' => $request->input('days'),
                'Prijs' => match ($request->input('stand_type')) {
                    'A' => 300 * $request->input('days'),
                    'AA' => 500 * $request->input('days'),
                    'AA+' => 700 * $request->input('days'),
                default => 0,
                },
            ]);

            return redirect('/stands');
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
    public function destroy(Stand $stand)
    {
        $stand->delete();
        return redirect()->route('stands.index')->with('success', 'Stand succesvol verwijderd.');
    }
}
