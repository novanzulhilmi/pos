@extends('layouts.master')

@section('title')
    Manajemen Produk
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manajemen Produk</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md">
                        <div class="card">
                            <div class="card-header row">
                                <div class="col-9 h3 float-start">Edit Produk</div>
                                <div class="col-3" style="text-align: right;">
                                    <a href="{{ route('products.index') }}" class="btn btn-lg btn-info float-end">Kembali</a>
                                </div>
                                @if (session('success'))
                                <div class="card-body">
                                    <div class="alert alert-danger alert-dismissible">
                                        {!! session('success') !!}
                                    </div>
                                </div>
                                @endif
                            </div>
                            {{-- Novan Nur Zulhilmi Yardana --}}
                            <form role="form" action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                    <input type="text" name="code" value="{{ $product->code }}" class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" id="code" maxlength="10" placeholder="Kode Produk" maxlength="10" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" value="{{ $product->name }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" maxlength="100" placeholder="Nama Produk" maxlength="100" required autofocus>
                                </div>
                                <div class="form-group">
                                    <textarea name="description" id="description" cols="5" rows="5" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" placeholder="Deskripsi">{{ $product->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="stock" value="{{ $product->stock }}" class="form-control {{ $errors->has('stock') ? 'is-invalid' : '' }}" id="stock" placeholder="Stok" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="price" value="{{ $product->price }}" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" id="price" placeholder="Harga" required autofocus>
                                </div>
                                <div class="form-group">
                                    <select name="category_id" id="category_id"
                                        required class="form-control {{ $errors->has('category_id') ? 'is-invalid':'' }}">
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($categories as $row)
                                            <option value="{{ $row->id }}" {{ $product->category_id == $row->id ? 'selected' : '' }}>{{ ucfirst($row->name) }}</option>
                                        @endforeach
                                    </select>
                                    <p class="text-danger">{{ $errors->first('category_id') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file" name="photo" class="form-control">
                                    <p class="text-danger">{{ $errors->first('photo') }}</p>
                                </div>

                                <div class="card-footer">
                                    <button class="btn btn-primary">Simpan</button>
                                    <input type="reset" class="btn btn-md btn-warning pull-right">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection