<?php

namespace App\Http\Controllers;
use App\Buku;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KBController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        $buku = Buku::where('id_pemilik_buku',$id )->paginate(6);
        return view('dashboard.koleksibuku',compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'             => 'required|string|max:45',
            'pengarang'         => 'required|string|max:45',
            'penerbit'          => 'required|string|max:45',
            'tahun_terbit'      => 'required|date',
            'sinopsis'          => 'required|string',
            'gambarBuku'        => 'required|file|image|max:2048'
        ]);
        
        $data = Buku::create([
            'id_pemilik_buku'   => Auth::id(),
            'judul'             => $request['judul'],
            'pengarang'         => $request['pengarang'],
            'penerbit'          => $request['penerbit'],
            'tahun_terbit'      => $request['tahun_terbit'],
            'sinopsis'          => $request['sinopsis'],
            'gambarBuku'        => $request['gambarBuku']
        ]);

        if($request->hasFile('gambarBuku')){
            $request->file('gambarBuku') -> move('images/',$request->file('gambarBuku')->getClientOriginalName());
            $data->gambarBuku = $request->file('gambarBuku')->getClientOriginalName();
            $data->save();
        }
        
        return redirect('/buku')->with('sukses','Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku   = Buku::find($id); 
        $user   = User::find(Buku::find($buku,'id_pemilik_buku'))->first();
       
        return view('pinjam',['buku'=>$buku,'user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $satuBuku = Buku::find($id);
        return view('dashboard.satu-buku', compact('satuBuku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'             => 'required|string|max:45',
            'pengarang'         => 'required|string|max:45',
            'penerbit'          => 'required|string|max:45',
            'tahun_terbit'      => 'required|date',
            'sinopsis'          => 'required|string',
            'gambarBuku'        => 'required|image|max:2048'
        ]);
        
        $satuBuku = Buku::find($id);
        $satuBuku -> update($request->all());
        return redirect('/buku')->with('sukses','Buku berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buku::destroy($id);
        return redirect('/buku')->with('sukses','Buku berhasil dihapus');
    }
    
    public function search(Request $request){
        $id = Auth::id();
        if($request->has('cari'))
            {
                $buku = Buku::where([
                                    ['judul','LIKE','%'.$request->cari.'%'],
                                    ['id_pemilik_buku','!=',$id]
                                ])->get();
            }
            
            return view('search', compact('buku'));
           
    }
}
