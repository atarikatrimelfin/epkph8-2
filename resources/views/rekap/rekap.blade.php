@extends('layouts.main')

@section('title', 'Rekap Eviden Poin')

@section('content')

    <title>Rekap Eviden Poin</title>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <a class="btn btn-outline-success"
                    href="{{ route('r.export') }}?search={{ request()->has('search') ? request()->search : '01' }}">Download
                    Excel
                </a>
            </h3>
        </div>
        <div class="card-body">
            <div class="chart-container">
                <canvas id="myChart2"></canvas>
            </div>
            <form>
                <div class="input-group mt-2 mb-4">
                    <select name="search" type="number" class="form-control" placeholder="search" aria-label="search"
                        aria-describedby="button-addon2">
                        <option>PILIH BULAN</option>
                        <option value="01">Januari</option>
                        <option value="02">Febuari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>

                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                </div>
            </form>

            <!-- buat scroll -->
            <style>
                .scroll {
                    height: 800px;
                    overflow: scroll;
                }
            </style>

            <div class="scroll">
                <table class="table text-nowrap text-hover">
                    <thead>
                        <tr>
                            <th rowspan="3">No.</th>
                            <th rowspan="3">Nama</th>
                            <th rowspan="3">Jabatan</th>
                            <th colspan="31">POIN EVIDEN</th>
                        </tr>

                        <tr>
                            <th colspan="31">Tanggal 1 s.d. 31</th>
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


                            <th>9</th>
                            <th>10</th>
                            <th>11</th>
                            <th>12</th>
                            <th>13</th>
                            <th>14</th>
                            <th>15</th>
                            <th>16</th>


                            <th>17</th>
                            <th>18</th>
                            <th>19</th>
                            <th>20</th>
                            <th>21</th>
                            <th>22</th>
                            <th>23</th>
                            <th>24</th>


                            <th>25</th>
                            <th>26</th>
                            <th>27</th>
                            <th>28</th>
                            <th>29</th>
                            <th>30</th>
                            <th>31</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                            $tgl1jum = 0;
                            $tgl2jum = 0;
                            $tgl3jum = 0;
                            $tgl4jum = 0;
                            $tgl5jum = 0;
                            $tgl6jum = 0;
                            $tgl7jum = 0;
                            $tgl8jum = 0;
                            $tgl9jum = 0;
                            $tgl10jum = 0;
                            $tgl11jum = 0;
                            $tgl12jum = 0;
                            $tgl13jum = 0;
                            $tgl14jum = 0;
                            $tgl15jum = 0;
                            $tgl16jum = 0;
                            $tgl17jum = 0;
                            $tgl18jum = 0;
                            $tgl19jum = 0;
                            $tgl20jum = 0;
                            $tgl21jum = 0;
                            $tgl22jum = 0;
                            $tgl23jum = 0;
                            $tgl24jum = 0;
                            $tgl25jum = 0;
                            $tgl26jum = 0;
                            $tgl27jum = 0;
                            $tgl28jum = 0;
                            $tgl29jum = 0;
                            $tgl30jum = 0;
                            $tgl31jum = 0;
                        @endphp

                        @foreach ($datas1 as $no => $data1)
                            <tr>
                                <th scope="row">{{ ++$no }}.</th>

                                <td>{{ $data1->nama }}</td>
                                <td>{{ $data1->jabatan }}</td>

                                <td>{{ $data1->tgl01 }}</td>
                                <td>{{ $data1->tgl02 }}</td>
                                <td>{{ $data1->tgl03 }}</td>
                                <td>{{ $data1->tgl04 }}</td>
                                <td>{{ $data1->tgl05 }}</td>
                                <td>{{ $data1->tgl06 }}</td>
                                <td>{{ $data1->tgl07 }}</td>
                                <td>{{ $data1->tgl08 }}</td>


                                <td>{{ $data1->tgl09 }}</td>
                                <td>{{ $data1->tgl10 }}</td>
                                <td>{{ $data1->tgl11 }}</td>
                                <td>{{ $data1->tgl12 }}</td>
                                <td>{{ $data1->tgl13 }}</td>
                                <td>{{ $data1->tgl14 }}</td>
                                <td>{{ $data1->tgl15 }}</td>
                                <td>{{ $data1->tgl16 }}</td>


                                <td>{{ $data1->tgl17 }}</td>
                                <td>{{ $data1->tgl18 }}</td>
                                <td>{{ $data1->tgl19 }}</td>
                                <td>{{ $data1->tgl20 }}</td>
                                <td>{{ $data1->tgl21 }}</td>
                                <td>{{ $data1->tgl22 }}</td>
                                <td>{{ $data1->tgl23 }}</td>
                                <td>{{ $data1->tgl24 }}</td>


                                <td>{{ $data1->tgl25 }}</td>
                                <td>{{ $data1->tgl26 }}</td>
                                <td>{{ $data1->tgl27 }}</td>
                                <td>{{ $data1->tgl28 }}</td>
                                <td>{{ $data1->tgl29 }}</td>
                                <td>{{ $data1->tgl30 }}</td>
                                <td>{{ $data1->tgl31 }}</td>

                                @php
                                    $tgl1jum += $data1->tgl01;
                                    $tgl2jum += $data1->tgl02;
                                    $tgl3jum += $data1->tgl03;
                                    $tgl4jum += $data1->tgl04;
                                    $tgl5jum += $data1->tgl05;
                                    $tgl6jum += $data1->tgl06;
                                    $tgl7jum += $data1->tgl07;
                                    $tgl8jum += $data1->tgl08;
                                    $tgl9jum += $data1->tgl09;
                                    $tgl10jum += $data1->tgl10;
                                    $tgl11jum += $data1->tgl11;
                                    $tgl12jum += $data1->tgl12;
                                    $tgl13jum += $data1->tgl13;
                                    $tgl14jum += $data1->tgl14;
                                    $tgl15jum += $data1->tgl15;
                                    $tgl16jum += $data1->tgl16;
                                    $tgl17jum += $data1->tgl17;
                                    $tgl18jum += $data1->tgl18;
                                    $tgl19jum += $data1->tgl19;
                                    $tgl20jum += $data1->tgl20;
                                    $tgl21jum += $data1->tgl21;
                                    $tgl22jum += $data1->tgl22;
                                    $tgl23jum += $data1->tgl23;
                                    $tgl24jum += $data1->tgl24;
                                    $tgl25jum += $data1->tgl25;
                                    $tgl26jum += $data1->tgl26;
                                    $tgl27jum += $data1->tgl27;
                                    $tgl28jum += $data1->tgl28;
                                    $tgl29jum += $data1->tgl29;
                                    $tgl30jum += $data1->tgl30;
                                    $tgl31jum += $data1->tgl31;
                                @endphp
                            </tr>
                        @endforeach
                    </tbody>
                    <tr>
                        <th colspan=3>JUMLAH</th>
                        <th>{{ $tgl1jum }}</th>
                        <th>{{ $tgl2jum }}</th>
                        <th>{{ $tgl3jum }}</th>
                        <th>{{ $tgl4jum }}</th>
                        <th>{{ $tgl5jum }}</th>
                        <th>{{ $tgl6jum }}</th>
                        <th>{{ $tgl7jum }}</th>
                        <th>{{ $tgl8jum }}</th>
                        <th>{{ $tgl9jum }}</th>
                        <th>{{ $tgl10jum }}</th>
                        <th>{{ $tgl11jum }}</th>
                        <th>{{ $tgl12jum }}</th>
                        <th>{{ $tgl13jum }}</th>
                        <th>{{ $tgl14jum }}</th>
                        <th>{{ $tgl15jum }}</th>
                        <th>{{ $tgl16jum }}</th>
                        <th>{{ $tgl17jum }}</th>
                        <th>{{ $tgl18jum }}</th>
                        <th>{{ $tgl19jum }}</th>
                        <th>{{ $tgl20jum }}</th>
                        <th>{{ $tgl21jum }}</th>
                        <th>{{ $tgl22jum }}</th>
                        <th>{{ $tgl23jum }}</th>
                        <th>{{ $tgl24jum }}</th>
                        <th>{{ $tgl25jum }}</th>
                        <th>{{ $tgl26jum }}</th>
                        <th>{{ $tgl27jum }}</th>
                        <th>{{ $tgl28jum }}</th>
                        <th>{{ $tgl29jum }}</th>
                        <th>{{ $tgl30jum }}</th>
                        <th>{{ $tgl31jum }}</th>
                    </tr>
                </table>
                <style>
                    table {
                        width: 100%;
                        border-collapse: collapse;
                    }

                    thead {
                        position: sticky;
                        top: 0;
                        background-color: #fff;
                    }
                </style>
            </div>

            {{-- Start of chart --}}
            <script>
                var xValues = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18",
                    "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31"
                ];
                var yValues = [{{ $tgl1jum }}, {{ $tgl2jum }}, {{ $tgl3jum }}, {{ $tgl4jum }},
                    {{ $tgl5jum }}, {{ $tgl6jum }}, {{ $tgl7jum }}, {{ $tgl8jum }},
                    {{ $tgl9jum }}, {{ $tgl10jum }}, {{ $tgl11jum }}, {{ $tgl12jum }},
                    {{ $tgl13jum }}, {{ $tgl14jum }}, {{ $tgl15jum }}, {{ $tgl16jum }},
                    {{ $tgl17jum }}, {{ $tgl18jum }}, {{ $tgl19jum }}, {{ $tgl20jum }},
                    {{ $tgl21jum }}, {{ $tgl22jum }}, {{ $tgl23jum }}, {{ $tgl24jum }},
                    {{ $tgl25jum }}, {{ $tgl26jum }}, {{ $tgl27jum }}, {{ $tgl28jum }},
                    {{ $tgl29jum }}, {{ $tgl30jum }}, {{ $tgl31jum }}
                ];
                var barColors = ("green");

                new Chart("myChart2", {
                    type: "bar",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: "REKAP EVIDEN POIN"
                        }
                    }
                });
            </script>

            <style>
                .chart-container {
                    position: relative;
                    width: 75%;
                    /* max-width: 1000px; */
                }
            </style>
            {{-- end of chart --}}
        </div>
    </div>
@endsection

<!-- Dropdown -->
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
