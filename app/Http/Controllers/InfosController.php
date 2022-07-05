<?php

namespace App\Http\Controllers;

use App\Models\Info;    
use Illuminate\Http\Request;

class InfosController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(){

        $infos = Info::latest()->paginate(5);
        return view('infos.index',compact('infos'))->with('i', (request()->input('page', 1) - 1) * 5);

    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create(){
        return view('infos.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request){
        $request->validate([
            'info_name' => 'required'
        ]);

        $info = new Info;
        $info->info_name = $request->info_name;
        $info->save();
        
        return redirect()->route('infos.index')->with('success','Categoria incluida com sucesso');

    }
    /**
    * Display the specified resource.
    *
    * @param  \App\Info  $info
    * @return \Illuminate\Http\Response
    */
    public function show(Info $info)
    {
        return view('infos.show',compact('info'));
    } 

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Info  $info
    * @return \Illuminate\Http\Response
    */
    public function edit(Info $info)
    {
    return view('infos.edit',compact('info'));
    }
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Info  $info
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
    $request->validate([
    'info_name' => 'required',
    ]);
    $info = Info::find($id);
    $info->info_name = $request->info_name;
    $info->save();
    return redirect()->route('infos.index')
    ->with('success','Categoria alterada com sucesso');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Info  $info
    * @return \Illuminate\Http\Response
    */
    public function destroy(Info $info)
    {
    $info->delete();
    return redirect()->route('infos.index')
    ->with('success','Categoria excluida com sucesso');
    }
}
