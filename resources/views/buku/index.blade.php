@extends('layout.master')
@section('content')
<div class="container">
    <h4>Data Buku</h4>
    <p align="right">
        <a href="{{ route('buku.create') }}" class="btn btn-primary">
            Tambah Buku
        </a>
    </p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tanggal Terbit</th>
                <th>Aksi</th>
            </tr>    
        </thead>
        <tbody>
            @foreach($data_buku as $buku)
                <tr>
                    <!--<td>{{ $buku->id }}</td>-->
                    <td>{{ ++$no }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ $buku->harga }}</td>
                    <td>{{ $buku->tgl_terbit }}</td>
                    <td>
                        <form action="{{ route('buku.destroy', $buku->id) }}" method="post">
                            @csrf
                            <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-info">Ubah</a>
                            <button type="submit" class="btn btn-danger" onClick="return confirm('Apakah anda yakin menghapus?')">
                            Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection