@extends('evdata.layout')
@section('title', 'Tambah Eviden')
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

        {{--  <h5 class="card-title fw-bolder mb-3">Tambah Eviden</h5>  --}}

		<form method="post" action="{{ route('evdata.store') }}">
			@csrf
        
        <div class="mb-3">
        <label>Tanaman / Pemeliharaan / Persemaian</label></br>
        <input type="checkbox" name="poin11" value="1"> Shift 1</br>
        <input type="checkbox" name="poin12" value="1"> Shift 2</br>
        <input type="checkbox" name="poin13" value="1"> Shift 3</br>
        <input type="checkbox" name="poin14" value="1"> Shift 4</br>
        <input type="checkbox" name="poin15" value="2"> Shift 5</br>
        <input type="checkbox" name="poin16" value="2"> Shift 6</br>
        <input type="checkbox" name="poin17" value="2"> Shift 7</br>
        <input type="checkbox" name="poin18" value="2"> Shift 8</br>
</div>

<div class="mb-3">
        <label>Keamanan / Patroli</label></br>
        <input type="checkbox" name="poin21" value="1"> Shift 1</br>
        <input type="checkbox" name="poin22" value="1"> Shift 2</br>
        <input type="checkbox" name="poin23" value="1"> Shift 3</br>
        <input type="checkbox" name="poin24" value="1"> Shift 4</br>
        <input type="checkbox" name="poin25" value="2"> Shift 5</br>
        <input type="checkbox" name="poin26" value="2"> Shift 6</br>
        <input type="checkbox" name="poin27" value="2"> Shift 7</br>
        <input type="checkbox" name="poin28" value="2"> Shift 8</br>
</div>

<div class="mb-3">
        <label>Sosialisasi / Rapat / Apel</label></br>
        <input type="checkbox" name="poin31" value="1"> Shift 1</br>
        <input type="checkbox" name="poin32" value="1"> Shift 2</br>
        <input type="checkbox" name="poin33" value="1"> Shift 3</br>
        <input type="checkbox" name="poin34" value="1"> Shift 4</br>
        <input type="checkbox" name="poin35" value="2"> Shift 5</br>
        <input type="checkbox" name="poin36" value="2"> Shift 6</br>
        <input type="checkbox" name="poin37" value="2"> Shift 7</br>
        <input type="checkbox" name="poin38" value="2"> Shift 8</br>
</div>

<div class="mb-3">
        <label>Produksi / Agroforestry / Wisata</label></br>
        <input type="checkbox" name="poin41" value="1"> Shift 1</br>
        <input type="checkbox" name="poin42" value="1"> Shift 2</br>
        <input type="checkbox" name="poin43" value="1"> Shift 3</br>
        <input type="checkbox" name="poin44" value="1"> Shift 4</br>
        <input type="checkbox" name="poin45" value="2"> Shift 5</br>
        <input type="checkbox" name="poin46" value="2"> Shift 6</br>
        <input type="checkbox" name="poin47" value="2"> Shift 7</br>
        <input type="checkbox" name="poin48" value="2"> Shift 8</br>
</div>


            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-inline" id="foto" name="foto">
            </div>

            <div class="mb-3">
                <label for="id" class="form-label">Nama Karyawan</label>
                <select name="id" class="form-control mb-3" id="id">
      <option value={{ Auth::user()->id ?? ''}}>{{ Auth::user()->nama ?? ''}}</option>
            </div>
      
            </div>

            
            <!-- <div class="mb-3">
                <label for="level" class="form-label">Level Akun</label>
                <input>
                <select class="form-control" name="level" id="level">
                    <option selected>Pilih level..</option>
                    <option value="admin">admin</option>
                    <option value="user">user</option>
                </select>
                
            </div> -->
            
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Tambah" />
                <a href="/evdata" class="btn btn-danger ml-3" role="button" aria-pressed="true">Kembali</a>
			</div>
            
            
		</form>
	</div>
</div>

@stop