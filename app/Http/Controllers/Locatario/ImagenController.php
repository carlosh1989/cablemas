<?php

namespace App\Http\Controllers\Locatario;

use App\Http\Controllers\Controller;
use App\Imagen;
use Illuminate\Http\Request;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $imagenes = Imagen::all();
        return view('locatario/imagen/create',compact('imagenes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     if ($request->ajax()) {
        \Cloudinary::config(array( 
        "cloud_name" => "tuconsultaenlinea", 
        "api_key" => "969938491626729", 
        "api_secret" => "J2mGOPnz9A1dl9kubb7Qyh9h_MI" 
        ));

        $url = 'https://cdn.filestackcontent.com/'.$request->handleimagen.'';
        $imagen_original = (object) \Cloudinary\Uploader::upload($url);

        //echo "original: ".$imagen_original->url;
        //echo  "<hr>";
        $imagen_grande = (object) \Cloudinary\Uploader::upload("http://recarline.imagefly.io/w_1200,q_50/".$imagen_original->url."");
        //echo "grande: ".$imagen_grande->url;

       $imagen_medio = (object) \Cloudinary\Uploader::upload("http://recarline.imagefly.io/w_300,h_300,q_65/".$imagen_grande->url."");

        $imagen_miniatura = (object) \Cloudinary\Uploader::upload("http://recarline.imagefly.io/w_128,h_128,q_65/".$imagen_grande->url."");
        //echo "<hr>";
        //echo "miniatura: ".$imagen_miniatura->url;

        $usuario = Imagen::create([
        'parte_id' => '1',
        'imagen_original' => $imagen_original->url,
        'imagen_grande' => $imagen_grande->url,
        'imagen_medio' => $imagen_medio->url,
        'imagen_miniatura' => $imagen_miniatura->url, 
        ]);

        return response()->json([
            'urlimagen' => $request->urlimagen,
            'handleimagen' => $request->handleimagen,
            'imagen_original' => $imagen_original->url,
            ]);
        }
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
