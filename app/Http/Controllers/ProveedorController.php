<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use App\Provincia;


class ProveedorController extends Controller
{
    public function listado(){
        //return view('proveedores.listado', ['proveedores' => Proveedor::find(1)->get()]);
        //return view('proveedores.listado', ['proveedores' => Proveedor::all()]);
        return Provincia::find(1)->with(['Pais'])->first();        
    }
}
