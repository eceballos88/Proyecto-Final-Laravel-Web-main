<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Coche;
class VentaController extends Controller
{
    public function index(){
        $ventas = Venta::where('status',1)
        ->orderBy('usuario_id', 'asc')->get();

        return view('ventas.index', ['ventas' => $ventas]);
    }

    public function create(){
        
        $coches = Coche::where('status', 1)->get();
        return view('ventas.create')->with('coches',$coches);
    }
    public function store(Request $request){
        $data=$request->validate([
            'cliente_codigo' => 'required',
            'coche_matricula' => 'required',
            'usuario_id' => 'required',
            'total' => 'required',
            'status' => 'required', 
        ]);
        /* dd($request); */
        
        $newVenta = Venta::create($data);
        return redirect(route('venta.create'));
    }

    public function edit(Venta $venta){
        /* dd($venta); */
        return view('ventas.edit', ['venta' => $venta]);
    }

    public function read_only(Venta $venta){
        /* dd($venta); */
        return view('ventas.read_only', ['venta' => $venta]);
    }

    public function update(Venta $venta, Request $request){
        $data=$request->validate([
            'cliente_codigo' => 'required',
            'coche_matricula' => 'required',
            'usuario_id' => 'required',
            'total' => 'required',
            'status' => 'required', 
        ]);
        /* dd($request); */
        
        $venta->update($data);
        return redirect(route('venta.index'))->with('success','Venta modificada');
    }
    public function delete(Venta $venta)
    {
        /*borrado fisico
        $dato = productos::find($id);
        $dato->destroy($id);*/
        /* dd($venta);  */

        //borrado logico
        $venta->status=0; //actualiza el atributo status de 1 a 0
        $venta->save();
        
        return redirect(route('venta.index'))->with('success','Venta borrada');

    }

}
