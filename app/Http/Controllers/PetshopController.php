<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petshop;

class PetshopController extends Controller
{


    function __construct(){

        $this->middleware('permission: ver-petProduct|crear-petProduct|editar-petProduct|borrar-petProduct',['only'=>['index']]);
        $this->middleware('permission: crear-petProduct', ['only'=>['create', 'store']]);
        $this->middleware('permission: editar-petProduct', ['only'=>['edit', 'update']]);
        $this->middleware('permission: borrar-petProduct', ['only'=>['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petProducts =  Petshop::paginate(5);
        return view('petshop.index', compact('petProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petshop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nombre' =>'required',
            'descripcion' =>'required',
            'precio' =>'required',

        ]);

        Petshop::create($request->all());
        return redirect()->route('petshop.index');

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
    public function edit(Petshop $Petshop)
    {
        return view('petshop.edit', compact('Petshop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petshop $Petshop)
    {
        request()->validate([

            'nombre' =>'required',
            'descripcion' =>'required',
            'precio' =>'required'

        ]);

        $Petshop->update($request->all());
        return redirect()->route('petshop.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petshop $Petshop)
    {
        $Petshop->delete();
        return redirect()->route('petshop.index');

    }
}
