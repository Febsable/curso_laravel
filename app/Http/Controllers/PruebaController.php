<?php

namespace App\Http\Controllers;

use App\Mail\UserCreate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PruebaController extends Controller
{
	public function flash()
	{
		flash('El flash instalado funciona correctamente')->error();

		return redirect()->route('home');
    }

	public function mail()
	{
		Mail::to('direccion@dir.com')->send(new UserCreate());
    }
}
