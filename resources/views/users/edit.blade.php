@extends('users.layout')
@section('title', 'Edit User')
@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach
        </ul>
    </div>
@endif

<div class="card mt-4">
	<div class="card-body">

        {{--  <h5 class="card-title fw-bolder mb-3">Ubah Data User</h5>  --}}

		<form method="post" action="{{ route('user.update', $data->id) }}">
			@csrf

			<div class="mb-3">
                <label for="nama" class="form-label">Nama User</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip" value="{{ $data->nip }}">
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $data->jabatan }}">
            </div>
            {{-- <div class="mb-3">
                <label for="wilayah" class="form-label">Wilayah</label>
                <input type="text" class="form-control" id="wilayah" name="wilayah" value="{{ $data->wilayah }}">
            </div> --}}
            <div class="mb-3">
                <label for="wilayah" class="form-label">Wilayah</label>
                <select name="wilayah" class="form-control mb-3" id="wilayah">
                    <option value="WILAYAH BARAT" {{ ($data->wilayah) }}>WILAYAH BARAT</option>
                    <option value="WILAYAH TIMUR" {{ ($data->wilayah) }}>WILAYAH TIMUR</option>
                </div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Ubah" />
                <a href="/user" class="btn btn-danger ml-3" role="button" aria-pressed="true">Kembali</a>
			</div>
		</form>
	</div>
</div>

@stop