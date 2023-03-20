@extends('layouts.form')

@section('content')
    <title>Edit User</title>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach
        </ul>
    </div>
@endif

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card card-primary mt-5">
                    <div class="card-header">
                        <strong class="text-center d-block">Form Edit</strong>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('user.update', $data->id) }}">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama User</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ $data->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="nip" class="form-label">NIP</label>
                                <input type="text" class="form-control" id="nip" name="nip"
                                    value="{{ $data->nip }}">
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan"
                                    value="{{ $data->jabatan }}">
                            </div>
                            <div class="mb-3">
                                <label for="wilayah" class="form-label">Wilayah</label>
                                <select name="wilayah" class="form-control mb-3" id="wilayah">
                                    <option value="WILAYAH BARAT" {{ $data->wilayah }}>WILAYAH BARAT</option>
                                    <option value="WILAYAH TIMUR" {{ $data->wilayah }}>WILAYAH TIMUR</option>
                            </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-warning" value="Ubah" />
                        <button onclick="window.location='/user'" class="btn btn-danger" type="button"
                            aria-pressed="true">Kembali</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
