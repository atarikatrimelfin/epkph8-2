@extends('layouts.form')

@section('content')
    <title>Tambah Data Eviden</title>

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
                        <strong class="text-center d-block">Tambah Data Eviden</strong>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('evdata.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="id" class="form-label">Nama Karyawan</label>
                                <select name="id" class="form-control mb-3" id="id">
                                    <option value={{ Auth::user()->id ?? '' }}>{{ Auth::user()->nama ?? '' }}
                                    </option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label>Tanaman / Pemeliharaan / Persemaian</label></br>
                                <input type="checkbox" name="poin12" value="1"> 09.00 - 12.00</br>
                                <input type="radio" name="poin13" value="1"> 12.00 - 15.00</br>
                                <input type="radio" name="poin14" value="1"> 15.00 - 18.00</br>
                                <input type="radio" name="poin15" value="2"> 18.00 - 21.00</br>
                                <input type="radio" name="poin16" value="2"> 21.00 - 00.00</br>
                                <input type="radio" name="poin17" value="2"> 00.00 - 03.00</br>
                                <input type="radio" name="poin18" value="2"> 03.00 - 06.00</br>
                            </div>

                            <div class="mb-3">
                                <label>Keamanan / Patroli</label></br>
                                <input type="radio" name="poin21" value="1"> 06.00 - 09.00</br>
                                <input type="radio" name="poin22" value="1"> 09.00 - 12.00</br>
                                <input type="radio" name="poin23" value="1"> 12.00 - 15.00</br>
                                <input type="radio" name="poin24" value="1"> 15.00 - 18.00</br>
                                <input type="radio" name="poin25" value="2"> 18.00 - 21.00</br>
                                <input type="radio" name="poin26" value="2"> 21.00 - 00.00</br>
                                <input type="radio" name="poin27" value="2"> 00.00 - 03.00</br>
                                <input type="radio" name="poin28" value="2"> 03.00 - 06.00</br>
                            </div>

                            <div class="mb-3">
                                <label>Sosialisasi / Rapat / Apel</label></br>
                                <input type="radio" name="poin31" value="1"> 06.00 - 09.00</br>
                                <input type="radio" name="poin32" value="1"> 09.00 - 12.00</br>
                                <input type="radio" name="poin33" value="1"> 12.00 - 15.00</br>
                                <input type="radio" name="poin34" value="1"> 15.00 - 18.00</br>
                                <input type="radio" name="poin35" value="2"> 18.00 - 21.00</br>
                                <input type="radio" name="poin36" value="2"> 21.00 - 00.00</br>
                                <input type="radio" name="poin37" value="2"> 00.00 - 03.00</br>
                                <input type="radio" name="poin38" value="2"> 03.00 - 06.00</br>
                            </div>

                            <div class="mb-3">
                                <label>Produksi / Agroforestry / Wisata</label></br>
                                <input type="radio" name="poin41" value="1"> 06.00 - 09.00</br>
                                <input type="radio" name="poin42" value="1"> 09.00 - 12.00</br>
                                <input type="radio" name="poin43" value="1"> 12.00 - 15.00</br>
                                <input type="radio" name="poin44" value="1"> 15.00 - 18.00</br>
                                <input type="radio" name="poin45" value="2"> 18.00 - 21.00</br>
                                <input type="radio" name="poin46" value="2"> 21.00 - 00.00</br>
                                <input type="radio" name="poin47" value="2"> 00.00 - 03.00</br>
                                <input type="radio" name="poin48" value="2"> 03.00 - 06.00</br>
                            </div>
                        
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" class="form-inline" id="foto" name="foto">
                            </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" value="Tambah" />
                        <button onclick="window.location='/evdata'" class="btn btn-danger" type="button"
                            aria-pressed="true">Kembali</button>
                    </div>
                    </form>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
