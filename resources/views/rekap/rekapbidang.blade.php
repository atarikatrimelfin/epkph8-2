@extends('layouts.main')

@section('title, Rekap Bidang')

@section('content')

<!DOCTYPE html>
{{--  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">  --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<title>Rekap bidang</title>

<div class="col-lg-12">
    <div class="card mt-4 vh-100">
        <div class="card-body">

            <h4 class="mt-2">Rekap Bidang</h4>
<h3>
    <a class="btn btn-success" href="{{ route('rb.export') }}?search={{ request()->has('search') ? request()->search : '1' }}">Download Excel</a>
</h3>
            <form>
                <div class="input-group mt-2 mb-4">
                    <select name="search" type="number" class="form-control" placeholder="search" aria-label="search"
                        aria-describedby="button-addon2">
                        <option>Pilih Bulan</option>
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
                    height: 500px;
                    overflow: scroll;
                }
            </style>

            <div class="scroll">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th colspan="42">Tanggal 1 s.d. 31</th>
                        </tr>

                        <tr>
                            <th>No.</th>
                            <th>Bidang</th>
                            <th>Jumlah Point</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($datas1 as $data1)
                            @if ($loop->first)
                                <tr>
                                    <th>1.</th>
                                    <td>Tanaman / Pemeliharaan / Persemaian</td>
                                    <td>{{ $data1->jum1 }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>2.</th>
                                    <td>Keamanan / Patroli</td>
                                    <td>{{ $data1->jum2 }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>3.</th>
                                    <td>Sosialisasi / Rapat / Apel</td>
                                    <td>{{ $data1->jum3 }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>4.</th>
                                    <td>Produksi / Agroforestry / Wisata</td>
                                    <td>{{ $data1->jum4 }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>Total</th>
                                    <th>{{ $data1->total }}</th>
                                    <th></th>
                                </tr>
                            

                    </tbody>


                </table>
                        {{-- Start of canvas --}}
                        <canvas id="myChart1" style="width:100%;max-width:600px"></canvas>

                        <script>
                            var xValues = ["Tanaman / Pemeliharaan / Persemaian", "Keamanan / Patroli", "Sosialisasi / Rapat / Apel", "Produksi / Agroforestry / Wisata"
                            ];
                            var yValues = [{{ $data1->jum1 }}, {{ $data1->jum2 }}, {{ $data1->jum3 }}, {{ $data1->jum4 }}
                            ];
                            var barColors = ["red", "green", "blue", "orange"];

                            new Chart("myChart1", {
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
                                        text: "World Wine Production 2018"
                                    }
                                }
                            });
                        </script>
@endif
@endforeach
                        {{-- end of canvas


                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th colspan="42">Tanggal 1 s.d. 31</th>
                                </tr>

                                <tr>
                                    <th>No.</th>
                                    <th>BKPH</th>
                                    <th>Jumlah Point</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($datas1 as $data1)
                                    @if ($loop->first)
                                        <tr>
                                            <th>1.</th>
                                            <td>JEMBOLO SELATAN</td>
                                            <td>{{ $data1->jum1 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>2.</th>
                                            <td>KEDUNGJATI</td>
                                            <td>{{ $data1->jum2 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>3.</th>
                                            <td>MANGGAR</td>
                                            <td>{{ $data1->jum3 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>4.</th>
                                            <td>PADAS</td>
                                            <td>{{ $data1->jum4 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>5.</th>
                                            <td>TEMPURAN</td>
                                            <td>{{ $data1->jum4 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>6.</th>
                                            <td>JEMBOLO UTARA</td>
                                            <td>{{ $data1->jum4 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>7.</th>
                                            <td>PENGGARON</td>
                                            <td>{{ $data1->jum4 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>8.</th>
                                            <td>TANGGUNG</td>
                                            <td>{{ $data1->jum4 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>9.</th>
                                            <td>BARANG</td>
                                            <td>{{ $data1->jum4 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th>Jumlah</th>
                                            <th>{{ $data1->total }}</th>
                                            <th></th>
                                        </tr>
                                    


                            </tbody>


                        </table>

                        {{-- Start of canvas --}}
                        {{-- <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

                        <script>
                            var xValues = ["JEMBOLO SELATAN", "KEDUNGJATI", "MANGGAR", "PADAS", "TEMPURAN", "JEMBOLO UTARA", "PENGGARON",
                                "TANGGUNG", "BARANG"
                            ];
                            var yValues = [{{ $data1->jum1 }}, {{ $data1->jum1 }}, {{ $data1->jum1 }}, {{ $data1->jum1 }},
                                {{ $data1->jum1 }}, {{ $data1->jum1 }}, {{ $data1->jum1 }}, {{ $data1->jum1 }}, {{ $data1->jum1 }}
                            ];
                            var barColors = ["red", "green", "blue", "orange", "brown", "red", "green", "blue", "orange"];

                            new Chart("myChart", {
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
                                        text: "World Wine Production 2018"
                                    }
                                }
                            });
                        </script>
@endif
@endforeach --}}
                        {{-- end of canvas --}}
            </div>
        </div>
    </div>
</div>
@endsection

{{--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
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
</script>  --}}

</html>
