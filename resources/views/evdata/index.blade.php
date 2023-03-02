@extends('layouts.main')
@section('title', 'Data Laporan Eviden')
@section('content')

<title>Data Laporan Eviden</title>

<form action="">
</form>

<a href="{{ route('evdata.add') }}" type="button" class="btn btn-success rounded-3 mt-2 mb-2">Tambah Eviden</a>

@if($message = Session::get('success'))
    <div class="alert alert-success mt-3" role="alert">
        {{ $message }}
    </div>
@endif
</form>

<!-- buat scroll -->
<style>
    .scroll{
        height: 500px;
        overflow: scroll;
    }
</style>

<div class="scroll">
<table class="table table-bordered">
        <thead>
            <tr>
                <th colspan="42">{{ Auth::user()->nama ?? ''}}</th>
            </tr>
            <tr>
                <th rowspan="4">Tanggal</th>
                <th colspan="9">Tanaman / Pemeliharaan / Persemaian</th>
                <th colspan="9">Keamanan / Patroli</th>
                <th colspan="9">Sosialisasi / Rapat / Apel</th>
                <th colspan="9">Produksi / Agroforestry / Wisata</th>
                <th rowspan="3">Foto</th>
                <th rowspan="3">Action</th>
            
            <tr>
            <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>Jml</th>

                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>Jml</th>

                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>Jml</th>

                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>Jml</th>

            </tr>
        </thead>
        <tbody>

        </tr>
        </thead>
        <tbody>

            @foreach ($datas as $data1)
            <tr>
            <td>{{ $data1->tanggal }}</td>
            
            <td>{{ $data1->poin11 }}</td>
                <td>{{ $data1->poin12 }}</td>
                <td>{{ $data1->poin13 }}</td>
                <td>{{ $data1->poin14 }}</td>
                <td>{{ $data1->poin15 }}</td>
                <td>{{ $data1->poin16 }}</td>
                <td>{{ $data1->poin17 }}</td>
                <td>{{ $data1->poin18 }}</td>
                <td>{{ $data1->poin11 + $data1->poin12 + $data1->poin13 + $data1->poin14 + $data1->poin15 + $data1->poin16 + $data1->poin17 + $data1->poin18 }}</td>

                <td>{{ $data1->poin21 }}</td>
                <td>{{ $data1->poin22 }}</td>
                <td>{{ $data1->poin23 }}</td>
                <td>{{ $data1->poin24 }}</td>
                <td>{{ $data1->poin25 }}</td>
                <td>{{ $data1->poin26 }}</td>
                <td>{{ $data1->poin27 }}</td>
                <td>{{ $data1->poin28 }}</td>

                <td>{{ $data1->poin21 + $data1->poin22 + $data1->poin23 + $data1->poin24 + $data1->poin25 + $data1->poin26 + $data1->poin27 + $data1->poin28 }}</td>

                <td>{{ $data1->poin31 }}</td>
                <td>{{ $data1->poin32 }}</td>
                <td>{{ $data1->poin33 }}</td>
                <td>{{ $data1->poin34 }}</td>
                <td>{{ $data1->poin35 }}</td>
                <td>{{ $data1->poin36 }}</td>
                <td>{{ $data1->poin37 }}</td>
                <td>{{ $data1->poin38 }}</td>

                <td>{{ $data1->poin31 + $data1->poin32 + $data1->poin33 + $data1->poin34 + $data1->poin35 + $data1->poin36 + $data1->poin37 + $data1->poin38 }}</td>

                <td>{{ $data1->poin41 }}</td>
                <td>{{ $data1->poin42 }}</td>
                <td>{{ $data1->poin43 }}</td>
                <td>{{ $data1->poin44 }}</td>
                <td>{{ $data1->poin45 }}</td>
                <td>{{ $data1->poin46 }}</td>
                <td>{{ $data1->poin47 }}</td>
                <td>{{ $data1->poin48 }}</td>

                <td>{{ $data1->poin41 + $data1->poin42 + $data1->poin43 + $data1->poin44 + $data1->poin45 + $data1->poin46 + $data1->poin47 + $data1->poin48 }}</td>
            
            

                <td>
                <img class="img-circle" src="{{ $data1->foto }}"></td>
                </td>
                        
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal{{ $data1->id_data }}">
                        Hapus
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="hapusModal{{ $data1->id_data }}" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="hapusModalLabel">Konfirmasi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ route('evdata.delete', $data1->id_data) }}">
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        @endforeach
        
                </tbody>
            </table>
            </div>

        {{-- <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>test</td>
            <td>
                <a href="#" type="button" class="btn btn-warning rounded-3">Ubah</a>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal">
                    Hapus
                </button>

                <!-- Modal -->
                <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="hapusModalLabel">Konfirmasi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah anda yakin ingin menghapus data ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary">Ya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr> --}}
    </tbody>
</table>

@endsection