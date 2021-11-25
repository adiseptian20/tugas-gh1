@extends('section.master')

@section('headercontent')
    

<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Table</h1>
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
  <table class="table table-hover text-nowrap">
      <tr>
          <td>Nomor</td>
          <td>Nama Produk</td>
          <td>Deskripsi</td>
          <td>Harga</td>
          <td>Jumlah</td>   
          <td>aksi</td>      
      </tr>
      @foreach ($getProduct as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->nama_produk }}</td>
        <td>{{ $item->deskripsi }}</td>
        <td>{{ $item->harga }}</td>
        <td>{{ $item->jumlah }}</td> 
        <td>
          <a href="{{ route('editProduct', $item->id) }}" class="btn btn-warning btn-sm btn-flat">
            <i class="fa fa-edit"> </i>
          </a>
            <a href="{{ route('hapusProduct', $item->id) }}" class="btn btn-danger btn-sm btn-flat">
              <i class="fa fa-trash"> </i>
            </a>  
        </td>        
      </tr>      
      @endforeach
     
  </table>

@endsection