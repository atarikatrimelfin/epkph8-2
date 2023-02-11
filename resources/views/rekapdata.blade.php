@extends('layouts.app')
@section('title', 'Rekap Data')
@section('content')

<div class="container-fluid px-4">
  <h1 class="mt-1">Rekap Data</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Hasil Rekap Data Keseluruhan Eviden Poin</li>
  </ol>


  <div class="row">

    <div class="col-xl-3 col-md-6">
      <div class="card border-primary text-primary mb-4">
        <div class="card-body">Harian</div>
        <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-primary stretched-link" href="/rekapdata/harian">View Details</a>
          <div class="small text-primary"><i class="fas fa-angle-right"></i></div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6">
      <div class="card bg-secondary text-white mb-4">
        <div class="card-body">Rekap Bidang 1</div>
        <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="/rekapdata/rekapbidang1">View Details</a>
          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6">
      <div class="card bg-warning text-white mb-4">
        <div class="card-body">Rekap Bidang</div>
        <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="/rekapdata/rekapbidang">View Details</a>
          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6">
      <div class="card bg-warning text-white mb-4">
        <div class="card-body">REKAP</div>
        <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="/rekapdata/rekap">View Details</a>
          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6">
      <div class="card bg-info text-white mb-4">
        <div class="card-body">Grafik</div>
        <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="/rekapdata/grafik">View Details</a>
          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
        </div>
      </div>
    </div>
    
  </div>

</div>

    <!-- <div class="navbar navbar-expand-lg navbar-light bg-light fixed-position">
        <a class="nav-item nav-link {{($key=='harian') ? 'active': ''}} " href="/rekapdata/harian">Harian</a>
        <a class="nav-item nav-link {{($key=='rekapbidang1') ? 'active': ''}}" href="/rekapdata/rekapbidang1">Rekap Bidang 1</a>
        <a class="nav-item nav-link {{($key=='rekapbidang') ? 'active': ''}}" href="/rekapdata/rekapbidang">Rekap Bidang</a>
        <a class="nav-item nav-link {{($key=='grafik') ? 'active': ''}}" href="/rekapdata/grafik">Grafik</a>
    </div>
    
    <div class="card-body">
        @yield('content')
    </div> -->


@endsection