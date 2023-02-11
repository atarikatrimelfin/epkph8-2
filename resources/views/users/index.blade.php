@extends('users.layout')
@section('title', 'Data User')
@section('content')

<h4 class="mt-1">Data User</h4>

<form action="/user/search" method="GET">
    <div class="input-group mt-2 mb-2">
        <input name="search" type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
</div>
</form>

<a href="{{ route('register') }}" type="button" class="btn btn-success rounded-3 mt-2 mb-2">Tambah Data</a>

@if($message = Session::get('success'))
    <div class="alert alert-success mt-3" role="alert">
        {{ $message }}
    </div>
@endif

<table class="table table-hover mt-2">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>NIP</th>
        <th>Email</th>
        <th>Jabatan</th>
        <th>Wilayah</th>
        <th>Level</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    
        @foreach ($datas as $no => $data)
        
            <tr>
                <th scope="row">{{ $datas->firstItem() + $no }}</th>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->nip }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->jabatan }}</td>
                <td>{{ $data->wilayah }}</td>
                <td>{{ $data->level }}</td>
                <td>
                    <a href="{{ route('user.edit', $data->id) }}" type="button" class="btn btn-warning rounded-3">Ubah</a>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal{{ $data->id }}">
                        Hapus
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="hapusModal{{ $data->id }}" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="hapusModalLabel">Konfirmasi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ route('user.delete', $data->id) }}">
                                    @csrf
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus data ini?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Ya</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $datas->links() }}
@stop