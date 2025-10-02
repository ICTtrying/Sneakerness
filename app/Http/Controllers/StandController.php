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
            'message' => 'Welkom bij de stands pagina',
            'stands' => $stands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stands.create',[
            'title' => 'Reserveer een stand',
            'message' => 'Vul hieronder de gegevens in om een stand te reserveren.'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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