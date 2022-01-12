<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;

class UserController extends Controller {
    function index(){
        $data['list_user'] = User::withCount('product')->get();
        return view('user.index', $data);
    }
    function create(){
        return view('user.create');
    }
    function store(){

        $validated = request()->validate([
            'nama' => ['required'],
            'username' => ['required'],
            'email' => ['required']
        ]);
        
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = request('password');
        $user->jenis_kelamin = 1;
        $user->save();

        $userdetail = new UserDetail;
        $userdetail->id_user = $user->id;
        $userdetail->no_handphone = request('no_handphone');
        $userdetail->save();

        return redirect('user')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(User $user){
        $data['user'] = $user;
        return view('user.show', $data);

    }
    function edit(User $user){
        $data['user'] = $user;
        return view('user.edit', $data);
    }
    function update(User $user){
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        if(request('password')) $user->password = request('password');
        $user->save();

        return redirect('user')->with('success', 'Data Berhasil Diedit');

    }
    function destroy(User $user){
        $user->delete();

        return redirect('user')->with('danger', 'Data Berhasil Dihapus');
    }
}