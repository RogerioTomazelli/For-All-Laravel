<?php

namespace App\Http\Controllers;

use App\Models\MaterialModel;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->id) {
            $objMaterial = MaterialModel::where('usuario_id', $request->id)->orderBy('nome')->get();
        } else {
            $objMaterial = MaterialModel::orderBy('nome')->get();
        }

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
        if ($request->file('extensao')->isValid()) {
            $file = $request->file('extensao');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $request->file('extensao')->storeAs('public/materiais', $fileName);
            $objMaterial->extensao = $fileName;
        }
        if ($request->file('foto')->isValid()) {
            $file = $request->file('foto');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $request->file('foto')->storeAs('public/capas', $fileName);
            $objMaterial->foto = $fileName;
        }
        $objMaterial->nome = $request->nome;
        $objMaterial->fonte = $request->fonte;
        $objMaterial->autor = $request->autor;
        $objMaterial->descricao = $request->descricao;
        $objMaterial->tipo = $request->tipo;
        $objMaterial->usuario_id = Auth::id(); //retorna o usuario_id

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
        $objMaterial->fonte = $request->fonte;
        $objMaterial->autor = $request->autor;
        $objMaterial->descricao = $request->descricao;
        $objMaterial->tipo = $request->tipo;
        $objMaterial->usuario_id = $request->usuario_id; //retorna o usuario_id

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
        $material = MaterialModel::findOrfail($id);

        if (!$user = User::find($material->usuario_id))
            return redirect()->back();

        try {

            if ($material->delete()) {

                if (Storage::exists("public/materiais/" . $material->extensao) && Storage::exists('public/capas/' . $material->foto)) {

                    Storage::delete(["public/materiais/" . $material->extensao, 'public/capas/' . $material->foto]);
                }
            } else {
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao deletar!');
            }

            return redirect()->route('material.index')->with('success', 'Material Deletado com Sucesso');
        } catch (Exception $e) {

            return redirect()
                ->back()
                ->with('error', 'Falha ao deletar!' . $e->getMessage());
        }
    }

    public function search(Request $request)
    {
        $nome = $request->nome;
        $autor = $request->autor;
        $tipo = $request->tipo;

        $query = DB::table('material');

        if (!empty($nome)) {
            $query->where('nome', 'like', '%' . $nome . '%')->orWhere('autor', 'like', '%' . $nome . '%');
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
