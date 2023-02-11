@extends('evdata.layout')
@section('title', 'Edit Eviden')
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

        <h5 class="card-title fw-bolder mb-3">Ubah Data Eviden</h5>

		<form method="post" action="{{ route('evdata.update', $data->id_data) }}">
			@csrf

			<div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ $data->tanggal }}">
            </div>
            <div class="mb-3">
                <label for="shift" class="form-label">Shift</label>
                <input type="text" class="form-control" id="shift" name="shift" value="{{ $data->shift }}">
            </div>
            <div class="mb-3">
                <label for="id_bidang" class="form-label">ID Bidang</label>
                <input type="text" class="form-control" id="id_bidang" name="id_bidang" value="{{ $data->id_bidang }}">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="text" class="form-control" id="foto" name="foto" value="{{ $data->foto }}">
            </div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Ubah" />
			</div>
		</form>
	</div>
</div>

@stop