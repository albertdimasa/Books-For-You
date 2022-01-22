<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::id();
        $user = User::find($id);
        return view('dashboard.datadiri',compact('user'));
    }

    public function edit(){
        $id = Auth::id();
        $user = User::find($id);
        return view('dashboard.editprofil',compact('user'));
    }

    public function update(Request $request)
    {
        //
    }

    public function store (Request $request){
        $request->validate([
            'nama'      => 'required|string|max:45',
            'nim'       => 'required|size:10',
            'nomorHp'   => 'required|max:13',
            'email'     => 'required|email|max:255|unique:users',
            'alamat'    => 'required|string',
            'prodi'     => 'required',
            'gambar'    => 'required|file|image|max:2048'
        ]);

        $user = User::find(Auth::id());
        $user->update($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar') -> move('images/',$request->file('gambar')->getClientOriginalName());
            $user->gambar = $request->file('gambar')->getClientOriginalName();
            $user->save();
        }

        return redirect('/home')->with('sukses', 'Data berhasil diupdate');
    }

}
