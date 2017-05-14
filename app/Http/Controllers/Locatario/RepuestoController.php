<?php

namespace App\Http\Controllers\Locatario;

use Alert;
use App\Categoria;
use App\Http\Controllers\Controller;
use App\Marca;
use App\Parte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RepuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::all();
        $categorias = Categoria::all();
        return view('locatario/repuesto/create', compact('marcas','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        extract($_POST);
/*        echo $nombre;
        echo $marca;
        echo $categoria;
        echo $descripcion;
        echo $ano;
        echo $modelo;*/

        //buscar marca
        $marca = Marca::find($marca_id);
        $marca = $marca->marca;

        $categoria = Categoria::find($categoria_id);
        $categoria = $categoria->categoria;

        $user_id = $request->user()->id;
        $imagen = "";
        $codigo = "";
        $cantidad = "";
        $stock = 1;

        $create =Parte::create([
            'user_id'      => $user_id,
            'marca_id'     => $marca_id,
            'categoria_id' => $categoria_id,    
            'nombre'       => $nombre,
            'descripcion'  => $descripcion,  
            'imagen'       => '',
            'categoria'    => $categoria,
            'marca'        => $marca,
            'modelo'       => $modelo,
            'ano'          => $ano,
            'codigo'       => '',
            'cantidad'     => 0,
            'stock'   => 1,
        ]);

        $id_repuesto = $create->id;
        //dd($create);
        echo $id_repuesto;
        Session::set('repuestoID', $id_repuesto);
        Alert::success('Datos de repuesto agregados ahora ingrese imagen..!')->autoclose(3000);
        return Redirect::to('/locatario/imagen/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
