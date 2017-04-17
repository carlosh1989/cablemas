<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Http\Controllers\Controller;
use App\Locatario;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LocatarioController extends Controller
{
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
        return view('admin/locatario/ingresar');
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
        //Creando usuario
        $usuario = User::create([
        'datos_id' => '0',
        'email' => $responsable_email,
        'password' => bcrypt($password),
        'role' => 'locatario'
        ]);

        //Creando datos de locatario
        $locatario = Locatario::create([
        'user_id' => $usuario->id,
        'razon_social' => $razon_social,
        'rif' => $rif,
        'direccion' => $direccion,
        'servicios' => $servicios,
        'telefono'=> $telefono,
        'horarios'=> $horarios,
        'forma_pago'=> $forma_pago,
        'redes_sociales'=> $redes_sociales,
        'encargos'=> $encargos,
        'responsable'=> $responsable,
        'responsable_telefono'=> $responsable_telefono,
        'responsable_email'=> $responsable_email,
        'email'=> $email,
        ]);

        $usuario->datos_id = $locatario->id;
        $usuario->save();

        Alert::success(''.ucfirst('locatario').' agregado con exito')->autoclose(3000);
        return Redirect::to('/admin/locatario/create');
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
