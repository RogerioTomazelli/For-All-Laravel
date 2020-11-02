<?php

namespace App\Http\Controllers;

use App\Models\PerfilModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PerfilController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objPerfil = PerfilModel::orderBy('name')->get();
        return view("perfil.perfil")->with("perfil", $objPerfil);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\PerfilModel $perfilModel
     * @return \Illuminate\Http\Response
     */
    public function show(PerfilModel $users)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\PerfilModel $perfilModel
     * @return \Illuminate\Http\Response
     */
    
    public function edit(PerfilModel $users)
    {
        return view('perfil.edit', compact('perfil'));
    }
    public function visualizar(PerfilModel $users)
    {
        return view('perfil.edit', compact('perfil'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PerfilModel $perfilModel
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //validação do formulário
        $request->validate([

            'name' => 'required|max:150',
        ]);

        $objPerfil = PerfilModel::findorfail($id);
        $objPerfil->name = $request->name;
        $objPerfil->email = $request->email;

        $objPerfil->save();


        return redirect()->route('perfil.perfil')->with('success', 'Perfil Editado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\MaterialModel $perfilModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = PerfilModel::find($id);

        $material->delete();

        return redirect()->route('welcome')->with('success', 'Perfil deletado com Sucesso');
    }

}