<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Propiedade;

class propiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Propiedade::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Propiedade $id)
    {
        return response()->json([
            'res'=>true,
            'propiedades'=>$id
        ]);
    
    }


    
    public function llamarpropiedad($manzana,$lote,$nrodesuministro){
       
            
            

            if(Propiedade::wheremanzana($manzana)->wherelote($lote)->wherenrodesuministro($nrodesuministro)->exists()){
                $propiedad= Propiedade::wheremanzana($manzana)->wherelote($lote)->wherenrodesuministro($nrodesuministro)->get();
            }else{
                return response()->json([
                    "res"=> false
                ]);
            }
            return response()->json(
                    $propiedad       
            );

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
