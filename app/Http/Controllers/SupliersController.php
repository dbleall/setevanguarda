<?php

namespace App\Http\Controllers;

use App\Models\Suplier;    
use Illuminate\Http\Request;

class SupliersController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(){

        $supliers = Suplier::latest()->paginate(5);
      
        return view('supliers.index',compact('supliers'))->with('i', (request()->input('page', 1) - 1) * 5);

    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create(){
        return view('supliers.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request){
        $request->validate([
            'suplier_name' => 'required'
        ]);

        $suplier = new suplier;
        $suplier->suplier_name = $request->suplier_name;
        $suplier->save();
        
        return redirect()->route('supliers.index')->with('success','Fornecedor incluida com sucesso');

    }
    /**
    * Display the specified resource.
    *
    * @param  \App\suplier  $suplier
    * @return \Illuminate\Http\Response
    */
    public function show(suplier $suplier)
    {
    return view('supliers.show',compact('suplier'));
    } 

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\suplier  $suplier
    * @return \Illuminate\Http\Response
    */
    public function edit(suplier $suplier)
    {
    return view('supliers.edit',compact('suplier'));
    }
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\suplier  $suplier
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
    $request->validate([
    'suplier_name' => 'required',
    ]);
    $suplier = suplier::find($id);
    $suplier->suplier_name = $request->suplier_name;
    $suplier->save();
    return redirect()->route('supliers.index')
    ->with('success','Fornecedor alterada com sucesso');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\suplier  $suplier
    * @return \Illuminate\Http\Response
    */
    public function destroy(suplier $suplier)
    {
    $suplier->delete();
    return redirect()->route('supliers.index')
    ->with('success','Fornecedor excluida com sucesso');
    }
}
