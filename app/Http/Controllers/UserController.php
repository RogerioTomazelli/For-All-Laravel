<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$objPerfil = User::orderBy('name')->get();
        return view("profile.profile")->with("profile", $objPerfil);*/
        return view('profile.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $users)
    {
        return view('profile.edit', compact('profile'));
    }
    public function visualizar(User $users)
    {
        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validação do formulário
        $request->validate([

            'name' => 'required|max:150',
        ]);

        $objPerfil = User::findorfail($id);
        $objPerfil->name = $request->name;
        $objPerfil->email = $request->email;

        $objPerfil->save();


        return redirect()->route('perfil.perfil')->with('success', 'Perfil Editado com sucesso.');
    }

    public function profileUpdate(Request $request)
    {
        $data = $request->all();
        if ($data['password'] != null)
            $data['password'] = bcrypt($data['password']);
        else
        unset($data['password']);

        $update = auth()->user()->update($data);

        if ($update)
            return redirect()
                ->route('profile')
                ->with('sucess', 'Dados atualizados com sucesso!');

        return redirect()
            ->route('back')
            ->with('error', 'Erro ao atualizados os dados!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = User::find($id);

        $material->delete();

        return redirect()->route('welcome')->with('success', 'Perfil deletado com Sucesso');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('profile', compact('user', $user));
    }

    public function update_avatar(Request $request)
    {

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        $avatarName = $user->id . '_avatar' . time() . '.' . request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('avatars', $avatarName);

        $user->avatar = $avatarName;
        $user->save();

        return back()
            ->with('success', 'You have successfully upload image.');
    }
}
