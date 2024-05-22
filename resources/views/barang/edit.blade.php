@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit {{ __('Barang') }}</div>

                    <div class="card-body">
<form action="{{ route('barang.update', ['barang' => $data->id]) }}" method="POST"  >
                          @csrf
                          @method('PUT')
                            <div class="form-group">
                                <label for="nama">Kode Barang</label>
                                <input type="text" autocomplete="off" name="kode_barang" class="form-control" value="{{ $data->kode_barang }}" id="nama" placeholder="Cth: AB123">

                                @error('kode_barang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label for="nohp">Nama Barang</label>
                              <input type="text" autocomplete="off" name="nama_barang" class="form-control" value="{{ $data->nama_barang }}" id="nama_barang" aria-describedby="nama_barang" placeholder="Nama Member">

                              @error('nama_barang')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Harga</label>
                                <input type="number" autocomplete="off" name="harga" class="form-control" value="{{ $data->harga }}" id="harga" placeholder="Harga">

                                @error('harga')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                              <br/>
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                              </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



<div>

</div>
