<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function enviarCorreo(Request $request){

    	$data = $request->all();

        Mail::send('public.correo.contenido', ['data' => $data], function ($m) use ($data) {
            $m->to('informacion@adharave.com');
            $m->subject('¡Nos han contactado!');
        });

        Session::flash('message', 'Mensaje enviado correctamente');
        return Redirect::to('/');

    }
}
