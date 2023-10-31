@extends('layouts.app')
 
@section('content')
    <div class="container">
        <h2>Edit Barang</h2>
        <form action="{{ route('ecommerce.update', $ecommerce->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="text" name="kode_barang" class="form-control" value="{{ $ecommerce->kode_barang }}" required>
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" value="{{ $ecommerce->nama_barang }}" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" class="form-control" value="{{ $ecommerce->harga }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('ecommerce.index', $ecommerce->id) }}" class="btn btn-warning">Back</a>
        </form>
    </div>
@endsection