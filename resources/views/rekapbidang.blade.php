<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Eviden Poin - Rekap Bidang</title>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>

    <div class="container-fulid">
        <div class="row">
            <div class="col-lg-12 py-2 bg-primary">
                <!-- <nav class="navbar navbar-light bg-light"> -->
                    <a class="navbar-light text-light" href="/home">
                        <img src="https://play-lh.googleusercontent.com/X6eLv-VmpsV412pg1EYIQm-fAERYW6kTKIrA0XdSPvfcmf4O8UaTIewiCmie3aDhhjGi" width="30" height="30" class="d-inline-block align-top ml-2" alt="">  Eviden Poin KPH Semarang</a>
                <!-- </nav> -->
                                
                <div class="dropdown float-right ">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->nama ?? ''}}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">
                        <div class="media">
                            <img class="align-self-center mr-3" src="https://1.bp.blogspot.com/-iPBwZjNZRw8/YCoD1genTBI/AAAAAAAAH7o/lRsWaucqH1kTYm-9bxO7u8kKblB80MaKwCLcBGAsYHQ/s2001/logo-perhutani-02.png" height="30" width="30" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0"> {{ Auth::user()->nama ?? ''}} </h5>
                                
                                <small><p class="mb-0">KPH Semarang</p></small>
                            </div>
                        </div>
                        </a>
                        <a class="dropdown-item" href="/profile">Profile</a>
                        <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
            <div class="card mt-4 vh-100">
                <div class="card-body">

                <h4 class="mt-2">Rekap Bidang</h4>
                <div class="text-right">
                    <a href="/rekapdata" class="btn btn-danger ml-3" role="button" aria-pressed="true">Kembali</a>
                </div>

                <div class="input-group mt-2 mb-4">
                    <input name="search" type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                </div>
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
                <th colspan="42">Tanggal 1 s.d. 31</th>
            </tr>

            <tr colspan="38">WILAYAH BARAT</tr>
            <tr colspan="38">WILAYAH TIMUR</tr>

            <tr>
            <th rowspan="3">No.</th>
            <th rowspan="3">Nama</th>
            <th rowspan="3">Jabatan</th>
            <th colspan="9">Tanaman / Pemeliharaan / Persemaian</th>
            <th colspan="9">Keamanan / Patroli</th>              
            <th colspan="9">Sosialisasi / Rapat / Apel</th>
            <th colspan="9">Produksi / Agroforestry / Wisata</th>
            </tr>
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

        

    </table>
            </div>
            </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            </html>