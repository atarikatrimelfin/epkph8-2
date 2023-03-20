@extends('layouts.main')
{{--  @section('title', 'Profile')  --}}
@section('content')

<title>Profile User KPH</title>

<div class="container-fluid px-4">
    <h4 class="mt-1">Profile User</h4>
    <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Welcome, {{ Auth::user()->nama ?? ''}}!</li>
  </ol>

  <section style="background-color: #eee;">
  <div class="container py-5">

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="mt-3 mb-1">{{ Auth::user()->nama ?? ''}}</h5>
            <p class="text-muted mb-1">{{ Auth::user()->level ?? ''}}</p>
            <p class="text-muted mb-4">Perum Perhutani KPH Semarang</p>
            <div class="d-flex justify-content-center mb-2">
            <a class="btn btn-outline-danger" href="/logout" role="button">Logout</a>
              <!-- <button type="button" class="btn btn-outline-primary ms-1">Message</button> -->
            </div>
          </div>
        </div>
        {{-- <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                <p class="mb-0">Sosial Media Pusat Perum Perhutani</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <a href="https://www.facebook.com/perumperhutani/" target="_blank" class="badge">Facebook</a>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <a href="https://twitter.com/perumperhutani" target="_blank" class="badge">Twitter</a>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <a href="https://www.instagram.com/perumperhutani/?hl=id" target="_blank" class="badge">Instagram</a>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <a href="https://www.tiktok.com/@perum.perhutani" target="_blank" class="badge">TikTok</a>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <a href="https://www.youtube.com/channel/UCmMvplsIxDZLQeusTWlLE2w" target="_blank" class="badge">YouTube</a>
              </li>
            </ul>
          </div>
        </div> --}}
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nama</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->nama ?? ''}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">NIP</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->nip ?? ''}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Jabatan</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->jabatan ?? ''}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Wilayah</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->wilayah ?? ''}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection