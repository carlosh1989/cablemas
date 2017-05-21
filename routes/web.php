<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(['middlewareGroups' => 'web'], function () {
    Route::auth();
    Route::get('/salir', 'HomeController@salir');
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/search', 'HomeController@searchParts');
    Route::get('/busqueda', 'HomeController@busqueda');
    Route::get('/busqueda/{cadena}', 'HomeController@busqueda');
    Route::post('/busquedaProcesar', 'HomeController@busquedaProcesar');
    Route::get('/gps', 'HomeController@gps');
    Route::get('/gpsParts', 'HomeController@gpsParts');
    Route::get('/test', 'HomeController@test');
    Route::get('/subirImagen', 'HomeController@subirImagen');
    Route::get('/admin/parts', 'AdminController@index');
    Route::get('/admin/parts/category/{id}', 'AdminController@partsCategory');
      Route::get('/local', 'LocalController@index');
    Route::get('/turno', 'HomeController@turno');
    Route::get('/turno/{cedula}', 'HomeController@turnoIngresar');
    Route::group(['middleware' => ['auth']], function () {
        // All routes you put here can be accessible to all authenticated users
        Route::get('/profile', 'HomeController@profile');
        Route::get('/profile/create', 'HomeController@profileCreate');
        Route::post('/profile', 'HomeController@profileStore');
        Route::put('/profile/edit', 'HomeController@profileUpdate');
       // Route::put('/profile', 'HomeController@profileUpdate');
    });
    Route::group(['middleware' => ['auth', 'role:cliente']], function () {
        // All routes you put here can be accessible to all authenticated users
        Route::get('/cliente', 'ClienteController@index');
    });
    Route::group(['middleware' => ['auth', 'role:locatario']], function () {
        // All routes you put here can be accessible to all authenticated users
        Route::get('/locatario', 'Locatario\PrincipalController@index');
        Route::get('/locatario/guardar', 'Locatario\PrincipalController@guardar');
        Route::resource('/locatario/repuesto', 'Locatario\RepuestoController');
        Route::resource('/locatario/imagen', 'Locatario\ImagenController');
    });
    Route::group(['middleware' => ['auth', 'role:admin']], function () {
        // Rutas de REPUESTOS
        Route::get('/admin', 'admin\Principal@index');
        Route::get('/admin/home', 'AdminController@index');
        Route::resource('admin/locatario', 'Admin\LocatarioController');
    });
});
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/somos', 'HomeController@somos');

Route::get('residencial', function () {
    return view('home/inicio/residencial');
});

Route::get('empresarial', function () {
    return view('home/inicio/comercial_empresarial');
});

Route::get('telefoniaip', function () {
    return view('home/inicio/comercial_telefoniaip');
});

Route::get('dedicado', function () {
    return view('home/inicio/dedicado');
});

Route::get('registroPago', function () {
    return view('home/inicio/registro_pago');
});

Route::get('solicitudServicio', function () {
    return view('home/inicio/solicitud_servicio');
});

Route::get('preguntasFrecuentes', function () {
    return view('home/inicio/preguntas_frecuentes');
});

Route::get('/login','HomeController@login');
Route::get('/logout', 'HomeController@logout');