@extends('layouts.dashboard')
@section('isiDashboard')
<div class="container">
    <h2 class="mt-2">Riwayat Peminjaman</h2><hr>
    @if($riwayat??'')
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Tanggal Peminjaman</th>
                    <th scope="col">Tanggal Pengembalian</th>
                    <th scope="col">Aksi</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1;?>
            @foreach($riwayat as $item)
                <?php 
                    
                    $buku = \App\Buku::where('id',$item->buku_id)->first();
                    $judulBuku = $buku->judul;
                    ?>
                
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$judulBuku}}</td>
                        <td>{{$item->tanggal_peminjaman}}</td>
                        <td>{{$item->tanggal_pengembalian}}</td>
                        <td>
                            <form action="{{url('riwayat')}}/{{$item->id}}/delete" method="post">
                                @method('delete')
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach 
            </tbody>
    </table>
    @endif
</div>
@endsection