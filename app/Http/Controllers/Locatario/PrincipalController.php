<?php

namespace App\Http\Controllers\Locatario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrincipalController extends Controller
{
    public function index()
    {
    	return view('locatario/principal/index');
    }

    public function guardar(Request $request)
    {
        $imagen_original = $request->urlimagen;
        $imagen_grande = "";
        $imagen_miniatura = "";
        // $create =Parte::create([
        //     'parte_id'      => '1',
        //     'imagen_original'=> $
        // ]);

		\Cloudinary::config(array( 
		  "cloud_name" => "tuconsultaenlinea", 
		  "api_key" => "969938491626729", 
		  "api_secret" => "J2mGOPnz9A1dl9kubb7Qyh9h_MI" 
		));
		
	  	$imagen_original = (object) \Cloudinary\Uploader::upload("http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1495313201/descarga_1_ycff1u.jpg");

	  	echo "original: ".$imagen_original->url;
	  	echo "<hr>";
	  	$imagen_grande = (object) \Cloudinary\Uploader::upload("http://recarline.imagefly.io/q_50/".$imagen_original->url."");
	  	echo "grande: ".$imagen_grande->url;

	  	$imagen_miniatura = (object) \Cloudinary\Uploader::upload("http://recarline.imagefly.io/w_300,h_300,q_65/".$imagen_grande->url."");
	  	echo "<hr>";
	  	echo "miniatura: ".$imagen_miniatura->url;

        if ($request->ajax()) {
            return response()->json([
                'urlimagen' => $request->urlimagen,
                'handleimagen' => $request->handleimagen,
            ]);
        }
    }
}
