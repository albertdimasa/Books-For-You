<?php

namespace App\Http\Controllers;
use App\Buku;
use App\User;
use App\Peminjaman;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RPController extends Controller
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
        $riwayatSatu = Peminjaman::where('akun_id_peminjam',$id)->get();
        $riwayat = $riwayatSatu->all();
        return view('dashboard.peminjaman',compact('riwayat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pinjam()
    {
        return view('dashboard.syarat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'tanggal_peminjaman'    => 'required|date',
            'tanggal_pengembalian'  => 'required|date'
        ]);

        $data = Peminjaman::create([
            'akun_id_peminjam'     => Auth::id(),
            'buku_id'              => $request['id'],
            'tanggal_peminjaman'   => $request['tanggal_peminjaman'],
            'tanggal_pengembalian' => $request['tanggal_pengembalian'],
        ]);
        $satuBuku = Buku::where('id',$id)->update(['status'=>1]);
        return redirect('riwayat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Peminjaman::destroy($id);
        $satuBuku = Buku::where('id',$id)->update(['status'=>1]);
        return redirect('/riwayat')->with('sukses','Data berhasil dihapus');
    }
}
