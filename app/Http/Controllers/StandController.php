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
         $stands = $this->Stand->with('verkoper')->get();

        

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
            echo 'hello from the homepage';
            exit;
            
            $validated = $request->validate([
                'price' => 'required|numeric|min:100|max:1000',
                'stand_type' => 'required|string|max:255',
                'days' => 'required|integer|min:1|max:5',
            ]);

            // Create and save the stand
            $stand = new Stand();
            $stand->price = $validated['price'];
            $stand->stand_type = $validated['stand_type'];
            $stand->days = $validated['days'];
            $stand->save();
            dd($stand);

            return redirect()->route('stands.index')->with('success', "Stand is succesvol toegevoegd");
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