@extends('layouts.form')

@section('content')
    <title>Tambah User</title>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card card-primary mt-5">
                    <div class="card-header">
                        <strong class="text-center d-block">Form Register</strong>
                    </div>
                    <div class="card-body">
                        <form action="/registered" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" autofocus Required
                                    autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="">NIP</label>
                                <input type="text" name="nip" class="form-control" Required autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="">Jabatan</label>
                                <input type="jabatan" name="jabatan" class="form-control" Required autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" Required autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="wilayah" class="form-label">Wilayah</label>
                                <select name="wilayah" class="form-control mb-3" id="wilayah" Required autocomplete="off">
                                    <option value="">Pilih Wilayah</option>
                                    <option value="WILAYAH BARAT">WILAYAH BARAT</option>
                                    <option value="WILAYAH TIMUR">WILAYAH TIMUR</option>
                                </select>
                                <div class="invalid-feedback">Wilayah Harus Dipilih!</div>
                            </div>
                    </div>
                    <div class="card-footer">
                        <input name="" id="" class="btn btn-primary" type="submit" value="Tambah">
                        <button onclick="window.location='/user'" class="btn btn-danger" type="button"
                            aria-pressed="true">Kembali</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
