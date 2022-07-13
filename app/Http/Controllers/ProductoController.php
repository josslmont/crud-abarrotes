<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['productos']=producto::paginate(100);
        return view('productos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productos.crear_producto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datoProducto = request()->all();
        $campos=[
            'producto'=>'required|string|max:100',
            'cantidad'=>'required|int',
            'precio'=>'required|string|max:10',
            'caducidad'=>'required|date',
            'created_at'=>'required|date'
        ];
        $mensaje=[
            'required'=>'El campo :attribute es requerido para completar la insercion'
        ];
        $this->validate($request, $campos, $mensaje);
        $datoProducto = request()->except('_token');
        producto::insert($datoProducto);
       // return response()->json($datoProducto);
        return redirect('productos/')->with('mensaje','Producto agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto=producto::findOrFail($id);
        return view('productos.editar_producto', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datoProducto = request()->except(['_token', '_method',]);
        producto::where('id','=',$id)->update($datoProducto);

        $producto=producto::findOrFail($id);
        //return view('productos.editar_producto', compact('producto'));
        return redirect('productos/')->with('mensaje','Producto actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        producto::destroy($id);
        return redirect('productos')->with('mensaje','Se ha borrado el elemento');
    }
}
