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
                        <h1 class="m-0 text-dark">Manajemen Pelanggan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pelanggan</li>
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
                                <div class="col-9 h3 float-start">Tambah Pelanggan</div>
                                <div class="col-3" style="text-align: right;">
                                    <a href="{{ route('customers.index') }}" class="btn btn-lg btn-info float-end">Kembali</a>
                                </div>
                                @if (session('error'))
                                <div class="card-body">
                                    <div class="alert alert-danger alert-dismissible">
                                        {!! session('error') !!}
                                    </div>
                                </div>
                                @endif
                            </div>
                            {{-- Novan Nur Zulhilmi Yardana --}}
                            <form role="form" action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="string" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" placeholder="Email" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" maxlength="100" placeholder="Nama Pelanggan" maxlength="100" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="address" id="address" cols="5" rows="5" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" placeholder="Alamat"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" id="phone" placeholder="Nomor Telpon" required>
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