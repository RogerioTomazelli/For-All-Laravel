<?php

namespace App\Http\Controllers;

use App\Models\MaterialModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objMaterial = MaterialModel::orderBy('nome')->get();
        return view("material.list")->with("materiais", $objMaterial);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("material.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validação do formulário
        $request->validate([
            // 'nome' => 'required|unique:posts|max:255',
            'nome' => 'required|max:150',
            'autor' => 'required',
        ]);

        $objMaterial = new MaterialModel();
        $objMaterial->nome = $request->nome;
        $objMaterial->autor = $request->autor;
        $objMaterial->descricao = $request->descricao;
        $objMaterial->tipo = $request->tipo;
        $objMaterial->acesso = $request->acesso;
        $objMaterial->usuario_id = Auth::id();//retorna o usuario_id

        $objMaterial->save();

        // MaterialModel::create($request->all()); // salva todos os campos de uma vez

        return redirect()->route('material.index')
            ->with('success', 'Material Salvo com sucesso.');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\MaterialModel $materialModel
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialModel $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\MaterialModel $materialModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialModel $material)
    {
        return view('material.edit', compact('material'));
    }
    public function visualizar(MaterialModel $material)
    {
        return view('material.edit', compact('material'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\MaterialModel $materialModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validação do formulário
        $request->validate([
            // 'nome' => 'required|unique:posts|max:255',
            'nome' => 'required|max:150',
            'autor' => 'required',
        ]);

        $objMaterial = MaterialModel::findorfail($id);
        $objMaterial->nome = $request->nome;
        $objMaterial->autor = $request->autor;
        $objMaterial->descricao = $request->descricao;
        $objMaterial->tipo = $request->tipo;
        $objMaterial->acesso = $request->acesso;
        $objMaterial->usuario_id = $request->usuario_id;//retorna o usuario_id

        $objMaterial->save();

        // MaterialModel::create($request->all()); // salva todos os campos de uma vez

        return redirect()->route('material.index')->with('success', 'Material Editado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\MaterialModel $materialModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = MaterialModel::find($id);

        $material->delete();

        return redirect()->route('material.index')->with('success', 'Material Deletado com Sucesso');
    }


    public
    function search(Request $request)
    {
        $nome = $request->nome;
        $autor = $request->autor;
        $tipo = $request->tipo;
        $acesso =$request->acesso;

        $query = DB::table('material');

        if (!empty($nome)) {
            $query->where('nome', 'like', '%' . $nome . '%')-> orWhere('autor', 'like', '%' . $nome . '%');
        }
        if (!empty($autor)) {
            $query->where('autor', 'like', '%' . $nome . '%');
        }
        if (!empty($tipo)) {
            $query->where('tipo', 'like', '%' . $tipo . '%');
        }
        if (!empty($acesso)) {
            $query->where('acesso', 'like', '%' . $acesso . '%');
        }
        //$materiais = $query->orderBy('nome', 'DESC')->get();
        $materiais = $query->orderBy('nome')->paginate(20);
        // dd($materiais);
        return view('material.list', compact('materiais'));
    }

}
