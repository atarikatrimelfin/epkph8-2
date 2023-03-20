@extends('layouts.main')

@section('title', 'Rekap Bidang 1')

@section('content')

    <title>Rekap Bidang 1</title>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <a class="btn btn-outline-success"
                    href="{{ route('rb1.export') }}?search={{ request()->has('search') ? request()->search : '1' }}">Download
                    Excel</a>
            </h3>
        </div>
        <div class="card-body">
            <div class="card-body table-responsive p-0">
                <table id="bidang1" class="table table-sm text-nowrap text-hover" style="width=100%">
                    <thead>
                        <tr>
                            <th colspan="42">Tanggal 1 s.d. 31</th>
                        </tr>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Nama</th>
                            <th rowspan="2">Jabatan</th>
                            <th colspan="9" style="text-align: center">Tanaman / Pemeliharaan / Persemaian</th>
                            <th colspan="9" style="text-align: center">Keamanan / Patroli</th>
                            <th colspan="9" style="text-align: center">Sosialisasi / Rapat / Apel</th>
                            <th colspan="9" style="text-align: center">Produksi / Agroforestry / Wisata</th>
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
                        @foreach ($datas1 as $no => $data1)
                            <tr>
                                <th scope="row">{{ ++$no }}.</th>

                                <td>{{ $data1->nama }}</td>
                                <td>{{ $data1->jabatan }}</td>

                                <td>{{ $data1->sum11 }}</td>
                                <td>{{ $data1->sum12 }}</td>
                                <td>{{ $data1->sum13 }}</td>
                                <td>{{ $data1->sum14 }}</td>
                                <td>{{ $data1->sum15 }}</td>
                                <td>{{ $data1->sum16 }}</td>
                                <td>{{ $data1->sum17 }}</td>
                                <td>{{ $data1->sum18 }}</td>
                                <td>{{ $data1->jum1 }}</td>

                                <td>{{ $data1->sum21 }}</td>
                                <td>{{ $data1->sum22 }}</td>
                                <td>{{ $data1->sum23 }}</td>
                                <td>{{ $data1->sum24 }}</td>
                                <td>{{ $data1->sum25 }}</td>
                                <td>{{ $data1->sum26 }}</td>
                                <td>{{ $data1->sum27 }}</td>
                                <td>{{ $data1->sum28 }}</td>
                                <td>{{ $data1->jum2 }}</td>

                                <td>{{ $data1->sum31 }}</td>
                                <td>{{ $data1->sum32 }}</td>
                                <td>{{ $data1->sum33 }}</td>
                                <td>{{ $data1->sum34 }}</td>
                                <td>{{ $data1->sum35 }}</td>
                                <td>{{ $data1->sum36 }}</td>
                                <td>{{ $data1->sum37 }}</td>
                                <td>{{ $data1->sum38 }}</td>
                                <td>{{ $data1->jum3 }}</td>

                                <td>{{ $data1->sum41 }}</td>
                                <td>{{ $data1->sum42 }}</td>
                                <td>{{ $data1->sum43 }}</td>
                                <td>{{ $data1->sum44 }}</td>
                                <td>{{ $data1->sum45 }}</td>
                                <td>{{ $data1->sum46 }}</td>
                                <td>{{ $data1->sum47 }}</td>
                                <td>{{ $data1->sum48 }}</td>
                                <td>{{ $data1->jum4 }}</td>

                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

@endsection