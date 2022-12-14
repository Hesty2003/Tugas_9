<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;


Class UserController extends controller{
    function index(){
        $data['list_user'] = User::withCount('produk')->get();
        return view('user.index', $data);
    }
    function create(){
        return view('user.create');
    }
    function store(){
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = (request('password'));
        $user->jenis_kelamin = 1;
        $user->save();

        $userDetail = new UserDetail;
        $userDetail->id_user = $user->id;
        $userDetail->no_handphone = request('no_handphone');
        $userDetail->save();
        
        return redirect('admin/user') -> with('success','Data Berhasil Ditambahkan');
    }
    function show(User $user){
        $data['user']= $user;
        return view('user.show', $data);
    }
    function edit(User $user){
        $data['user']= $user;
        return view('user.edit', $data);
    }
    function update(User $user){
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        if(request('password')) $user->password = (request('password'));
        $user->save();

        $userDetail = new UserDetail;
        $userDetail->id_user = $user->id;
        $userDetail->no_handphone = request('no_handphone');
        $userDetail->save();
        
        return redirect('admin/user') -> with('warning','Data Berhasil Diedit');
    }
    function destroy(User $user){
        $user->delete();

        return redirect('admin/user') -> with('danger','Data Berhasil Dihapus');
    }

}