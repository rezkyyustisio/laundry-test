@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Data {{ ucwords($data->nama_barang) }}
            </div>
            <div class="card-body">
                <table class="">
                    <tbody>
                        <tr>
                            <th width="200">Kode Barang</th>
                            <td>{{ ucwords($data->kode_barang) }}</td>
                        </tr>
                        <tr>
                            <th width="200">Nama Barang</th>
                            <td>{{ ucwords($data->nama_barang) }}</td>
                        </tr>
                        <tr>
                            <th width="200">Harga</th>
                            <td>{{ ucwords($data->harga) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
    </div>
@endsection
