<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Http\Requests\StoreMarcaRequest;
use App\Http\Requests\UpdateMarcaRequest;

class MarcaController extends Controller
{
    /**
     * CRUD API TERMINADO MARCA
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMarcaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMarcaRequest $request)
    {
        //
        $data = $request->validated();

        $marca = Marca::create([
            'descripcion' => $data['descripcion']
        ]);

        if ($marca) {
            return response()->json([
                'code' => '00',
                'msg' => 'la marca ha sido insertado de manera correcta'
            ]);
        }
        return response()->json([

            'code' => '404',
            'msg' => 'error en insertar marca'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(Marca $marca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMarcaRequest  $request
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMarcaRequest $request, $id)
    {
        $data = $request->validated();

        $marca = Marca::where('id', $id)->first();
        $marca->descripcion = $data['descripcion'];
        $marca->update();

        return response()->json([
            'code' => '00',
            'msg' => 'la marca ha sido actualizado correctamente'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $marca)
    {
        $marca->delete();

        return response()->json([
            'code'=>'00',
            'msg'=>'La marca ha sido eliminado correctamente'
        ]);
    }
    /**
     * this method is at get all items in the database
     */
    public function getAll()
    {
        $marcas = Marca::all();

        return response()->json($marcas, 200);
    }

    /**
     * this functions returns firrt item for table 
     * 
     */
    public function getId($id)
    {
        $marca = Marca::where('id', $id)->first();

        return response()->json($marca, 200);
    }
}
