@extends('section.master')

@section('headercontent')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Edit</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">asep v1</li>
      </ol>
    </div>
  </div>
@endsection
@section('isi')
<form method="POST" action="{{ route('updateProduct', $getProduct->id) }}">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Produk</label>
    <input value="{{ $getProduct->nama_produk }}" name="nama_produk" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
    <input value="{{ $getProduct->deskripsi }}" name="deskripsi" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga</label>
    <input value="{{ $getProduct->harga }}" name="harga" type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jumlah</label>
    <input value="{{ $getProduct->jumlah }}" name="jumlah" type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection