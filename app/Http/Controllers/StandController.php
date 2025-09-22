<?php

namespace App\Http\Controllers;

use App\Models\StandModel;
use Illuminate\Http\Request;

class StandController extends Controller
{
    private $StandModel;

    public function __construct()
    {
        $this->StandModel = new StandModel();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $stands = $this->StandModel->sp_getAllStands();

       
        

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
        //
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
    public function show(StandModel $standModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StandModel $standModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StandModel $standModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StandModel $standModel)
    {
        //
    }
}
