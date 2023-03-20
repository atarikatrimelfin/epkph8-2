@extends('layouts.main')

@section('title', 'Data Laporan Eviden')

@section('content')

    <title>Data Laporan Eviden</title>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button class="btn btn-outline-primary" type="button" onclick="window.location='{{ route('evdata.add') }}'">
                    Tambah Eviden
                </button>
            </h3>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success mt-3" role="alert">
                    {{ $message }}
                </div>
            @endif

            <div class="card-body table-responsive p-0">
                <table id="evpo" class="table table-sm text-nowrap table-hover" style="width: 100%">
                    <thead>
                        <tr>
                            <th colspan="42">{{ Auth::user()->nama ?? '' }}</th>
                        </tr>
                        <tr>
                            <th rowspan="2" style="text-align: center">Tanggal</th>
                            <th colspan="9" style="text-align: center">Tanaman / Pemeliharaan / Persemaian</th>
                            <th colspan="9" style="text-align: center">Keamanan / Patroli</th>
                            <th colspan="9" style="text-align: center">Sosialisasi / Rapat / Apel</th>
                            <th colspan="9" style="text-align: center">Produksi / Agroforestry / Wisata</th>
                            <th rowspan="2" style="text-align: center">Foto</th>
                            <th rowspan="2" style="text-align: center">Aksi</th>
                        </tr>
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
                                <td>{{ $data1->poin11 + $data1->poin12 + $data1->poin13 + $data1->poin14 + $data1->poin15 + $data1->poin16 + $data1->poin17 + $data1->poin18 }}
                                </td>

                                <td>{{ $data1->poin21 }}</td>
                                <td>{{ $data1->poin22 }}</td>
                                <td>{{ $data1->poin23 }}</td>
                                <td>{{ $data1->poin24 }}</td>
                                <td>{{ $data1->poin25 }}</td>
                                <td>{{ $data1->poin26 }}</td>
                                <td>{{ $data1->poin27 }}</td>
                                <td>{{ $data1->poin28 }}</td>

                                <td>{{ $data1->poin21 + $data1->poin22 + $data1->poin23 + $data1->poin24 + $data1->poin25 + $data1->poin26 + $data1->poin27 + $data1->poin28 }}
                                </td>

                                <td>{{ $data1->poin31 }}</td>
                                <td>{{ $data1->poin32 }}</td>
                                <td>{{ $data1->poin33 }}</td>
                                <td>{{ $data1->poin34 }}</td>
                                <td>{{ $data1->poin35 }}</td>
                                <td>{{ $data1->poin36 }}</td>
                                <td>{{ $data1->poin37 }}</td>
                                <td>{{ $data1->poin38 }}</td>

                                <td>{{ $data1->poin31 + $data1->poin32 + $data1->poin33 + $data1->poin34 + $data1->poin35 + $data1->poin36 + $data1->poin37 + $data1->poin38 }}
                                </td>

                                <td>{{ $data1->poin41 }}</td>
                                <td>{{ $data1->poin42 }}</td>
                                <td>{{ $data1->poin43 }}</td>
                                <td>{{ $data1->poin44 }}</td>
                                <td>{{ $data1->poin45 }}</td>
                                <td>{{ $data1->poin46 }}</td>
                                <td>{{ $data1->poin47 }}</td>
                                <td>{{ $data1->poin48 }}</td>

                                <td>{{ $data1->poin41 + $data1->poin42 + $data1->poin43 + $data1->poin44 + $data1->poin45 + $data1->poin46 + $data1->poin47 + $data1->poin48 }}
                                </td>

                                <td>
                                    <img class="img-circle" src="{{ $data1->foto }}">
                                </td>

                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#hapusModal{{ $data1->id_data }}">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                    {{-- <!-- Modal -->
                                    <div id="hapusModal{{ $data1->id_data }}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Modal Header</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Some text in the modal.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div> --}}

                                    <!-- Modal -->
                                    <div class="modal fade" id="hapusModal{{ $data1->id_data }}" tabindex="-1"
                                        aria-labelledby="hapusModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="hapusModalLabel">Konfirmasi</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form method="POST"
                                                    action="{{ route('evdata.delete', $data1->id_data) }}">
                                                    @csrf
                                                    <div class="modal-body">
                                                        Apakah anda yakin ingin menghapus data ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-danger">Ya</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
                                integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
                            </script>
                            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
                            </script>
                            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
                                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
                            </script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
                                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
                            </script>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
