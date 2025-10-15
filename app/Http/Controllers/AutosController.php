<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;
use App\Http\Requests\AutosRequest;

class AutosController extends Controller
{
    
    public function index()
    {
        
         //17-10
         $autos =   Auto::all();
         foreach($autos as $auto){
            $auto->load('marca');
        }
        return $autos;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AutosRequest $request)
    {
        //17-10
        $auto = new Auto();
        $auto->patente = $request->patente;
        $auto->modelo = $request->modelo;
        $auto->precio = $request->precio;
        $auto->marca_id= $request->marca;
        $auto->save();
        return $auto;

        // luego ejecutar php artisan make:request AutosRequest

    }

    /**
     * Display the specified resource.
     */
    public function show(Auto $auto)
    {
        //17-10
        $auto->load('marca');
        return $auto;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auto $auto)
    {
        //17-10
        $auto->patente = $request->patente;
        $auto->modelo = $request->modelo;
        $auto->precio = $request->precio;
        $auto->marca_id= $request->marca;
        $auto->save();
        return $auto;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auto $auto)
    {
        //17-10
        $auto->delete();
    }
}
