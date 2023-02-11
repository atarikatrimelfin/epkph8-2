@extends('users.layout')
@section('title', 'Tambah User')
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

        <h5 class="card-title fw-bolder mb-3">Tambah User</h5>

		<form method="post" action="{{ route('user.store') }}">
			@csrf
            
			<div class="mb-3">
                <label for="nama" class="form-label">Nama User</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Level Akun</label>
                <input>
                <select class="form-control" name="level" id="level">
                    <option selected>Pilih level..</option>
                    <option value="admin">admin</option>
                    <option value="user">user</option>
                </select>
                
            </div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Tambah" />
                <a href="/user" class="btn btn-danger ml-3" role="button" aria-pressed="true">Kembali</a>
			</div>
		</form>
	</div>
</div>

@stop